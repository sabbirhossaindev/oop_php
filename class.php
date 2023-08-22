<?php
include('class-lbi.php');

$job_placement_course = new Courses();

echo $job_placement_course->course_name="Became a php developer.<br>";
echo $job_placement_course->course_fee="6000.<br>";
echo $job_placement_course->course_details="একজন পিএইচপি ডেভেলপারের কাজের ক্ষেত্র ও চাহিদা দিন দিন বাড়ছে। বিশ্বের ছোটো-বড় অধিকাংশ কোম্পানিরই নিজেদের একটি ওয়েবসাইট থাকে। এই ওয়েবসাইট ও dynamic web applications বানানোর জন্য প্রয়োজন হয় একজন পিএইচপি ওয়েব ডেভেলপার।<br>";
echo $job_placement_course->course_duration="6th months.<br>";
echo "<br>";

$interning_course = new Courses();

echo $job_placement_course->course_name="Became a php developer.<br>";
echo $job_placement_course->course_fee="10000.<br>";
echo $job_placement_course->course_details="একজন পিএইচপি ডেভেলপারের কাজের ক্ষেত্র ও চাহিদা দিন দিন বাড়ছে। বিশ্বের ছোটো-বড় অধিকাংশ কোম্পানিরই নিজেদের একটি ওয়েবসাইট থাকে। এই ওয়েবসাইট ও dynamic web applications বানানোর জন্য প্রয়োজন হয় একজন পিএইচপি ওয়েব ডেভেলপার।<br>";
echo $job_placement_course->course_duration="3th months.<br>";

?>