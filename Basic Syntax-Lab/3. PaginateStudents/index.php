<?php
session_start();
$page = 0;
if (isset($_GET['page'])) {
$page = intval($_GET['page']);
$page = $page >= 0 ? $page : 0;
if (isset($_SESSION['students']) && !empty($_SESSION['students'])) {
$students = json_decode($_SESSION['students']);
if ($page * 5 >= sizeof($students)) {
unset($students);
}
} else {
session_unset();
}
} else {
if (isset($_GET['names']) && isset($_GET['ages']) && isset($_GET['delimiter'])) {
$studentData = buildStudentData();
if ($studentData !== false) {
$students = $studentData;
$_SESSION['students'] = json_encode($studentData);
}
} else {
session_unset();
}
}
function buildStudentData() {
$delimiter = trim($_GET['delimiter']);
$names = array_filter(array_map('trim', explode($delimiter, $_GET['names'])));
$ages =  array_map('intval', array_filter(array_map('trim', explode($delimiter, $_GET['ages']))));
if (strpos($_GET['names'], $_GET['delimiter']) !== false  &&
strpos($_GET['ages'], $_GET['delimiter']) !== false &&
sizeof($names) == sizeof($ages)) {
$students = [];
for ($i = 0; $i < sizeof($ages); $i++) {
$student = (object)[];
$student->name = $names[$i];
$student->age = $ages[$i];
array_push($students, $student);
}
return $students;
}
return false;
}
include 'layout.php';