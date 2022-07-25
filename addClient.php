<?php

global $wpdb;

if(isset($_POST['SubmitButton'])){ //check if form was submitted
    echo '<a href="'.plugin_dir_path( __FILE__ ).'/editClient.php">Edit</a>';

}


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

    <form action="" method="POST">
        <input type="submit" name="SubmitButton" value="Edit Client test"/>
    </form>
<form action='post' style="margin: auto;" action='' >
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
                    <option value="venta">Sale</option>
                    <option value="alquiler">Rent</option>
                    <option value="vacacional">Holiday</option>
                    <option value="otros">Other</option>
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
            <td>&nbsp;</td>
            <td><input type='submit' name='but_submit' value='Submit'></td>
        </tr>

    </table>
</form>
