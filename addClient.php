<?php

global $wpdb
?>

<h1>Add New Client</h1>
<form action='post' action=''>
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
            <td><input type='text' name='txt_emial'></td>
        </tr>
        <tr>
            <td>Languages</td>
            <td><input type='text' name='txt_languages'></td>
        </tr>
        <tr>
            <td>Opertaion</td>
            <td><input type='enum' name='txt_o pertaion'></td>
        </tr>
        <tr>
            <td>Found</td>
            <td><input type='enum'></td>
        </tr>

        <tr>
            <td>Date</td>
            <td><input type='enum'></td>
        </tr>
        <tr>
            <td>Comment</td>
            <td><input type='enum'></td>
        </tr>
    </table>
</form>
