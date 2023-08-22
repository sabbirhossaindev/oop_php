<?php
include('class-config.php');

$job_placement_course = new Courses();
$job_placement_course->set_course_details("Wordpress", "20,000", "online course", "6'th months");
echo $job_placement_course->get_course_details()."</br>";

$interning_course = new Courses();
$interning_course->set_course_details("Wordpress", "10,000", "offline course", "6'th months");
echo $interning_course->get_course_details()."</br>";

$spoken_course = new Courses();
$spoken_course->set_course_details("Spoken English", "30,000", "Offline / Online", "8-10 months");
echo $spoken_course->get_course_details()."</br>";

?>