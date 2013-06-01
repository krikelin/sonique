<?php
class ScheduleController extends AppController {
	var $components = array('Auth');
	var $uses = array('User', 'Lession', 'Course');
	public function beforeFilter() {
		parent::beforeFilter();
		$this->layout = 'schedule';
	}
	public function users($id) {

		$week = ltrim(date('W'), '0');
		$sql = "SELECT * FROM lessions INNER JOIN courses ON courses.id = lessions.course_id WHERE user_id = ".$id." AND  lessions.time BETWEEN ('".date('Y')."-01-01' + INTERVAL " . ($week-1) . " WEEK) AND ('".date('Y')."-01-01' + INTERVAL " . ($week + 1) . " WEEK) ORDER BY time ASC";

		$result = $this->Lession->query($sql);
		$weekdays = array(array(), array(), array(), array(), array(), array(), array());

		foreach($result as $les) {
			$weekday = ltrim(date('w', strtotime($les['lessions']['time'])), '0')-1;
			debug($weekday);
			$weekdays[$weekday] = array($les);
		
		}
		$this->set(compact('weekdays'));
		$this->render('users');

	}
}