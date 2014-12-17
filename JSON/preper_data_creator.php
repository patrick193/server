<?php
namespace JSON;

class preper_data_creator {
    public $error;
    
    public function __construct($computer_ip, $command_type, $command_name, $parametrs = NULL) {
        if (empty($computer_ip)) {
            $msgError = "Computer ip dont find";
            $this->error = $msgError;
        } 
          
    }

    public function set_data($computer_ip, $command_type, $command_name, $parametrs = NULL) {
        $commands = new commands();
        $commands->setCommand_name($command_name);
        $commands->setCommand_type($command_type);
        $commands->setComputer_ip($computer_ip);
        $commands->setParametrs($parametrs);
        return $commands;
    }
}
