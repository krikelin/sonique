<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
	public $name = 'Pages';

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();
	public $components = array('Auth');

/**
 * Displays a view
 *
 * @param mixed What page to display
 * @return void
 */
	public function display() {
		$weeks = array();
		for($i = 1; $i < 53; $i++) {
			$weeks[] = $i;
		}
		$this->set('weeks', $weeks);
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));
		$this->set('userid', $this->Auth->user('id'));
		$week = date('W');
		$year = date('Y');
		if(isset($this->request->query['week'])) {
			
			$week = $this->request->query['week'];
		}


		$this->set('week', $week);

		if(isset($this->request->query['year'])) {
			
			$year = $this->request->query['year'];
		}

		// If week is < 1 go to back year
		if($week < 1) {
			$t = $year . "-01-01 ".($week-1)." week";
		
			$date = strtotime($t);

			$week = date('W', $date);
			$year = date('Y', $date);
			$this->redirect('/?week=' . $week . '&year=' . $year);
		} else if($week > 52) {

			$t = $year . "-01-01 ".($week )." week";
		
			$date = strtotime($t);

			$week = date('W', $date);
			$year = date('Y', $date);
			$this->redirect('/?week=' . $week . '&year=' . $year);
		}

		
		$this->set('year', $year);
		$this->render(implode('/', $path));

	}
}
