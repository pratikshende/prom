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
	public $uses = array('Config');
	public $components = array(
	    // 'DebugKit.Toolbar',
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

		Configure::load('promechanix','inireader');

		$controller = strtolower($this->request->params['controller']);
		$action     = strtolower($this->request->params['action']);
		$user_type  = AuthComponent::user('type');

		$request_type = "";
		if($this->request->is("GET")) {
			$request_type = "GET";
		} else if($this->request->is("POST")) {
			$request_type = "POST";
		} else if($this->request->is("PUT")) {
			$request_type = "PUT";
		} else if($this->request->is("DELETE")) {
			$request_type = "DELETE";
		}

		// $perms = $this->Acl->fetch($controller,$action,$request_type);

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
		} else if( $controller == 'home') {
			if($user_type == 5) {
				throw new ForbiddenException("Forbidden access. sorry :-( ");
			}
		}
		$this->set('config',$this->Config->getAll());
	}

	/*
     * If you pass a delimeter then this function will return the date
     * in 2013/07/15 format
     * However if you don't pass the delimeter, then it will return the 
     * date in 15th July, 2013 format
     * */
    public function convert_timestamp_to_date($timestamp, $delimiter=null) {
        if ($delimiter != null) {
            $date = getdate($timestamp);
            $return = join($delimiter,
                           array($date['year'],
                           $date['mon'],
                           $date['mday']));
        } else {
            $return = date("jS F Y",$timestamp);
        }
        return $return;
    }

    // year/month/day => timestamp
    // ToDo :: here, yy/mm/dd is hard-coded. make it more generic,
    // so that can be used anywhere..
    public function convert_date_to_timestamp($date) {
        preg_match('/(?P<year>\d+)\/(?P<month>\d+)\/(?P<day>\d+)/',
                    $date,
                    $parsed_date);
        return mktime( 0, 0, 0, 
                        $parsed_date['month'], 
                        $parsed_date['day'], 
                        $parsed_date['year'] );
    }
}
