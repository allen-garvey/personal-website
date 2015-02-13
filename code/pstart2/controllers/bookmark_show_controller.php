<?php 

//class used to decide if certain bookmarks should be displayed based on days of week

class AGED_Bookmark_Show_Controller{
	protected $user_agent;
	protected $timestamp;
	
	protected $device_code;
	protected $is_authorized;
	protected $day_of_week;
	protected $day_of_month;
	// protected $us_formatted_date;
	

	public function __construct($timestamp, $user_agent){
		$this->user_agent = $user_agent;
		$this->timestamp = $timestamp;
		
		$this->device_code = $this->calculate_device_code($this->user_agent);
		$this->is_authorized = $this->test_for_authorization($this->user_agent);
		$this->day_of_week = date('D', $this->timestamp);
		$this->day_of_month = date('d', $this->timestamp);
		// $this->us_formatted_date = date('m/d/Y', $this->timestamp);

	}

	public function get_is_authorized(){
		return $this->is_authorized;
	}

	public function get_device_code(){
		return $this->device_code;
	}

	protected function test_for_authorization($user_agent){
		// if(isset($_COOKIE['user']) && $_COOKIE['user'] === 'Allen is great 34424240 $$2323 !!!!)23899932434985534232498' && strpos($user_agent, 'Mac') !== false && strpos($user_agent, 'Safari') !== false){
		// 	return true;
		// }
		return false;
	}

	protected function calculate_device_code($user_agent){
		if (strpos($user_agent, 'iPad') !== false) {
			return 80;
		}
		elseif (strpos($user_agent, 'iP') !== false) { //tests for iPod and iPhone
			return 50;
		}
		elseif (strpos($user_agent, 'kindle') !== false) { //tests for iPad, iPod, and iPhone
			return 70;
		}
		return 90;
	}

	public function always_true(){
		return true;
	}

	public function should_show_m(){
		if($this->day_of_month > 22 || $this->day_of_month < 8){
			return true;
		}
		return false;
	}

	public function should_show_z(){
		if($this->day_of_month === 1){
			return true;
		}
		return false;
	}

	public function should_show_x(){
		if(!in_array($this->day_of_week, array('Mon'))){
			return true;
		}
		return false;
	}

	public function should_show_y(){
		if(in_array($this->day_of_week, array('Fri', 'Sat', 'Sun'))){
			return true;
		}
		return false;
	}

}


?>