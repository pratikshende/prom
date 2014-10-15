<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	public $components = array(
	    'DebugKit.Toolbar',
	    'Session',
	    'Auth' => array(
	    	'loginAction' => array(
	    		'controller' => 'login',
	    		'action'     => 'index',
	    	),
	    	'loginRedirect' => array(
	    		'controller' => 'login',
	    		'action'     => 'index',
	    	),
	    	'authenticate' => array(
	    		'Form' => array(
	    			'fields' => array('username' => 'username', 'password' => 'password'),
	    			'userModel' => 'User',
	    			// 'passowrdHasher' => array(
	    			// 	'className' => 'Simple',
	    			// 	'hashType'  => 'sha256'
	    			// 	)
	    			// )
	    		)
	    	),
	    	'authorize' => false,
	    )	
	);

	public function beforeFilter() {

		$controller = strtolower($this->request->params['controller']);
		$action     = strtolower($this->request->params['action']);
		$user_type  = AuthComponent::user('type');

		if( $controller == 'login' ) {
			if($action == 'create') {
				if($user_type != 0) {
					throw new ForbiddenException("Forbidden access. sorry :-( ");
				}
			}
		} else if($controller == 'sci') {
			if($user_type == 5) {
				throw new ForbiddenException("Forbidden access. sorry :-( ");
				// $this->redirect($this->Auth->loginRedirect);
				// return;
			}
		}
	}
}
