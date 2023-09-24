<?php
    include("codemanbdteam.php");
    // extends korla ar akta file er sata add kora.
    // inhaitance example;
    class Tanning extends Codemanbd{
        public function phpcourse($name){
            return $this->hadijaman=$name;
        }
        // over right kore
        public function weWork() {
            return "Codemanbd + mamurjor IT";
        }

    }

    $couse =new Tanning();
    // echo $couse->phpcourse("Ami extend take");
    echo $couse->weWork();
?>