<?php
include("check.php");
$login = $_SESSION['login'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Jakub Tarkowski</title>

      <link rel="stylesheet" href="style.css">
      <link href="https://fonts.googleapis.com/css?family=Gaegu:300,700" rel="stylesheet">
      <!-- BOOTSTRAP -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" >
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

      <!-- ICON -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">


      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>


       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <script src="js/jquery.tabledit.min.js"></script>
    
</head>
    <?php  

        /*$connect = mysqli_connect("localhost", "root", "", "inz");
        $connect2 = mysqli_connect("localhost", "root", "", "inz");
        $connect3 = mysqli_connect("localhost", "root", "", "inz");
        $connect4 = mysqli_connect("localhost", "root", "", "inz");*/
        $connect = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
        $connect2 = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
        $connect3 = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
        $connect4 = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
        $query = "SELECT * FROM users";
        $query2 = "SELECT * FROM payments order by date_in desc";
        $query3 = "SELECT * FROM activities order by date_in desc";
        $query4 = "SELECT * FROM info order by DATE desc";
        $result = mysqli_query($connect, $query);
        $result2 = mysqli_query($connect2, $query2);
        $result3 = mysqli_query($connect3, $query3);
        $result4 = mysqli_query($connect4, $query4);
    ?>
<body>
      <header>
          
            <nav>
                <div class="menu-icon">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="logo">
                    <a href="index.php"><img src="img/logo.png"></a>
                </div>
            
                
                <div class="menu">
                    <ul>
                        <li><a href="account_main.php"><p>Strona Główna</p></a></li>
                        <li ><a href="logout.php"><p><i class="fas fa-power-off"></i></p></a></li>
                    </ul>
                </div>
            </nav>
                 
        
      </header>
 

<div class="box0_img">

    <div class="row">
        <div class="col">

            </div>
        </div>
    </div>

 
 <div class="row">
     
     
    <div class="col-sm">
        
                        <div class="box0_dane">
 <button onClick="window.location.reload();"><i class="fas fa-sync-alt"></i></button>
                <h2>Dane</h2> 
                
                <div class="table-responsive">  
                    <table id="editable_table" class="table table-bordered table-striped">
                         <thead class="thead-dark">
                          <tr>
                           <th>ID</th>
                           <th>Login</th>
                           <th>Imię i nazwisko</th>
                           <th>Adres e-mail</th>
                            <th>Telefon</th>
                            <th>Data rejestracji</th>
                              <th>Dostęp</th>
                          </tr>
                         </thead>
                         <tbody>
                         <?php
                         while($row = mysqli_fetch_array($result))
                         {
                          echo '
                          <tr>
                          <td>'.$row["ID"].'</td>
                           <td>'.$row["LOGIN"].'</td>
                           <td>'.$row["NAME"].'</td>
                           <td>'.$row["MAIL"].'</td>
                           <td>'.$row["PHONE"].'</td>
                           <td>'.$row["DATE_IN"].'</td>
                           <td>'.$row["ACCESS"].'</td>
                          </tr>
                          ';
                         }
                         ?>
                         </tbody>
                    </table>
               </div>  

        </div>
        </div>

    </div>  
<div class="row">
    
    <div class="col">
                      <div class="box0_zajecia">
                        
                <h2>Zajęcia</h2>
            <div class="table-responsive">  
                    <table id="editable_table3" class="table table-bordered table-striped">
                         <thead class="thead-dark">
                          <tr>
                              <th>ID</th>
                           <th>Login</th>
                           <th>Dzień tygodnia</th>
                           <th>Godzina zajęć</th>
                            <th>Rodzaj zajęć</th>
                            <th>Data zapisu</th>
                              <th>Status</th>
                          </tr>
                         </thead>
                         <tbody>
                         <?php
                         while($row = mysqli_fetch_array($result3))
                         {
                          echo '
                          <tr>
                          <td>'.$row["ID"].'</td>
                           <td>'.$row["LOGIN"].'</td>
                           <td>'.$row["DAY"].'</td>
                           <td>'.$row["TIME"].'</td>
                           <td>'.$row["TYPE"].'</td>
                           <td>'.$row["DATE_IN"].'</td>
                           <td>'.$row["STATUS"].'</td>
                          </tr>
                          ';
                            
                             
                         }
                         ?>
                         </tbody>
                    </table>
               </div>  
            </div>
</div>
  </div>        

    <div class="row">
    <div class="col">
                <div class="box0_activities">
            <h2>Karnety</h2> 
                <div class="table-responsive">  
                    <table id="editable_table2" class="table table-bordered table-striped">
                        <thead class="thead-dark">
                              <tr>
                               <th>ID</th>
                               <th>Login</th>
                               <th>Rodzaj karnetu</th>
                               <th>Ważny od</th>
                               <th>Ważny do</th>
                               <th>Data zakupu</th>
                                  <th>Status</th>
                              </tr>
                         </thead>
                         <tbody>
                             <?php
                             while($row = mysqli_fetch_array($result2))
                             {

                              echo '
                              <tr>
                              <td>'.$row["ID"].'</td>
                              <td>'.$row["LOGIN"].'</td>
                               <td>'.$row["TYPE"].'</td>
                               <td>'.$row["START"].'</td>
                               <td>'.$row["STOP"].'</td>
                               <td>'.$row["DATE_IN"].'</td>
                               <td>'.$row["STATUS"].'</td>
                              </tr>
                              ';
                             }
                             ?>
                         </tbody>
                    </table>
                    
           </div>  

     </div> 
</div>
</div>
    
    <div class="row">
    <div class="col">
                <div class="box0_info">
            <h2>Aktualności</h2> 
                <div class="table-responsive">  
                    <table id="editable_table4" class="table table-bordered table-striped">
                        <thead class="thead-dark">
                              <tr>
                               <th>ID</th>
                               <th>Data</th>
                               <th>Treść</th>
                                  <th>Autor</th>
                              </tr>
                         </thead>
                         <tbody>
                             <?php
                             while($row = mysqli_fetch_array($result4))
                             {

                              echo '
                              <tr>
                              <td>'.$row["ID"].'</td>
                              <td>'.$row["DATE"].'</td>
                               <td>'.$row["TEXT"].'</td>
                               <td>'.$row["AUTHOR"].'</td>
                              </tr>
                              ';
                             }
                             ?>
                         </tbody>
                    </table>
                    
           </div>  

     </div> 
</div>
</div>


<div class="stopka" name="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm" id="col1">
                <h2>Kontakt</h2>
                    <p>
                    <i class="fas fa-user"></i> Jakub Tarkowski<br>
                    <i class="fas fa-phone"></i> 725 054 022<br>
                    <i class="far fa-envelope-open"></i> jakub95tarkowski@gmail.com<br>
                    <i class="fas fa-map-marker-alt"></i> 87-100 Toruń</p>
                <ul>
                <li><a href="https://www.facebook.com/manta.torun/"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://www.instagram.com/manta.torun/?hl=pl"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCXBQ3_TL1F6TjTr2rUFNxLA"><i class="fab fa-youtube"></i></a></li>
                </ul>

            </div>
        <div class="col-sm" id="col2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9601.9590341375!2d18.601140943623136!3d53.01155832856238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470334e18b27fc21%3A0x655ea3cf4b6e88c0!2sStare+Miasto%2C+87-100+Toru%C5%84!5e0!3m2!1spl!2spl!4v1525250335120" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-sm" id="col3">
            <h2>Napisz do nas!</h2>
                <form id="contact_form" method="post">
                <input type="text" name="imie_c" class="form-control" placeholder="Imie i nazwisko" >
                <input type="text" name="mail_c" class="form-control" placeholder="E-mail">
                <textarea class="form-control" name="msg_c" placeholder="Treść" rows="12"></textarea>
                <input type="submit" name="wyslij" class="btn btn-success btn-block" value="Wyślij">
                </form>
        </div>
        </div>
    </div>
</div>

<!--php -->

<?php 

    
        if(isset($_POST['wyslij'])){
                $mail_c = $_POST['mail_c'];
    $imie_c = $_POST['imie_c'];
    $msg_c = $_POST['msg_c'];
            require 'phpmailer/PHPMailerAutoload.php';
            try{
            $mail = new PHPMailer;
            
            $mail->CharSet = 'UTF-8';
            
            $mail->Username='admin@jtarkowski.pl';

            $mail->setFrom('admin@jtarkowski.pl');
            $mail->addAddress('admin@jtarkowski.pl','Admin');
            $mail->addReplyTo($mail_c,$mail_c);
            
            $mail->isHTML(true);
            $mail->Subject='Wiadmość ze strony jtarkowski.pl';
            $mail->Body='<h1>Wiadomośc ze strony jtarkowski.pl</h1><p>'.$msg_c.'</p><br><br><p>Imię i nazwisko: '.$imie_c.'</p><p>Adres e-mail: '.$mail_c.'</p>';
            
            $mail->send();
             echo "<script type='text/javascript'>alert(\"Wiadomość wysłana. Odezwiemy się w ciągu 24h.\");</script>";

        }catch (Exception $e){
                echo "<script type='text/javascript'>alert(\"Niestety nie udało się wysłać wiadomości.\");</script>";
            }
        }

// Dodawanie informacji
    
         if(isset($_POST['dodaj'])){
            $date = date('Y-m-d');
            $info = $_POST['info'];
             $conn = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
             /*$conn = mysqli_connect("localhost", "root", "", "inz");
             $db = mysqli_select_db($conn, "inz");*/
                if($conn === false){
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }

                

                $sql = "INSERT INTO info (DATE,TEXT) VALUES ('$date', '$info')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>alert(\"Dodano ogłoszenie\");</script>";
                } else {
                     echo "<script type='text/javascript'>alert(\"Błąd dodania\");</script>";
                     echo("<script>location.href = 'index.php';</script>");
                }
                mysqli_close($conn);
            
        }
