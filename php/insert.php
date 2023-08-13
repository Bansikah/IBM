<?php
include"connection.php";
$save = $_GET["save"];
if(empty(save)){
    echo"data";
}
else{
    $name = $_GET["name"];
    $id = $_GET["id"];
    $sex = $_GET["sex"];
    $addr = $_GET["address"];

    $sql = "insert into students(student_name, student_id,sex,address) values('$name','$id','$sex','$addr')";
}
?>
<?php
include="connect.php";

$name = $_GET['name'];
$sex = $_GET["sex"];

$sql = "insert into students(name,sex) values("$name","$sex")";
if($sql){
    die("insertion failed");
}
else{
    echo"inserted successfully";
}
?>
