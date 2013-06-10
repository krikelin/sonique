<?php
class SchedulesController extends AppController {
	public $components = array('Auth', 'RequestHandler');
	public $uses = array('Schedule', 'User', 'Course', 'Hall', 'CourseClass', 'CourseClassUser');
	public function beforeFilter() {
		parent::beforeFilter();
	}

	/**
	 * Return querystring
	 */
	public function get($var, $default = FALSE) {
		if(isset($this->request->query[$var])) {
			return $this->request->query[$var];
		} else {
			return $default;
		}
	}
	public function index() {
		$classId = $this->get('classId', 0);
		$userId = $this->get('userId', 0);
		$courseId = $this->get('courseId', 0);

		$hallId = $this->get('hallId', 0);

		$week = $this->get('week', date('W'));
		$year = $this->get('year', date('Y'));
		$q = Router::Url("/schemes/");
		if($classId > 0) {
			$q.="classes/".$classId."?week=".$week."&year=".$year;
		} elseif($hallId > 0) {
			$q.="halls/".$hallId."?week=".$week."&year=".$year;
		} elseif($courseId > 0) {
			$q.="courses/".$courseId."?week=".$week."&year=".$year;
		} elseif($userId > 0) {
			$q.="users/".$userId."?week=".$week."&year=".$year;
		}
		$this->set('scheduleUrl', $q);

		$_classes = $this->CourseClass->find('list', array('fields' => array('id', 'title'), 'order' => array('title ASC')));
		$classes = array(0 => __('-- Select class --'));
		foreach($_classes as $key => $val) {
			$classes[$key] = $val;
		}
		$users = array(0 => __('-- Select class --'));
		$_users = $this->User->find('list', array('fields' => array('id', 'username'), 'order' => array('username ASC')));
		foreach($_users as $key => $val) {
			$users[$key] = $val;
		}
	
		$_halls = $this->Hall->find('list', array('fields' => array('id', 'title'), 'order' => array('title ASC')));
		$halls = array(0 => __('-- Select halls --'));
		foreach($_halls as $key => $val) {
			$halls[$key] = $val;
		}
		$courses = array(0 => __('-- Select courses --'));

		$_courses = $this->Course->find('list', array('fields' => array('id', 'title'), 'order' => array('title ASC')));
		foreach($_courses as $key => $val) {
			$courses[$key] = $val;
		}
		$this->set(compact('classes', 'users', 'halls', 'courses', 'week', 'year', 'userId', 'classId', 'hallId', 'courseId'));
	}
}