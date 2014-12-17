<?php

//

require_once './view/default.php';
require_once './auotoload/auotoloder.php';

//require_once './connect/server_connect.php';
use JSON\json_creator as jc;
use Connect\connect;

$c = new connect();
//$c->connection();
$computer_ip = '123';
$command_type = $_POST['commands'] == "start_program" ? 'start' : 'open';
$command_name = $_POST['commands'];
$parametrs = empty($_POST['parametrs']) ? '' : $_POST['parametrs'];
//print_r($_POST);
//die;

$ds = new jc();
$er = $ds->preper_data($computer_ip, $command_type, $command_name, $parametrs);
if (empty($ds->error)) {
    $c->message_json = $er;
}
