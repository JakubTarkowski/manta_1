<?php
session_start();
$error='';

if(isset($_POST['submit_login'])){
    if(empty($_POST['mail']) || empty($_POST['pass'])){
        $error = "Wprowadź dane";
    } else{
        
        $mail=$_POST['mail'];
        $pass=$_POST['pass'];
        $conn = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
        
        
         $query ="SELECT * FROM users WHERE MAIL='$mail' AND ACTIVE='1'";
         $result = mysqli_query($conn, $query);
                 
                         while($row = mysqli_fetch_array($result))
                         {
                             $hashed_password=$row["PASSWORD"];
                             if(password_verify($pass, $hashed_password)) {
                                $_SESSION['mail'] = $mail;
                                    echo "<script type='text/javascript'>alert(\"Zalogowano jako '$mail'\");</script>";
                                    echo("<script>location.href = 'account_main.php';</script>");
                                 mysqli_close($conn);
                            }
                         }
                
        
                $error = "Błędny login lub hasło";
        } 
            
        

        
        
        
       
        
       
}

if(isset($_POST['submit_register'])){
    if(empty($_POST['user_reg']) || empty($_POST['mail_reg']) || empty($_POST['phone_reg']) || empty($_POST['login_reg']) || empty($_POST['pass_reg']) || empty($_POST['pass2_reg'])){
         echo "<script type='text/javascript'>alert(\"Wypełnij wszystkie pola\");</script>";
    } else {
        $user=$_POST['user_reg'];
        $mail=$_POST['mail_reg'];
        $phone=$_POST['phone_reg'];
        $login=$_POST['login_reg'];
        $pass=$_POST['pass_reg'];
        $date_in = date('Y-m-d H:i:s');
        $active="0";
        $access="USER";
        $key=rand(1000,9999);

    if($_POST['pass_reg']==$_POST['pass2_reg']){
             /*$conn = mysqli_connect('localhost','root','','inz');*/
        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
        $hashed_key = password_hash($key, PASSWORD_DEFAULT);
        
        $conn = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');

            $query = mysqli_query($conn, "SELECT * FROM users WHERE MAIL='$mail'");

            $rows = mysqli_num_rows($query);
            if($rows == 1){
                mysqli_close($conn);
                 echo "<script type='text/javascript'>alert(\"Istnieje użytkownik z wprowadzonym adresem email\");</script>";
            echo("<script>location.href = 'loginregister.php';</script>");
            } else {


            $sql = "INSERT INTO users (NAME,MAIL,PHONE,LOGIN,PASSWORD,PASSWORD2,ACCESS,DATE_IN,ACTIVE) VALUES ('$user', '$mail', '$phone','$login', '$hashed_password','$hashed_key','$access','$date_in','$active')";

            if ($conn->query($sql) === TRUE) {
                 ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "admin@manta.jakubtarkowski.pl";
    $to = $mail;
    $subject = "Link aktywacyjny manta.jakubtarkowski.pl";
    $message = "Witamy w aplikacji manta.jakubtarkowski.pl
    
Utworzyliśmy dla Ciebie konto, w celu aktywacji kliknij w link poniżej i wpisz 4-cyfrowy kod:
    
manta.jakubtarkowski.com/verify.php
  
------------------------
Imię nazwisko: $user

Adres e-mail: $mail

4-cyfrowy kod: $key
------------------------
  

  
Pozdrawiamy
Admin/manta.jakubtarkowski.pl
 
  
";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    $error="Wysłano maila z linkiem aktywacyjnym. Prosimy o potwierdzenie.";
                
            } else {
                $errorreg = "Błąd rejestracji";
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            mysqli_close($conn);
            }
    }else{
                $error = "Hasła nie są zgodne";
            }
    }
}

if(isset($_POST['submit_verify'])){
    if(empty($_POST['mail']) || empty($_POST['key'])){
        $error = "Wprowadź dane";
    } else{
        $mail=$_POST['mail'];
        $key=$_POST['key'];
        $conn = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
        
        
         $query ="SELECT * FROM users WHERE MAIL='$mail' AND ACTIVE='0'";
         $result = mysqli_query($conn, $query);
                 
                         while($row = mysqli_fetch_array($result))
                         {
                             $hashed_password=$row["PASSWORD2"];
                             if(password_verify($key, $hashed_password)) {
                                 
                                 $query2 = mysqli_query($conn, "UPDATE users SET active='1' WHERE MAIL='$mail' AND active='0'");
                                 mysqli_query($conn, $query2);
                                echo "<script type='text/javascript'>alert(\"Weryfikacja przebiegła pomyślnie, przejdź do logowania\");</script>";
                                echo("<script>location.href = 'loginregister.php';</script>");
                                    
                                    
                            }else{
                                echo "<script type='text/javascript'>alert(\"Błędny kod\");</script>"; 
                             }
                             
                         }
        
        } 
            
        

        mysqli_close($conn);
        
        
       
        
       
}

if(isset($_POST['submit_index_activities'])){
    $mail=$_SESSION['mail'];
    if(empty($mail)){
         echo("<script>location.href = 'loginregister.php';</script>");
    }else{
        echo("<script>location.href = 'account_activities.php';</script>");
    }
    
}
if(isset($_POST['submit_index_payments'])){
    $mail=$_SESSION['mail'];
    if(empty($mail)){
         echo("<script>location.href = 'loginregister.php';</script>");
    }else{
        echo("<script>location.href = 'account_payments.php';</script>");
    }
    
}

if(isset($_POST['submit_payments'])){
    if(empty($_POST['type']) || empty($_POST['date'])){
         echo "<script type='text/javascript'>alert(\"Wypełnij wszystkie pola\");</script>";
    } else {
        $value = filter_input(INPUT_POST, 'type');
$exploded_value = explode('|', $value);
$type = $exploded_value[0];
$price = $exploded_value[1];
$number_lessons = $exploded_value[2];
        echo "<script type='text/javascript'>alert(\"'$type','$price','$number_lessons'\");</script>";
        
        $mail=$_SESSION['mail'];
        $start=$_POST['date'];
        $stop = strtotime($_POST['date']);
        $stop1 = date("Y-m-d", strtotime("+1 month", $stop));
        $date_in = date('Y/m/d H:i:s');
        $status = 'Weryfikacja zakupu';
                
        
        
        $conn = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
                /*$conn = mysqli_connect('localhost','root','','inz');*/
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                $db = mysqli_select_db($conn, "serwer90830_manta");
                $sql = "INSERT INTO payments (MAIL,TYPE,PRICE,NUMBER_LESSONS,START,STOP,DATE_IN,STATUS) VALUES ('$mail', '$type','$price','$number_lessons','$start','$stop1','$date_in','$status')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>alert(\"Za chwilę przeniesiesz się na stronę płatności\");</script>";
                    echo "<script type='text/javascript'>alert(\"Zakupiono karnet !\");</script>";
                    echo("<script>location.href = 'account_payments.php';</script>");
                } else {
                     echo "<script type='text/javascript'>alert(\"Błąd zapisu\");</script>";
                     echo("<script>location.href = 'account_main.php';</script>");
                }
                mysqli_close($conn);
        
   
        
        }
        
        
    
}


