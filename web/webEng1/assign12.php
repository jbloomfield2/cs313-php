<?php
print"test";
$perftype = $_GET['perftype'];
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$idnum = $_GET['idnum'];
$skill = $_GET['skill'];
$instrument = $_GET['instrument'];
$location = $_GET['location'];
$room = $_GET['room'];
$time = $_GET['time'];

$dfname = $_GET['dfname'];
$dlname = $_GET['dlname'];
$didnum = $_GET['didnum'];


$student = array('perftype' => $perftype,'fname' => $fname, 'lname' => $lname, 'idnum' => $idnum, 'skill' => $skill,
 'instrument' => $instrument, 'location' => $location, 'room' => $room, 'time' => $time,
 'dfname' => $dfname,'dlname' => $dlname,'didnum' => $didnum);
$write = json_encode($student);
$myfile = fopen("piano.txt", "a");
fwrite($myfile,$write);
fwrite($myfile, "\n");
fclose($myfile);

?>