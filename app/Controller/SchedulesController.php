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

		$classes = $this->CourseClass->find('list', array('fields' => array('id', 'title'), 'order' => array('title ASC')));
		array_unshift($classes, array(0 => __('-- Select class --')));
		$users = $this->User->find('list', array('fields' => array('id', 'username'), 'order' => array('username ASC')));
		array_unshift($users, array(0 => __('-- Select user --')));
		$halls = $this->Hall->find('list', array('fields' => array('id', 'title'), 'order' => array('title ASC')));
		array_unshift($halls, array(0 => __('-- Select halls --')));
		$courses = $this->Course->find('list', array('fields' => array('id', 'title'), 'order' => array('title ASC')));
		array_unshift($courses, array(0 => __('-- Select courses --')));
		$this->set(compact('classes', 'users', 'halls', 'courses', 'week', 'year', 'userId', 'classId', 'hallId', 'courseId'));
	}
}