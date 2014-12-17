<?php

namespace JSON;

use JSON\preper_data_creator;

//use JSON\errors;

class json_creator {

    public $error = 0;
    public $msg;

    public function __construct() {
//        $this->msg = $this->preper_data($computer_ip, $command_type, $command_name, $parametrs = NULL);
    }

    public function preper_data($computer_ip, $command_type, $command_name, $parametrs = NULL) {
        $preper = new preper_data_creator($computer_ip, $command_type, $command_name, $parametrs);
        if (empty($preper->error)) {
            $commands = $preper->set_data($computer_ip, $command_type, $command_name, $parametrs);
            $this->msg = "Commands are sets";
            return $this->json_create($commands);
        } else {
            $this->error = 1;
            return;
        }
    }

    public function json_create($objCommands) {
        $json = array("ip" => $objCommands->getComputer_ip(),
            "command_type" => $objCommands->getCommand_type(),
            "command_name" => $objCommands->getCommand_name(),
            "parametrs" => $objCommands->getParametrs());
        return json_encode($json);
    }

}
