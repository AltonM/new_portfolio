<?php
	/*
		OBJECTS
	*/
	
	
	class mysql{
		public $DB = 'projects';
		public $password = '';
		public $username = 'root';
		public $host = 'localhost';
		public $lastInserted = '';
		public function getrows($sql){
			//connect to the database
			$conn = $this->connection();
			//get the database infomation.
			$result = $conn->query($sql);
			//format the rows
			$result = $this->sortRows($result);
			//close the connection
			$conn->close();
			
			//return the rows
			return $result;
		}
		
		//Change information without returning rows
		public function setInfo($sql){
			//connect to the database
			$conn = $this->connection();
			//get the database infomation.
			$result = $conn->query($sql);
			
			$this->lastInserted  = mysqli_insert_id($conn);
			//close the connection
			$conn->close();
		}
		
		public function hashArray($array,$by){
			$new_array = [];
			foreach($array as $a){
				$new_array[$a[$by]][] = $a;
			}
			
			return $new_array;
		}
		
		public function connection(){
			$db = $this->DB; //database
			$p = $this->password; //password
			$u = $this->username; //username
			$h = $this->host; //host;
			
			/*
				create the connection
			*/
			$conn = new mysqli($h,$u,$p,$db);
			
			if($conn->connect_error){
				die('connection failed :'.$conn->connect_error);
			}
			
			return $conn;

		}
		
		public function sortRows($results){
			$info_array = [];
			if($results->num_rows > 0){
				while($row = $results->fetch_assoc()){
					$info_array[count($info_array)] = $row;
				}
			}
			
			return $info_array;
		}
		
		public function getRowCount($sql){
			$r = $this->getrows($sql);
			return count($r);
		}
	
	}
	
	$conn = new mysql();
	
	
	
	class pages{
		public $current_page;
		
		public $pages = array(
			'home'=> array(
				'page'=>'Home'
				,'link'=>'home/'
				,'no_page'=>false
			)
			,'works'=> array(
				'page'=>'Portfolio'
				,'link'=>'portfolio/'
				,'no_page'=>false
			)
			,'about'=> array(
				'page'=>'About'
				,'link'=>'about/'
				,'no_page'=>true
			)
			,'contact'=> array(
				'page'=>'Contact'
				,'link'=>'contact/'
				,'no_page'=>true
			)
			,'live-preview'=> array(
				'page'=>'Live Preview'
				,'link'=>'live-preview/'
				,'no_page'=>false
			)
		);
		public function set_current_page($p){
			$this->current_page = $p;
		}
		
		public function backtrace(){
			$backtrace_array = array();
			if(isset($_GET['page'])){
				$backtrace_array[] = '../'; 
			}
			
			if(isset($_GET['work'])){
				$backtrace_array[] = '../'; 
			}
			
			return implode($backtrace_array,'');
		}
		
		public function load_pages(){
			foreach($this->pages as $key=>$p){
				$active = ($key == $this->current_page)?'active':'';
				echo '<div class="nav-item '.$active.'">
						<div id="'.strtolower($key).'">
							<div>';
							if(!$active){
								if($p['no_page']){
									echo '<a href="'.$this->backtrace().$p['link'].'" onclick="return false;">'.$p['page'].'</a>';
								}else{
									echo '<a href="'.$this->backtrace().$p['link'].'">'.$p['page'].'</a>';
								}
							}else{
								echo $p['page'];	
							}
				echo	'</div>
						</div>
					</div>';
			}
		}
	}
	
	class project{
	
		public $project_count;
		public $projects;
		
		
		public function get_all_projects(){
			global $conn;
			
			$sql = 'SELECT sp.sub_project_id as id,sp.*,pi.*,p.company,p.project_name as pname
					FROM sub_porjects as sp
					INNER JOIN s_images as si
					ON si.sub_project_id = sp.sub_project_id
					INNER JOIN project_images as pi
					ON pi.image_id = si.image_id
					INNER JOIN projects as p
					ON p.project_id = sp.parent_project
					ORDER BY sp.sub_project_id';
			$results = $conn->hashArray($conn->getrows($sql),'id');
			$this->projects = $results;
		}
	}
	
	
?>
