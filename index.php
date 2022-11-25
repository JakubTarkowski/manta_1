<?php 
include("check.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Profesjonalna szkoła pływania Manta Toruń">
  <meta name="keywords" content="szkoła, pływania, nauka, toruń, instruktor">
  <meta name="author" content="Jakub Tarkowski">
      <title>Profesjonalna szkoła pływania Manta Toruń</title>

      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="animate.css">
      <link href="https://fonts.googleapis.com/css?family=Gaegu:300,700" rel="stylesheet">
      <!-- BOOTSTRAP -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" >

      <!-- ICON -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

    
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="fluid-gallery.css">
    
    
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
</head>
<body class="page1">
     
      <header>
         
            <nav id="nav">
                <div class="menu-icon">
                     <i class="fas fa-align-right"></i>
                </div>
                <div class="logo" id="logo">
                    <a href="index.php"><img src="img/logo.png"></a>
                </div>
                
                
                <div class="menu">
                    <ul>
                        <li><a href="#main"><p>Strona Główna</p></a></li>
                        <li><a href="#us"><p>O nas</p></a></li>
                        <li><a href="#zajecia"><p>Harmonogram</p></a></li>
                        <li><a href="#galeria"><p>Galeria</p></a></li>
                        <li><a href="#opinie"><p>Opinie</p></a></li>
                        <li><a href="#oferta"><p>Oferta</p></a></li>
                        <?php
                        if(empty($_SESSION['mail']))
                           {
                        ?>
                        <li><a href="#contact"><p>Kontakt</p></a></li>
                        <li><a href="loginregister.php"><p>Konto użytkownika</p></a></li>
                        <?php
                           } else { ?>
                        <li><a href="#contact"><p>Kontakt</p></a></li>
                        <li><a href="account_main.php">
                            <p>Konto <?php echo $_SESSION['mail']; ?> <i class="fas fa-swimmer"></i></p></a>
                        </li>
                        <li ><a href="logout.php"><p><i class="fas fa-power-off"></i></p></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
      </header>

<div class="box1_back" name="main">    
   <img src="img/Image4.png" width="100%" height="auto">
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-240cad7c-e043-4a55-b5d1-afaf46a8e83b"></div>
    </div>

<div class="box1" name="us">
    
        <h1>Szkoła pływania Manta</h1>
    <div class="box1_txt">
        <p>Szkoła pływania Manta to stowarzyszenie założone w 2017 roku przez trzech trenerów pasjonujących się nauką oraz doskonaleniem pływania.<br>Nasze dotychczasowe doświadczenie oraz praca z dziećmi, pozwala aktualnie na współpracę z ponad 150 osobami.<br>Prowadzimy zajęcia indywidualne oraz grupowe dla dzieci (od 5 roku życia), młodzieży i dorosłych.<br>Nasza wykwalifikowana kadra z ogromnym zaangażowaniem pomoże Państwu w krótkim czasie, nauczyć się lub doszkolić każdy styl pływacki.<br>Zajęcia prowadzone przez nas, odbywają się zawsze punktualnie oraz w bardzo ale to bardzo przyjaznej i miłej atmosferze.<br><br>Wszystkich chętnych zapraszamy, gwarantujemy że z nami Państwo nauczą się pływać !</p><br>
    </div>
    <div class="box1_img">
    <div class="container">

        <div class="row" id="columnbox">
            <div class="col-sm-4" id="columnbox1">
                <i class="fas fa-swimmer"></i>
                <h2>Zajęcia indywidualne</h2>
                <p class="box1txt">Indywidualna lekcja pływania z instruktorem/trenerem<br>(Czas trwania: 45 min)</p>
            </div>
            <div class="col-sm-4" id="columnbox2">
                <i class="fas fa-users"></i>
                <h2>Zajęcia gupowe</h2>
                <p class="box1txt">Lekcja pływania z dwoma instruktorami/trenerami, w grupie max. 15 osobowej<br>(Czas trwania: 45 min)</p>
            </div>
            <div class="col-sm-4" id="columnbox3">
                <i class="fas fa-file-alt"></i>
                <h2>Plany treningowe</h2>
                <p class="box1txt">Rozpisywanie planów treningowych</p>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="box2" >
    <div class="container" id="box2_txt">
        <h2>Jeśli chcesz być najlepszy, musisz robić rzeczy, których inni ludzie nigdy sie nie podejmą ~ Michael Phelps</h2>
        <div class="row">
        <div class="col">
            <iframe src="https://www.youtube.com/embed/yzBvZJ8ZIXQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        
      
    </div>
</div>
<script>

$(document).ready(function(){
    $('#btn1').addClass('active');
    $('#btn2').removeClass('active');
    $('#btn3').removeClass('active');
    $('#btn4').removeClass('active');
    $('#btn5').removeClass('active');
    $("#row1").show();
    $("#row2").hide();
    $("#row3").hide();
    $("#row4").hide();
    $("#row5").hide();

  $("#btn1").click(function(){
    $('#btn1').addClass('active');
    $('#btn2').removeClass('active');
    $('#btn3').removeClass('active');
    $('#btn4').removeClass('active');
    $('#btn5').removeClass('active');
    $("#row1").show();
    $("#row2").hide();
    $("#row3").hide();
    $("#row4").hide();
    $("#row5").hide();
  });
    $("#btn2").click(function(){
    $('#btn2').addClass('active');
    $('#btn1').removeClass('active');
    $('#btn3').removeClass('active');
    $('#btn4').removeClass('active');
    $('#btn5').removeClass('active');
    $("#row1").hide();
    $("#row2").show();
    $("#row3").hide();
    $("#row4").hide();
    $("#row5").hide();
  });
    $("#btn3").click(function(){
    $('#btn3').addClass('active');
    $('#btn2').removeClass('active');
    $('#btn1').removeClass('active');
    $('#btn4').removeClass('active');
    $('#btn5').removeClass('active');
    $("#row1").hide();
    $("#row2").hide();
    $("#row3").show();
    $("#row4").hide();
    $("#row5").hide();
  });
    $("#btn4").click(function(){
    $('#btn4').addClass('active');
    $('#btn2').removeClass('active');
    $('#btn3').removeClass('active');
    $('#btn1').removeClass('active');
    $('#btn5').removeClass('active');
    $("#row1").hide();
    $("#row2").hide();
    $("#row3").hide();
    $("#row4").show();
    $("#row5").hide();
  });
    $("#btn5").click(function(){
    $('#btn5').addClass('active');
    $('#btn2').removeClass('active');
    $('#btn3').removeClass('active');
    $('#btn4').removeClass('active');
    $('#btn1').removeClass('active');
    $("#row1").hide();
    $("#row2").hide();
    $("#row3").hide();
    $("#row4").hide();
    $("#row5").show();
  });
});
</script> 
    <div class="box3" id="zajecia">
        <h1>Harmonogram zajęć</h1>
        <div class="week">
            <ul>
                <li><button id="btn1">Poniedziałek</button></li>
                <li><button id="btn2">Wtorek</button></li>
                <li><button id="btn3">Środa</button></li>
                <li><button id="btn4">Czwartek</button></li>
                <li><button id="btn5">Piątek</button></li>
            </ul>
        
        </div>
        <div class="container">
            <div class="row" id="row1">
                <?php
                $conn = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
                $query_pass = "SELECT * FROM activities WHERE mail = 'ADMIN' AND DAY = 'Poniedzialek' order by TIME";
                $result_pass = mysqli_query($conn, $query_pass);?>
                 <?php
                         while($row = mysqli_fetch_array($result_pass))
                         {
                              echo '
                              <div class="col">
                            <div class="card3" id="box3_card3">
                            <div class="title">'.$row["TYPE"].'</div>
                            <div class="time">'.$row["TIME"].'</div>
                            <div class="ico"><i class="fas fa-swimmer"></i></div>
                            <div class="trener"><p>Trener: '.$row["TRAINER"].'</p></div>  
                             <form method="post" action=""><input type="submit" name="submit_index_activities" value="Zapisz się"></form>
                                 </div>
                    </div>  
                             '     ;                             
                         }
                         ?>   
                    
            </div>
            
            <div class="row" id="row2">
                  <?php
                $conn = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
                $query_pass = "SELECT * FROM activities WHERE mail = 'ADMIN' AND DAY = 'Wtorek' order by TIME";
                $result_pass = mysqli_query($conn, $query_pass);?>
                 <?php
                         while($row = mysqli_fetch_array($result_pass))
                         {
                              echo '
                              <div class="col">
                            <div class="card3" id="box3_card3">
                            <div class="title">'.$row["TYPE"].'</div>
                            <div class="time">'.$row["TIME"].'</div>
                            <div class="ico"><i class="fas fa-swimmer"></i></div>
                            <div class="trener"><p>Trener: '.$row["TRAINER"].'</p></div>  
                           <form method="post" action=""><input type="submit" name="submit_index_activities" value="Zapisz się"></form>
                                 </div>
                    </div>  
                             '     ;                             
                         }
                         ?> 
            </div>
            <div class="row" id="row3">
              <?php
                $conn = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
                $query_pass = "SELECT * FROM activities WHERE mail = 'ADMIN' AND DAY = 'Środa' order by TIME";
                $result_pass = mysqli_query($conn, $query_pass);?>
                 <?php
                         while($row = mysqli_fetch_array($result_pass))
                         {
                              echo '
                              <div class="col">
                            <div class="card3" id="box3_card3">
                            <div class="title">'.$row["TYPE"].'</div>
                            <div class="time">'.$row["TIME"].'</div>
                            <div class="ico"><i class="fas fa-swimmer"></i></div>
                            <div class="trener"><p>Trener: '.$row["TRAINER"].'</p></div>  
                            <form method="post" action=""><input type="submit" name="submit_index_activities" value="Zapisz się"></form>
                                 </div>
                    </div>  
                             '     ;                             
                         }
                         ?>    
            </div>
            <div class="row" id="row4">
                <?php
                $conn = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
                $query_pass = "SELECT * FROM activities WHERE mail = 'ADMIN' AND DAY = 'Czwartek' order by TIME";
                $result_pass = mysqli_query($conn, $query_pass);?>
                 <?php
                         while($row = mysqli_fetch_array($result_pass))
                         {
                              echo '
                              <div class="col">
                            <div class="card3" id="box3_card3">
                            <div class="title">'.$row["TYPE"].'</div>
                            <div class="time">'.$row["TIME"].'</div>
                            <div class="ico"><i class="fas fa-swimmer"></i></div>
                            <div class="trener"><p>Trener: '.$row["TRAINER"].'</p></div>  
                                 <form method="post" action=""><input type="submit" name="submit_index_activities" value="Zapisz się"></form>
                                 </div>
                    </div>  
                             '     ;                             
                         }
                         ?>    
            </div>
            <div class="row" id="row5">
 <?php
                $conn = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
                $query_pass = "SELECT * FROM activities WHERE mail = 'ADMIN' AND DAY = 'Piątek' order by TIME";
                $result_pass = mysqli_query($conn, $query_pass);?>
                 <?php
                         while($row = mysqli_fetch_array($result_pass))
                         {
                              echo '
                              <div class="col">
                            <div class="card3" id="box3_card3">
                            <div class="title">'.$row["TYPE"].'</div>
                            <div class="time">'.$row["TIME"].'</div>
                            <div class="ico"><i class="fas fa-swimmer"></i></div>
                            <div class="trener"><p>Trener: '.$row["TRAINER"].'</p></div>  
                            <form method="post" action=""><input type="submit" name="submit_index_activities" value="Zapisz się"></form>
                                 </div>
                    </div>  
                             '     ;                             
                         }
                         ?>    
            </div>
        
        
   
        </div>
    </div>
<div class="box4" name="galeria">
    <div class="tz-gallery">

        <div class="row">

            <div class="col-md-4" id="box4_1">
                <a class="lightbox" href="img/manta2.jpg">
                    <img src="img/manta2.jpg">
                    
                </a>
            </div>
            <div class="col-md-4" id="box4_2">
                <a class="lightbox" href="img/manta1.jpg">
                    <img src="img/manta1.jpg">
                </a>
            </div>
            <div class="col-md-4" id="box4_3">
                <a class="lightbox" href="img/manta3.jpg">
                    <img src="img/manta3.jpg">
                </a>
            </div>
            
            
            <div class="col-md-6" id="box4_4">
                <a class="lightbox" href="img/foto11.jpg">
                    <img src="img/foto11.jpg">
                </a>
            </div>
            <div class="col-md-6" id="box4_5">
                <a class="lightbox" href="img/foto13.jpg">
                    <img src="img/foto13.jpg">
                </a>
            </div>

        </div>

    </div>
    </div>
    
<div class="box5" name="opinie">
    <h1>Opinie</h1>
    <div class="box5_txt">
    <div id="opinie_slide" class="carousel slide" data-ride="carousel" data-interval="5000" >

                    <!-- Indicators -->
                    <ul class="carousel-indicators" id="car2-indicators">
                        <img src="img/women.png" data-target="#opinie_slide" data-slide-to="0" class="active img-circle img-responsive">
                        <img src="img/men.png" data-target="#opinie_slide" data-slide-to="1" class="img-circle img-responsive">
                        <img src="img/women.png" data-target="#opinie_slide" data-slide-to="2" class="img-circle img-responsive">
                        <img src="img/women.png" data-target="#opinie_slide" data-slide-to="3" class="img-circle img-responsive">
                        <img src="img/women.png" data-target="#opinie_slide" data-slide-to="4" class="img-circle img-responsive">
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <p1>Instruktorzy pierwsza klasa!</p1><br>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br><br><br>
                            <p>~ Pani Roksana <a href="https://www.facebook.com/pg/manta.torun/reviews/?ref=page_internal"><img src="img/face.png" title="Opinia z facebooka'a" width="50px" height="50px"></a></p>
                        </div>
                        <div class="carousel-item">
                            <p1>Super instruktorzy, zajęcia prowadzone efektywnie i profesjonalnie, miła atmosfera.</p1><br>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br><br><br>
                            <p>~ Pan Cezary <a href="https://www.facebook.com/pg/manta.torun/reviews/?ref=page_internal"><img src="img/face.png" title="Opinia z facebooka'a" width="50px" height="50px"></a></p>
                        </div>
                        <div class="carousel-item">
                            <p1>Dziecko zachwycone, rodzice zadowoleni, są efekty. Polecam</p1><br>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br><br><br>
                            <p>~ Pani Barbara <a href="https://www.facebook.com/pg/manta.torun/reviews/?ref=page_internal"><img src="img/face.png" title="Opinia z facebooka'a" width="50px" height="50px"></a></p>
                        </div>
                        <div class="carousel-item">
                            <p1>Bardzo polecamy szkołę! Zajęcia dają rewelacyjne efekty, chłopcy uwielbiają trenerów i przy okazji pływają już lepiej niż rodzice.</p1><br>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br><br><br>
                            <p>~ Pani Aneta <a href="https://www.facebook.com/pg/manta.torun/reviews/?ref=page_internal"><img src="img/face.png" title="Opinia z facebooka'a" width="50px" height="50px"></a></p>
                        </div>
                        <div class="carousel-item">
                            <p1>Polecam również kursy dla dorosłych. Okazało się, że po 50-tce też można miło,bezstresowo nauczyć się pływać.</p1><br>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><br><br>><br>
                            <p>~ Pani Ewa <a href="https://www.facebook.com/pg/manta.torun/reviews/?ref=page_internal"><img src="img/face.png" title="Opinia z facebooka'a" width="50px" height="50px"></a></p>
                        </div>
                    
                    </div>
            </div>
     </div>
</div>
       
<div class="box6" name="oferta">
    <h1>Oferta</h1>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
<?php           $conn = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
                $query_pass = "SELECT * FROM payments WHERE mail = 'PASS' order by TYPE";
                $result_pass = mysqli_query($conn, $query_pass);?>
                 <?php
                         while($row = mysqli_fetch_array($result_pass))
                         {
                              echo '
                              <div class="col">
                            <div class="card">
                            <div class="title">'.$row["TYPE"].'</div>
                            <div class="price"><h4>'.$row["PRICE"].'</h4><p>zł</p></div> 
                            <div class="option">
                            <ul>
                            <li><i class="far fa-check-circle" style="color:#006700"></i> '.$row["NUMBER_LESSONS"].' zajęcia w karnecie</li>
                             <li><i class="far fa-check-circle" style="color:#006700"></i> '.$row["LENGTH_LESSONS"].' minut</li>
                             <li><i class="far fa-check-circle" style="color:#006700"></i> '.$row["DESCRIPTION"].'</li>
                            </ul>
                            </div>
                            <form method="post" action=""><input type="submit" name="submit_index_payments" value="Kup karnet"></form>
                            </div> </div> 
                             ';
                         }?>
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
                <input type="text" name="imie_c" class="form-control" placeholder="Imie i nazwisko">
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
        
?>

<div class="item animated bounceInLeft" id="stopka2"><p>ALL RIGHTS RESERVED &copy; Jakub Tarkowski</p></div>

 <!--Script -->


    
<script>
    baguetteBox.run('.tz-gallery');
</script>

 
    <script type="text/javascript">
                
// Menu
        $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });  
        
        $(document).ready(function() {
            $("nav ul li").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });
        
