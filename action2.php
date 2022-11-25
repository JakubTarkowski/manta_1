<?php
session_start();
$login_main = $_SESSION['login'];
/*$connect = mysqli_connect('localhost', 'root', '', 'inz');*/
$connect = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');

$input = filter_input_array(INPUT_POST);

$type = mysqli_real_escape_string($connect, $input["TYPE"]);
$start = mysqli_real_escape_string($connect, $input["START"]);
$stop = mysqli_real_escape_string($connect, $input["STOP"]);
$date_in = mysqli_real_escape_string($connect, $input["DATE_IN"]);
$login = mysqli_real_escape_string($connect, $input["LOGIN"]);
$id = mysqli_real_escape_string($connect, $input["ID"]);
$status = mysqli_real_escape_string($connect, $input["STATUS"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE payments
 SET  LOGIN = '".$login."',
 TYPE = '".$type."',
 START = '".$start."',
 STOP = '".$stop."',
 DATE_IN = '".$date_in."',
 STATUS = '".$status."'
 WHERE ID = '".$id."'
 ";
 mysqli_query($connect, $query);
}
if($input["action"] === 'delete')
{  
 $query = "
 DELETE FROM payments
 WHERE ID = '".$id."'
 ";
 mysqli_query($connect, $query);

}
echo json_encode($input);
?>
