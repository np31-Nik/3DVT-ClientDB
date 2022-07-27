<?php

global $wpdb;

function create_table() {
$table_name = $wpdb->prefix."3dvt_clients";
//$charset_collate=$wpdb->get_charset_collate();

$sql = "CREATE TABLE IF NOT EXISTS ".$table_name." (
    PRIMARY KEY id INTEGER(10) NOT NULL AUTO_INCREMENT,
    name varchar(40) NOT NULL,
    phone varchar(30) NOT NULL,
    email varchar(40) NOT NULL,
    operation varchar(55) NOT NULL,
    found varchar(20) NOT NULL,
    date date NOT NULL,
    comment varchar(255) NOT NULL
    ) ";
//$charset_collate;
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);

}