// Galeria
        
        baguetteBox.run('.tz-gallery');

// Scroll ukrywanie
        
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
          if (prevScrollpos > currentScrollPos || currentScrollPos < 300) {
                document.getElementById("nav").style.top = "0";
                document.getElementById("logo").style.top = "0";
          } else {
                document.getElementById("nav").style.top = "-100px";
                document.getElementById("logo").style.top = "-100px";
          }
          prevScrollpos = currentScrollPos;
}

// Scroll navbar efekt

        $(window).on("scroll", function() {
          if($(window).scrollTop()) {$('nav').addClass('black');}
          
            else {$('nav').removeClass('black');}
      })

// Scrollowanie do #

        $('a[href*="#"]')
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                &&
                location.hostname == this.hostname
            ) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
                event.preventDefault();
                $('html, body').animate({
                     scrollTop: target.offset().top
                }, 1000, function() {
                      var $target = $(target);
                      $target.focus();
                      if ($target.is(":focus")) {
                            return false;
                          } else {
                            $target.attr('tabindex','-1');
                            $target.focus();
                            };
                });
            }
            }
          });
        
//Animacja
        
        window.sr = ScrollReveal({ reset: true });

        sr.reveal('.box1_txt', {duration:2000});
        sr.reveal('#columnbox1', {duration:2000});
        sr.reveal('#columnbox2', {duration:2000,delay:200});
        sr.reveal('#columnbox3', {duration:2000,delay:400});
        
        sr.reveal('.box3', {duration:2000});
        
        sr.reveal('.card', {duration:2000});
        
        sr.reveal('#col1', {duration:2000});
        sr.reveal('#col2', {duration:2000});
        sr.reveal('#col3', {duration:2000});

        
      </script>





</body>
</html>
