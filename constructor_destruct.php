<?php

class ConstDect{
    public $student;
    public $teacher;

    function __construct($tname, $sname){
        $this->teacher=$tname;
        $this->student=$sname;
    }

    function __destruct() {
        echo $this->teacher.$this->student;
    }
}

$newphpcoures = new ConstDect("Set", "Get");
?>