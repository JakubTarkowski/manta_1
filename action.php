<?php
session_start();
$login_main = $_SESSION['login'];
$connect = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');

$input = filter_input_array(INPUT_POST);

$login = mysqli_real_escape_string($connect, $input["LOGIN"]);
$name = mysqli_real_escape_string($connect, $input["NAME"]);
$mail = mysqli_real_escape_string($connect, $input["MAIL"]);
$phone = mysqli_real_escape_string($connect, $input["PHONE"]);
$date_in = mysqli_real_escape_string($connect, $input["DATE_IN"]);
$id = mysqli_real_escape_string($connect, $input["ID"]);
$access = mysqli_real_escape_string($connect, $input["ACCESS"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE users
 SET  login = '".$login."',
 name = '".$name."',
 mail = '".$mail."',
 phone = '".$phone."',
 date_in = '".$date_in."',
 access = '".$access."'
 WHERE ID = '".$id."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM users
 WHERE ID = '".$id."'
 ";
 mysqli_query($connect, $query);

}
echo json_encode($input);
?>
