<?php
namespace JSON;

class commands {

    public $computer_ip = "";
    public $command_type = "";
    public $command_name = "";
    public $parametrs = "";
    
    function getComputer_ip() {
        return $this->computer_ip;
    }

    function getCommand_type() {
        return $this->command_type;
    }

    function getCommand_name() {
        return $this->command_name;
    }

    function getParametrs() {
        return $this->parametrs;
    }

    function setComputer_ip($computer_ip) {
        $this->computer_ip = $computer_ip;
    }

    function setCommand_type($command_type) {
        $this->command_type = $command_type;
    }

    function setCommand_name($command_name) {
        $this->command_name = $command_name;
    }

    function setParametrs($parametrs) {
        $this->parametrs = $parametrs;
    }


}
