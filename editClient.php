<?php

global $wpdb;

$entriesList = $wpdb->get_results("SELECT * FROM ".$tablename." order by id desc");
  if(count($entriesList) > 0){
    
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

      echo "<tr>
      <td>".$id."</td> 
      <td>".$name."</td>
      <td>".$phone."</td>
      <td>".$email."</td>
      <td>".$languages."</td>
      <td>".$opertaion."</td>
      <td>".$found."</td>
      <td>".$date."</td>
      <td>".$comment."</td>

      </tr>
      ";

   }
}
//edit Client
if(isset($_POST['but_submit'])){

    $name = $_POST['txt_name'];
    $phone = $_POST['txt_phone'];
    $email = $_POST['txt_email'];
    $opertaion = $_POST['enum_opertaions'];
    $found = $_POST['txt_found'];
    $date = $_POST['date_date'];
    $comment = $_POST['txt_comment'];

    //validate (with if?)
    //Edit client data

}

?>

<h1>Edit Client</h1>
<form action='post' style="margin: auto;" action='' >
    <table>
        <tr>
            <td>Name</td>
            <td><input type='text' name='txt_name' value=$name></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type='text' name='txt_phone' value=$phone></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type='text' name='txt_email'value=$email></td>
        </tr>
        <tr>
            <td>Languages</td>
            <td><input type='text' name='txt_languages' value=$languages></td>
        </tr>
        <tr>
            <td><label for='enum_opertaions' value=$operation>Opertaion</label></td>
            <td>
                <select name="enum_opertaions" id="operations">
                    <option value="sale">Sale</option>
                    <option value="rent">Rent</option>
                    <option value="holiday">Holiday</option>
                    <option value="other">Other</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Found</td>
            <td><input type='text' name='txt_found' value=$found></td>
        </tr>
        <tr>
            <td>Date</td>
            <td><input type='date' name='date_date' value=$date></td>
        </tr>
        <tr>
            <td>Comment</td>
            <td><input type='text' name='txt_comment' value=$comment></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type='submit' name='but_submit' value='Submit'></td>
        </tr>
    </table>
</form>
