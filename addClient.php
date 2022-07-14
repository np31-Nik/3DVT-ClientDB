<?php

global $wpdb;

//add Client
if(isset($_POST['but_submit'])){

    $name = $_POST['txt_name'];
    $phone = $_POST['txt_phone'];
    $email = $_POST['txt_email'];
    $opertaion = $_POST['enum_opertaions'];
    $found = $_POST['txt_found'];
    $date = $_POST['date_date'];
    $comment = $_POST['txt_comment'];

    //validate (with if?)
    //Insert client data

}

?>

<h1>Add New Client</h1>
<form action='post' action='' >
    <table>
        <tr>
            <td>Name</td>
            <td><input type='text' name='txt_name'></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type='text' name='txt_phone'></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type='text' name='txt_email'></td>
        </tr>
        <tr>
            <td>Languages</td>
            <td><input type='text' name='txt_languages'></td>
        </tr>
        <tr>
            <td><label for='enum_opertaions'>Opertaion</label></td>
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
            <td><input type='text' name='txt_found'></td>
        </tr>
        <tr>
            <td>Date</td>
            <td><input type='date' name='date_date'></td>
        </tr>
        <tr>
            <td>Comment</td>
            <td><input type='text' name='txt_comment'></td>
        </tr>
        <tr>
            <td>$nbsp;</td>
            <td><input type='submit' name='but_submit' value='Submit'></td>
        </tr>
    </table>
</form>