?>

<div id="stopka2"><p>ALL RIGHTS RESERVED &copy; Jakub Tarkowski</p></div>


    <script>
        
  $(document).ready(function() {
      
// Menu
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

        $(document).ready(function() {
            $("nav ul li").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });
        
// Scroll navbar efekt
        
      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })
        
// Tableedit
        
$(document).ready(function(){  
     $('#editable_table').Tabledit({
         
      url:'action.php',
      columns:{
       identifier:[0, "ID"],
       editable:[[1, 'LOGIN'],[2, 'NAME'], [3, 'MAIL'],[4, 'PHONE'],[5, 'DATE_IN'],[6, 'ACCESS', '{"ADMIN":"ADMIN","USER":"USER"}']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       
      }
     });

    $('#editable_table2').Tabledit({
      url:'action2.php',
      columns:{
      identifier:[0, "ID"],
      editable:[[1, "LOGIN"],[2, 'TYPE'], [3, 'START'],[4, 'STOP'],[5, 'DATE_IN'],[6, 'STATUS', '{"Weryfikacja zakupu":"Weryfikacja zakupu","Opłacono":"Opłacono"}']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       
      }
     });

    $('#editable_table3').Tabledit({
      url:'action3.php',
      columns:{
      identifier:[0, "ID"],
      editable:[[1, 'LOGIN'],[2, 'DAY'], [3, 'TIME'],[4, 'TYPE'],[5, 'DATE_IN'],[6, 'STATUS', '{"Weryfikacja zapisu":"Weryfikacja zapisu","Weryfikacja platnosci":"Weryfikacja platnosci","Zapisano":"Zapisano"}']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       
      }
     });
    $('#editable_table4').Tabledit({
      url:'action4.php',
      columns:{
      identifier:[0, "ID"],
      editable:[[1, 'DATE'],[2, 'TEXT'],[3, 'AUTHOR']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       
      }
     });


 
});  
        
 </script>





</body>
</html>
