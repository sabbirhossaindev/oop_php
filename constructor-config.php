<?php
class Constructor{
    public $course_name;
    public $course_fee;
    public $course_details;
    public $course_duration;

    function __construct($name, $fee, $details, $duration){
        $this->course_name=$name;
        $this->course_fee=$fee;
        $this->course_details=$details;
        $this->course_duration=$duration;
    }

    function get_course_details(){
        return "Your course name is ". $this->course_name .". Course Fee ".$this->course_fee ." course details " .$this->course_details . " and course duration is ". $this->course_duration .".";
    }
}

?>