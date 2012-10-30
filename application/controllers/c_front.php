<?php

class C_Front extends CI_Controller {
	var $data;
	var $count;

	public function _construct() {

		parent::_construct();
		$this -> data = '';
		$this -> load -> helper('url');
		$this -> count = 1;

	}

public function summary(){ $this -> load -> view('summary');}
	public function index() {		$this -> load -> view('index');     	}

	public function mentoreg(){	    $this -> load -> view('v_mentoreg');    }
	
    public function menteereg(){	$this -> load -> view('v_menteereg');	}
	
	public function contribution(){	$this -> load -> view('v_contribution');}
	
	public function budget(){	$this -> load -> view('v_budget');	}

	public function calendar(){	$this -> load -> view('v_calendar');	}
	
	public function excursion(){	$this -> load -> view('v_excursion');	}
	
	public function feedback(){		$this -> load -> view('v_feedback');	}
	
	public function forgot(){ 		$this -> laod -> view('v_forgot');      }
	
	public function grade(){		$this -> load -> view('v_grades.php');	}
	
	public function login(){		$this -> load -> view('v_login');    }
	
	public function mentee_attendance(){ 	$this -> load -> view('v_mentee_attendance');	}
	
	public function mentor_attendance(){		$this -> load -> view('v_mentor_attendance');	}
	
	public function reports(){		$this -> load -> view('v_reports');	}
	
	public function subject(){		$this -> load -> view('v_subject');	}
	
	public function talk(){		$this -> load -> view('v_talk');	}
	
	public function topic(){		$this -> load -> view('v_topic');	}
	
	public function training(){		$this -> load -> view('v_training');	}
	
	public function uploads(){		$this -> load -> view('v_uploads');	}
	
	public function users(){		$this -> load -> view('v_users');	}
	
	public function moreinfo() {    $this -> load -> view('more_info');  	}
	
	public function meeting() { $this -> load -> view ('v_meeting');   }
	
	public function tutor() { $this -> load -> view ('v_tutor');   }

}
?>