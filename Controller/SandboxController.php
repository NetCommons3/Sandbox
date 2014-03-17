<?php
App::uses('AppController', 'Controller');
/**
 * Sandbox Controller
 *
 * @author    @author Takako Miyagawa <nekoget@gmail.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */
class SandboxController extends AppController {

/**
 * beforeFilter
 *
 * @return void
 * @author Takako Miyagawa <nekoget@gmail.com>
 **/
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
	}

/**
 * index
 *
 * @return void
 * @author Takako Miyagawa <nekoget@gmail.com>
 **/
	public function index() {
	}

/**
 * theme確認用
 * @author Takako Miyagawa <nekoget@gmail.com>
 * @return void
 */
	public function theme($theme = "default", $view = "index") {
		$this->Auth->allow();
		$this->theme = $theme;
		$this->render($view);
	}
}
