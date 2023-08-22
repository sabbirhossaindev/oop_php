<?php
include('constructor-config.php');
// constructor a argument pass korle set function er kaj hoba.
$constructor_example = new Constructor("React", "6,000", "online course", "6'th months");
echo $constructor_example->get_course_details();

?>