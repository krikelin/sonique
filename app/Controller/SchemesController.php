<?php
class SchemesController extends AppController {
	var $components = array('Auth');
	var $uses = array('User', 'Lession', 'Course');
	public function beforeFilter() {
		parent::beforeFilter();
		$this->layout = 'schedule';
		$this->week = ltrim(date('W'), '0') ;
		$this->year = date('Y');
		if(isset($this->request->query['year'])) {
			$this->year = $this->request->query['year'];
		}
		if(isset($this->request->query['week'])) {
			$this->week = $this->request->query['week'];
		}
	
	}
	public function index() {

	}
	public function users($id) {

		$sql = "SELECT * FROM lessions INNER JOIN users INNER JOIN users AS tutors ON tutors.id = lessions.tutor_id INNER JOIN halls ON halls.id = lessions.hall_id INNER JOIN courses ON courses.id = lessions.course_id INNER JOIN course_class ON course_class.id = lessions.course_class_id INNER JOIN course_class_users ON  course_class_users.user_id = users.id OR lessions.tutor_id = ".$id." WHERE lessions.time BETWEEN ('".$this->year."-01-01' + INTERVAL " . ($this->week-1) . " WEEK - INTERVAL  1 DAY) AND ('".$this->year."-01-01' + INTERVAL " . ($this->week-1) . " WEEK + INTERVAL 6  DAY) AND (course_class_users.user_id = ".$id." OR lessions.tutor_id = ".$id.") GROUP BY lessions.id ORDER BY time ASC";

		$result = $this->Lession->query($sql);
		//die($sql);
		$weekdays = array(array(), array(), array(), array(), array(), array(), array());
		foreach($result as $les) {
			$weekday = ltrim(date('N', strtotime($les['lessions']['time'])), '0')-1;
			print $weekday;
		//	debug($weekday);
			$weekdays[$weekday][] = ($les);
		
		}
		$year = $this->year;
		$week = $this->week;
		
		$this->set(compact('weekdays', 'year', 'week'));
		$this->render('users');

	}
	public function courses($id) {

		$sql = "SELECT * FROM lessions INNER JOIN users INNER JOIN users AS tutors ON tutors.id = lessions.tutor_id INNER JOIN halls ON halls.id = lessions.hall_id INNER JOIN courses ON courses.id = lessions.course_id INNER JOIN course_class ON course_class.id = lessions.course_class_id INNER JOIN course_class_users ON  course_class_users.user_id = users.id OR lessions.course_class_id = ".$id." WHERE lessions.time BETWEEN ('".$this->year."-01-01' + INTERVAL " . ($this->week-1) . " WEEK - INTERVAL  1 DAY) AND ('".$this->year."-01-01' + INTERVAL " . ($this->week-1) . " WEEK + INTERVAL 6  DAY) AND (course_class.course_id = ".$id.") GROUP BY lessions.id ORDER BY time ASC";

		$result = $this->Lession->query($sql);

		$weekdays = array(array(), array(), array(), array(), array(), array(), array());
		foreach($result as $les) {
			$weekday = ltrim(date('N', strtotime($les['lessions']['time'])), '0')-1;
			print $weekday;
		//	debug($weekday);
			$weekdays[$weekday][] = ($les);
		
		}
		$year = $this->year;
		$week = $this->week;
		
		$this->set(compact('weekdays', 'year', 'week'));
		$this->render('users');

	}
	public function classes($id) {

		$sql = "SELECT * FROM lessions INNER JOIN users INNER JOIN users AS tutors ON tutors.id = lessions.tutor_id INNER JOIN halls ON halls.id = lessions.hall_id INNER JOIN courses ON courses.id = lessions.course_id INNER JOIN course_class ON course_class.id = lessions.course_class_id INNER JOIN course_class_users ON  course_class_users.user_id = users.id OR lessions.tutor_id = ".$id." WHERE lessions.time BETWEEN ('".$this->year."-01-01' + INTERVAL " . ($this->week-1) . " WEEK - INTERVAL  1 DAY) AND ('".$this->year."-01-01' + INTERVAL " . ($this->week-1) . " WEEK + INTERVAL 6  DAY) AND (course_class.id = ".$id.") GROUP BY lessions.id ORDER BY time ASC";

		$result = $this->Lession->query($sql);

		$weekdays = array(array(), array(), array(), array(), array(), array(), array());
		foreach($result as $les) {
			$weekday = ltrim(date('N', strtotime($les['lessions']['time'])), '0')-1;
			print $weekday;
		//	debug($weekday);
			$weekdays[$weekday][] = ($les);
		
		}
		$year = $this->year;
		$week = $this->week;
		
		$this->set(compact('weekdays', 'year', 'week'));
		$this->render('users');

	}
	public function halls($id) {

		$year = $this->year;
		$week = $this->week;
		$sql = "SELECT * FROM lessions INNER JOIN users AS tutors ON tutors.id = lessions.tutor_id INNER JOIN halls ON halls.id = lessions.hall_id INNER JOIN courses ON courses.id = lessions.course_id WHERE lessions.hall_id = ".$id." AND  lessions.time BETWEEN ('".$this->year."-01-01' + INTERVAL " . ($this->week-1) . " WEEK - INTERVAL 1 DAY) AND ('".$this->year."-01-01' + INTERVAL " . ($this->week-1) . " WEEK + INTERVAL 5 DAY) ORDER BY time ASC";

		$result = $this->Lession->query($sql);
		$weekdays = array(array(), array(), array(), array(), array(), array(), array());
		foreach($result as $les) {
			$weekday = ltrim(date('w', strtotime($les['lessions']['time'])), '0')-1;
		//	debug($weekday);
			$weekdays[$weekday][] = ($les);
		
		}
		$this->set(compact('weekdays', 'year', 'week'));
		$this->render('users');

	}}