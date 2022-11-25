
<?php
$error='';
// Dodawanie informacji


         if(isset($_POST['dodaj'])){
            $date = date('Y-m-d');
            $info = $_POST['info'];
             $author = $_POST['author'];
             $conn = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
             /*$conn = mysqli_connect("localhost", "root", "", "inz");
             $db = mysqli_select_db($conn, "33472118_inz");*/
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                

                $sql = "INSERT INTO info (DATE,TEXT,AUTHOR) VALUES ('$date', '$info','$author')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>alert(\"Dodano ogłoszenie\");</script>";
                    echo("<script>location.href = 'account_main.php';</script>");
                } else {
                     echo "<script type='text/javascript'>alert(\"Błąd dodania\");</script>";
                     echo("<script>location.href = 'index.php';</script>");
                }
                mysqli_close($conn);
            
        }
?>