//Dodawanie zajęć
if(isset($_POST['submit_add_activities'])){
    if(empty($_POST['type_add']) || empty($_POST['day_add']) || empty($_POST['time_add'])){
         echo "<script type='text/javascript'>alert(\"Wypełnij wszystkie pola\");</script>";
    } else {
        $mail="ADMIN";
        $type_add=$_POST['type_add'];
        $day_add=$_POST['day_add'];
        $time_add=$_POST['time_add'];
        $date_in = date('Y/m/d H:i:s');
        $trener= $_POST['trener_add'];
        $poziom_add= $_POST['poziom_add'];
        $status="Harmonogram";
        
        
        
        
                $conn = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "serwer90830_manta");

                $sql = "INSERT INTO activities (mail,DAY,TIME,TYPE,TRAINER,LEVEL,DATE_IN,STATUS) VALUES ('$mail', '$day_add','$time_add','$type_add','$trener','$poziom_add','$date_in','$status')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>alert(\"Dodano:'$type_add' w '$day_add' o '$time_add' Trener: '$trener' Poziom: '$poziom_add'\");</script>";
                    echo("<script>location.href = 'account_activities.php';</script>");
                } else {
                     echo "<script type='text/javascript'>alert(\"Błąd zapisu\");</script>";
                     echo("<script>location.href = 'account_main.php';</script>");
                }
                mysqli_close($conn);
        
   
        
        }
        
        
    
}
if(isset($_POST['submit_delete_activities'])){
    if(empty($_POST['type_add']) || empty($_POST['day_add']) || empty($_POST['time_add'])){
         echo "<script type='text/javascript'>alert(\"Wypełnij pola: Rodzaj,dzień,godzina\");</script>";
    } else {
        $mail="ADMIN";
        $type_add=$_POST['type_add'];
        $day_add=$_POST['day_add'];
        $time_add=$_POST['time_add'];


        
        
        
        
                $conn = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "serwer90830_manta");

                $sql = "DELETE FROM activities WHERE TYPE='$type_add' AND DAY='$day_add' AND TIME='$time_add'";

                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>alert(\"Usunięto zajęcia '$type_add' w '$day_add' o '$time_add'\");</script>";
                    echo("<script>location.href = 'account_activities.php';</script>");
                } else {
                     echo "<script type='text/javascript'>alert(\"Błąd zapisu\");</script>";
                     echo("<script>location.href = 'account_main.php';</script>");
                }
                mysqli_close($conn);
        
   
        
        }
        
        
    
}
if(isset($_POST['submit_add_trainer'])){
    if(empty($_POST['trainer_add'])){
         echo "<script type='text/javascript'>alert(\"Wypełnij wszystkie pola\");</script>";
    } else {
        $mail="TRAINER";
        $trainer_add=$_POST['trainer_add'];

        $status="Lista pracowników";
        
        
        
        
                $conn = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "serwer90830_manta");

                $sql = "INSERT INTO activities (mail,TRAINER,STATUS) VALUES ('$mail', '$trainer_add','$status')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>alert(\"Dodano Trenera '$trainer_add'\");</script>";
                    echo("<script>location.href = 'account_activities.php';</script>");
                } else {
                     echo "<script type='text/javascript'>alert(\"Błąd zapisu\");</script>";
                     echo("<script>location.href = 'account_main.php';</script>");
                }
                mysqli_close($conn);
        
   
        
        }
        
        
    
}
if(isset($_POST['submit_delete_trainer'])){
    if(empty($_POST['trainer_add'])){
         echo "<script type='text/javascript'>alert(\"Wypełnij wszystkie pola\");</script>";
    } else {
        $mail="TRAINER";
        $trainer_add=$_POST['trainer_add'];

        $status="Lista pracowników";
        
        
        
        
                $conn = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "serwer90830_manta");
                $sql = "DELETE FROM activities WHERE mail='$mail' AND TRAINER='$trainer_add'";

                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>alert(\"Dodano Trenera '$trainer_add'\");</script>";
                    echo("<script>location.href = 'account_activities.php';</script>");
                } else {
                     echo "<script type='text/javascript'>alert(\"Błąd zapisu\");</script>";
                     echo("<script>location.href = 'account_main.php';</script>");
                }
                mysqli_close($conn);
        
   
        
        }
        
        
    
}


