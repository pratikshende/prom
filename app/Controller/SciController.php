<?php
class SciController extends AppController {
    public $helpers = array('Html','Form');
    public $uses = array('Service_center');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'ajax';
    }
     
    public function service_center($service_center_id) {
        if ($this->request->is('GET')) {
            $this->set('content',$service_center_id);
        } else if ($this->request->is('POST')) {
        }
    }
}