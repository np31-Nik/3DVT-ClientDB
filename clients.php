<?php

global $wpdb;
//Change "customplugin" with table name! 
$tablename = $wpdb->prefix."customplugin";

// Delete record
if(isset($_GET['delid'])){
  $delid = $_GET['delid'];
  $wpdb->query("DELETE FROM ".$tablename." WHERE id=".$delid);
}
?>
<h1>All Clients</h1>

<table width='100%' border='1' style='border-collapse: collapse;'>
  <tr>
   <th>S.no</th>
   <th>Name</th>
   <th>Phone</th>
   <th>Email</th>
   <th>Languages</th>
   <th>Operation</th>
   <th>Found</th>
   <th>Date</th>
   <th>Comment</th>
   <th>Actions</th>
   <!-- <th>&nbsp;</th> -->
  </tr>
  <?php
  // Select records
  // Change + add params from upside
  $entriesList = $wpdb->get_results("SELECT * FROM ".$tablename." order by id desc");
  if(count($entriesList) > 0){
    $count = 1;
    foreach($entriesList as $entry){
      $id = $entry->id;
      $name = $entry->name;
      $phone = $entry->phone;
      $email = $entry->email;
      $languages = $entry->languages;
      $opertaion = $entry->operation;
      $found = $entry->found;
      $date = $entry->date;
      $comment = $entry->comment;

//not sure about $count

      echo "<tr>
      <td>".$count."</td> 
      <td>".$name."</td>
      <td>".$phone."</td>
      <td>".$email."</td>
      <td>".$languages."</td>
      <td>".$opertaion."</td>
      <td>".$found."</td>
      <td>".$date."</td>
      <td>".$comment."</td>
      
      <td><a href='?page=allentries&delid=".$id."'>Delete</a></td>
      </tr>
      ";
      $count++;
   }
 }else{
   echo "<tr><td colspan='5'>No record found</td></tr>";
 }
?>
</table>