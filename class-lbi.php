<?php
class Courses{
    var $course_name;
    var $course_fee;
    var $course_details;
    var $course_duration;

    function set_course_details($name, $fee, $details, $duration){
        $this->course_name=$name;
        $this->course_fee=$fee;
        $this->course_details=$details;
        $this->course_duration=$duration;
    }

    function get_course_details(){
        return "Your course name is ". $this->course_name .". Course Fee ".$this->course_fee ."course details " .$this->course_details . " and course duration is ". $this->course_duration .".";
    }
}

?>