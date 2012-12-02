<h3>Account Manager Dashboard</h3>
<h5>My Clients</h5>
<?php
  foreach ($clients as $client):
    echo $client['Client']['name'];
    echo "<br />";
  endforeach;
?>
<h5>Unassigned Dictations</h5>
<?php
  foreach ($newDictations as $newDictation) {
    //debug($newDictation);
    echo $this->Html->Link($newDictation['Dictation']['name'], array('controller' => 'dictations', 'action' => 'view', $newDictation['Dictation']['dictation_id']));
    echo '<br />';
  }    
?>
<h5>Assigned Dictations</h5>
<?php
  foreach ($assignedDictations as $assignedDictation) {
    //debug($assignedDictation);
    echo $this->Html->Link($assignedDictation['Dictation']['name'], array('controller' => 'dictations', 'action' => 'view', $assignedDictation['Dictation']['dictation_id']));
    echo '<br />';
  }    
?>


