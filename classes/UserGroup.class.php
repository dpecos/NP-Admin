<?php
global $ddbb;

$ddbb->addTable("UserGroup", "users_groups");
$ddbb->addField("UserGroup", "groupId", "group_id", "INT", array("PK" => true, "NULLABLE" => false));
$ddbb->addField("UserGroup", "userId", "user_id", "INT", array("PK" => true, "NULLABLE" => false));

class UserGroup {
   public function __construct($data = null) {     
      global $ddbb;
      $ddbb->loadData($this, $data);
   }
   
   public function store() {
      global $ddbb;
      $ddbb->insertObject($this);
      return true;
   }
}
?>
