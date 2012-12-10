<?php

class DashboardController extends AppController {
  
  var $name = 'Dashboard';
  var $uses = array('User');
  
  public function beforeFilter() {
    parent::beforeFilter();
    $role = $this->Auth->User('Role');
    $role_name = $role['name'];
    $role_name = preg_replace('/\s+/', '', $role_name);
    $requested_role = $this->params['action'];
    if ($role_name != $requested_role) {
      $this->redirect(array('controller' => 'dashboard', 'action' => $role_name));  
    }
  }

  function index() {
    //get user's group (role)
    $role = $this->Auth->User('Role');
    $role_name = $role['name'];
    $role_name = preg_replace('/\s+/', '', $role_name);
    $this->set('role_name', $role_name);
    $this->redirect(array('controller' => 'dashboard', 'action' => $role_name));
  
  }
  
  public function AccountManager() {
  
  //get current user's ID
  $user_id = $this->Auth->User('user_id');
  
  
  //get a list of the cliens assigned to this account manager
  $clients = $this->User->Client->findAllByManagerId($user_id, array('recursive' => '0'));
  $this->set('clients', $clients);
  
  //get a list of unassigned dictations
  $newDictations = $this->User->Client->Dictation->getManagersUnassignedDictations($user_id);
  $this->set('newDictations', $newDictations);
  
  //get a list of assigned dictations
  $assignedDictations = $this->User->Client->Dictation->getManagersAssignedDictations($user_id);
  $this->set('assignedDictations', $assignedDictations);
  
  }
  
  public function Transcriptionist() {
  
  }
  
  public function Administrator() {
  
  }
  
  public function QAManager() {
  
  }
  
  public function QAAssociate() {
  
  }
  
}
