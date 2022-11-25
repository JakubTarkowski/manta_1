<?php
session_start();
$login_main = $_SESSION['login'];
//action.php
$connect = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
/*$connect = mysqli_connect('localhost', 'root', '', 'inz');*/

$input = filter_input_array(INPUT_POST);

$type = mysqli_real_escape_string($connect, $input["TYPE"]);
$day = mysqli_real_escape_string($connect, $input["DAY"]);
$time = mysqli_real_escape_string($connect, $input["TIME"]);
$date_in = mysqli_real_escape_string($connect, $input["DATE_IN"]);
$login = mysqli_real_escape_string($connect, $input["LOGIN"]);
$id = mysqli_real_escape_string($connect, $input["ID"]);
$status = mysqli_real_escape_string($connect, $input["STATUS"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE activities
 SET LOGIN = '".$login."',
 DAY = '".$day."',
 TIME = '".$time."',
 TYPE = '".$type."',
 DATE_IN = '".$date_in."',
 STATUS = '".$status."'
 WHERE ID = '".$id."'
 ";

 mysqli_query($connect, $query);

}


if($input["action"] === 'delete')
{

        
     
 $query = "
 DELETE FROM activities
 WHERE ID = '".$id."'
 ";
 mysqli_query($connect, $query);

    
}
echo json_encode($input);

?>