if(isset($_POST['submitgroup'])){
   

        $time=$_POST['submitgroup'];
        $day=$_POST['day'];
        $mail=$_SESSION['mail'];
        $type="Zajecia grupowe";
        $date_in = date('Y/m/d H:i:s');
        $status = "Weryfikacja zapisu";
        $trainer=$_POST['trainer'];
        $level=$_POST['level'];

        
        
                $conn = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "serwer90830_manta");

                $sql = "INSERT INTO activities (mail,DAY,TIME,TYPE,TRAINER,LEVEL,DATE_IN,STATUS) VALUES ('$mail', '$day','$time','$type','$trainer','$level','$date_in','$status')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>alert(\"Dodano zajęcia '$type' w '$day' o '$time'\");</script>";
                    echo("<script>location.href = 'account_activities.php';</script>");
                } else {
                     echo "<script type='text/javascript'>alert(\"Błąd zapisu\");</script>";
                     echo("<script>location.href = 'account_main.php';</script>");
                }
                mysqli_close($conn);
        
   
        
                
        
    
}
if(isset($_POST['submitindyvidual'])){
   

        $time=$_POST['submitindyvidual'];
        $day=$_POST['day'];
        $mail=$_SESSION['mail'];
        $type="Zajecia indywidualne";
        $date_in = date('Y/m/d H:i:s');
        $status = "Weryfikacja zapisu";
        $trainer=$_POST['trainer'];
        $level=$_POST['level'];
        
        
                $conn = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "serwer90830_manta");

                $sql = "INSERT INTO activities (mail,DAY,TIME,TYPE,TRAINER,LEVEL,DATE_IN,STATUS) VALUES ('$mail', '$day','$time','$type','$trainer','$level','$date_in','$status')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>alert(\"Dodano zajęcia '$type' w '$day' o '$time'\");</script>";
                    echo("<script>location.href = 'account_activities.php';</script>");
                } else {
                     echo "<script type='text/javascript'>alert(\"Błąd zapisu\");</script>";
                     echo("<script>location.href = 'account_main.php';</script>");
                }
                mysqli_close($conn);
        
   
        
                
        
    
}

if(isset($_POST['submit_add_pass'])){
    if(empty($_POST['type_pass'] || $_POST['price_pass'] || $_POST['number_lessons'] || $_POST['length_lessons'] || $_POST['description'])){
         echo "<script type='text/javascript'>alert(\"Wypełnij wszystkie pola\");</script>";
    } else {
        $mail="PASS";
        $type=$_POST['type_pass'];
        $price=$_POST['price_pass'];
        $number_lessons=$_POST['number_lessons'];
        $length_lessons=$_POST['length_lessons'];
        $description=$_POST['description'];
        $date_in = date('Y/m/d H:i:s');

        
        
        
        
                $conn = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                $db = mysqli_select_db($conn, "serwer90830_manta");
                $sql = "INSERT INTO payments (MAIL,TYPE,PRICE,NUMBER_LESSONS,LENGTH_LESSONS,DESCRIPTION,DATE_IN) VALUES ('$mail', '$type','$price','$number_lessons','$length_lessons','$description','$date_in')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>alert(\"Dodano Karnet '$type', '$price', '$description' \");</script>";
                    echo("<script>location.href = 'account_payments.php';</script>");
                } else {
                     echo "<script type='text/javascript'>alert(\"Błąd zapisu\");</script>";
                     echo("<script>location.href = 'account_main.php';</script>");
                }
                mysqli_close($conn);
        
   
        
        }
        
        
    
}

if(isset($_POST['submit_index_activities'])){
    $mail=$_SESSION['mail'];
     if(empty($login)){
         echo("<script>location.href = 'loginregister.php';</script>");
     }else{
         echo("<script>location.href = 'account_activities.php';</script>");
     }
}


        


     ?>