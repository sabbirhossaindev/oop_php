<?php
    include("main_inhabitance.php");
    // extends korla ar akta file er sata add kora.
    // inheritance example;
    class OurFamily extends Inheritance{
        public function baba($name){
            return $this->BaBa=$name;
        }
    }

    $baba =new OurFamily();
?>