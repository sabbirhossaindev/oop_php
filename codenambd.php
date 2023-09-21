<?php
class PHPCoures{
    public $student;
    public $teacher;

    public function set_tecaherName($tname){
        $this->teacher=$tname;
    }

    public function get_tecaherName(){
        return $this->teacher;
    }
}

$newphpcoures = new PHPCoures();

$newphpcoures->set_tecaherName("Hadi Jaman");

echo $newphpcoures->get_tecaherName();

?>