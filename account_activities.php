<?php
include("check.php");
include("actionadd.php");
$mail = $_SESSION['mail'];
 $conn2 = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
        $query2 = "SELECT * FROM users WHERE mail='$mail'";
        $result2 = mysqli_query($conn2, $query2);
        
        while($row = mysqli_fetch_array($result2)){$access= $row["ACCESS"];}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Zajęcia</title>

    <link rel="stylesheet" href="styleaccount.css">
      
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Gaegu:300,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

        
</head>

<body>
    <div class="wrapper">
                        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-240cad7c-e043-4a55-b5d1-afaf46a8e83b"></div>
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="index.php"><img src="img/logo.png"></a>

            </div>

            <div class="lineside"></div>
            <ul class="list-unstyled components">
                <p></p>
                <li>
                    <a href="index.php">Strona Główna</a>
                </li>
                <li>
                    <a href="account_main.php">Konto</a>
                </li>
                <li>
                    <a href="account_users.php">Dane</a>
                </li>
                <li class="active">
                    <a href="account_activities.php">Zajęcia</a>
                </li>
                <li>
                    <a href="account_payments.php">Płatności</a>
                </li>
                <li>
                    <a href="account_contact.php">Kontakt</a>
                </li>
  
                
            </ul>
            <div class="media">
            <ul>
                <li><a href="https://www.facebook.com/manta.torun/"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://www.instagram.com/manta.torun/?hl=pl"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCXBQ3_TL1F6TjTr2rUFNxLA"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        
                    </button>   
                    
                        <ul class="nav navbar-nav ml-auto">
                            <li><a href="" id="login"><?php echo $mail?></a></li>
                            <li><a href="logout.php" id="red"><i class="fa fa-power-off"></i> Wyloguj</a>                           
                        </ul>
                   
                </div>
            </nav>
<!-- GRUPOWE -->
            
            <div class="container" id="calendar_group">
                <div class="row">
            <h1>Zajęcia grupowe</h1>
          
            </div>
                <div class="row">
   
            <div class="col-sm" id="calendar_day">
                <form method="post" action="">
                  <input type="text" id="day" name="day" value="Poniedziałek" readonly><br>
                <?php $conn_harmonogram = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
                $query_pon = "SELECT * FROM activities WHERE mail = 'ADMIN' AND DAY = 'Poniedziałek' AND TYPE = 'Zajecia grupowe' order by time";
                $result_pon = mysqli_query($conn_harmonogram, $query_pon);?>
                 <?php
                         while($row = mysqli_fetch_array($result_pon))
                         {
                              echo '
                              <input type="hidden" id="day" name="trainer" value='.$row["TRAINER"].' readonly><br>
                              <input type="submit" onclick="return clicked();" class="btn btn-primary" name="submitgroup" value='.$row["TIME"].' title="Trener: '.$row["TRAINER"].' &#013; Poziom: '.$row["LEVEL"].'"/><br>
                               <input type="hidden" id="day" name="level" value='.$row["LEVEL"].' readonly><br>
                      
                          ';                             
                         };
                         ?>    
                    </form>
                
    </div>
                <div class="col-sm" id="calendar_day">
                <form method="post" action="">
                  <input type="text" id="day" name="day" value="Wtorek" readonly><br>
                <?php
                $query_wt = "SELECT * FROM activities WHERE mail = 'ADMIN' AND DAY = 'Wtorek' AND TYPE = 'Zajecia grupowe' order by time";
                $result_wt = mysqli_query($conn_harmonogram, $query_wt);?>
                 <?php
                         while($row = mysqli_fetch_array($result_wt))
                         {
                              echo '
                             <input type="hidden" id="day" name="trainer" value='.$row["TRAINER"].' readonly><br>
                              <input type="submit" onclick="return clicked();" class="btn btn-primary" name="submitgroup" value='.$row["TIME"].' title="Trener: '.$row["TRAINER"].' &#013; Poziom: '.$row["LEVEL"].'"/><br>
                               <input type="hidden" id="day" name="level" value='.$row["LEVEL"].' readonly><br>
                          ';                             
                         };
                         ?>    
                    </form>
                
    </div>
    <div class="col-sm" id="calendar_day">
                <form method="post" action="">
                  <input type="text" id="day" name="day" value="Środa" readonly><br>
                <?php 
                $query_sr = "SELECT * FROM activities WHERE mail = 'ADMIN' AND DAY = 'Środa' AND TYPE = 'Zajecia grupowe' order by time";
                $result_sr = mysqli_query($conn_harmonogram, $query_sr);?>
                 <?php
                         while($row = mysqli_fetch_array($result_sr))
                         {
                              echo '
                           <input type="hidden" id="day" name="trainer" value='.$row["TRAINER"].' readonly><br>
                              <input type="submit" onclick="return clicked();" class="btn btn-primary" name="submitgroup" value='.$row["TIME"].' title="Trener: '.$row["TRAINER"].' &#013; Poziom: '.$row["LEVEL"].'"/><br>
                               <input type="hidden" id="day" name="level" value='.$row["LEVEL"].' readonly><br>
                          ';                             
                         };
                         ?>    
                    </form>
                
    </div>
        <div class="col-sm" id="calendar_day">
                <form method="post" action="">
                  <input type="text" id="day" name="day" value="Czwartek" readonly><br>
                <?php 
                $query_czw = "SELECT * FROM activities WHERE mail = 'ADMIN' AND DAY = 'Czwartek' AND TYPE = 'Zajecia grupowe' order by time";
                $result_czw = mysqli_query($conn_harmonogram, $query_czw);?>
                 <?php
                         while($row = mysqli_fetch_array($result_czw))
                         {
                              echo '
                           <input type="hidden" id="day" name="trainer" value='.$row["TRAINER"].' readonly><br>
                              <input type="submit" onclick="return clicked();" class="btn btn-primary" name="submitgroup" value='.$row["TIME"].' title="Trener: '.$row["TRAINER"].' &#013; Poziom: '.$row["LEVEL"].'"/><br>
                               <input type="hidden" id="day" name="level" value='.$row["LEVEL"].' readonly><br>
                          ';                             
                         };
                         ?>    
                    </form>
                
    </div>
        <div class="col-sm" id="calendar_day">
                <form method="post" action="">
                  <input type="text" id="day" name="day" value="Piątek" readonly><br>
                <?php 
                $query_pt = "SELECT * FROM activities WHERE mail = 'ADMIN' AND DAY = 'Piątek' AND TYPE = 'Zajecia grupowe' order by time";
                $result_pt = mysqli_query($conn_harmonogram, $query_pt);?>
                 <?php
                         while($row = mysqli_fetch_array($result_pt))
                         {
                              echo '
                            <input type="hidden" id="day" name="trainer" value='.$row["TRAINER"].' readonly><br>
                              <input type="submit" onclick="return clicked();" class="btn btn-primary" name="submitgroup" value='.$row["TIME"].' title="Trener: '.$row["TRAINER"].' &#013; Poziom: '.$row["LEVEL"].'"/><br>
                               <input type="hidden" id="day" name="level" value='.$row["LEVEL"].' readonly><br>  ';                             
                         };
                         ?>    
                    </form>
                
    </div>
    </div>
       
    </div>     <br>

            
            
<!--    INDYWIDUALNE  -->

            <div class="container" id="calendar_indyvidual">
                <div class="row">
            <h1>Zajęcia Indywidualne</h1>
          
            </div>
                <div class="row">
   
            <div class="col-sm" id="calendar_day">
                <form method="post" action="">
                  <input type="text" id="day" name="day" value="Poniedziałek" readonly><br>
                <?php 
                $query_pon1 = "SELECT * FROM activities WHERE mail = 'ADMIN' AND DAY = 'Poniedzialek' AND TYPE = 'Zajecia indywidualne' order by time";
                $result_pon1 = mysqli_query($conn_harmonogram, $query_pon1);?>
                 <?php
                         while($row = mysqli_fetch_array($result_pon1))
                         {
                              echo '
                             <input type="hidden" id="day" name="trainer" value='.$row["TRAINER"].' readonly><br>
                              <input type="submit" onclick="return clicked();" class="btn btn-primary" name="submitindyvidual" value='.$row["TIME"].' title="Trener: '.$row["TRAINER"].' &#013; Poziom: '.$row["LEVEL"].'"/><br>
                               <input type="hidden" id="day" name="level" value='.$row["LEVEL"].' readonly><br>
                          ';                             
                         };
                         ?>    
                    </form>
                
    </div>
                <div class="col-sm" id="calendar_day">
                <form method="post" action="">
                  <input type="text" id="day" name="day" value="Wtorek" readonly><br>
                <?php 
                $query_wt1 = "SELECT * FROM activities WHERE mail = 'ADMIN' AND DAY = 'Wtorek' AND TYPE = 'Zajecia indywidualne' order by time";
                $result_wt1 = mysqli_query($conn_harmonogram, $query_wt1);?>
                 <?php
                         while($row = mysqli_fetch_array($result_wt1))
                         {
                              echo '
                             <input type="hidden" id="day" name="trainer" value='.$row["TRAINER"].' readonly><br>
                              <input type="submit" onclick="return clicked();" class="btn btn-primary" name="submitindyvidual" value='.$row["TIME"].' title="Trener: '.$row["TRAINER"].' &#013; Poziom: '.$row["LEVEL"].'"/><br>
                               <input type="hidden" id="day" name="level" value='.$row["LEVEL"].' readonly><br>
                       
                          ';                             
                         };
                         ?>    
                    </form>
                
    </div>
    <div class="col-sm" id="calendar_day">
                <form method="post" action="">
                  <input type="text" id="day" name="day" value="Środa" readonly><br>
                <?php 
                $query_sr1 = "SELECT * FROM activities WHERE mail = 'ADMIN' AND DAY = 'Środa' AND TYPE = 'Zajecia indywidualne' order by time";
                $result_sr1 = mysqli_query($conn_harmonogram, $query_sr1);?>
                 <?php
                         while($row = mysqli_fetch_array($result_sr1))
                         {
                              echo '
                              <input type="hidden" id="day" name="trainer" value='.$row["TRAINER"].' readonly><br>
                              <input type="submit" onclick="return clicked();" class="btn btn-primary" name="submitindyvidual" value='.$row["TIME"].' title="Trener: '.$row["TRAINER"].' &#013; Poziom: '.$row["LEVEL"].'"/><br>
                               <input type="hidden" id="day" name="level" value='.$row["LEVEL"].' readonly><br>
                          ';                             
                         };
                         ?>    
                    </form>
                
    </div>
        <div class="col-sm" id="calendar_day">
                <form method="post" action="">
                  <input type="text" id="day" name="day" value="Czwartek" readonly><br>
                <?php 
                $query_czw1 = "SELECT * FROM activities WHERE mail = 'ADMIN' AND DAY = 'Czwartek' AND TYPE = 'Zajecia indywidualne' order by time";
                $result_czw1 = mysqli_query($conn_harmonogram, $query_czw1);?>
                 <?php
                         while($row = mysqli_fetch_array($result_czw1))
                         {
                              echo '
                              <input type="hidden" id="day" name="trainer" value='.$row["TRAINER"].' readonly><br>
                              <input type="submit" onclick="return clicked();" class="btn btn-primary" name="submitindyvidual" value='.$row["TIME"].' title="Trener: '.$row["TRAINER"].' &#013; Poziom: '.$row["LEVEL"].'"/><br>
                               <input type="hidden" id="day" name="level" value='.$row["LEVEL"].' readonly><br>
                       
                          ';                             
                         };
                         ?>    
                    </form>
                
    </div>
        <div class="col-sm" id="calendar_day">
                <form method="post" action="">
                  <input type="text" id="day" name="day" value="Piątek" readonly><br>
                <?php 
                $query_pt1 = "SELECT * FROM activities WHERE mail = 'ADMIN' AND DAY = 'Piątek' AND TYPE = 'Zajecia indywidualne' order by time";
                $result_pt1 = mysqli_query($conn_harmonogram, $query_pt1);?>
                 <?php
                         while($row = mysqli_fetch_array($result_pt1))
                         {
                              echo '
                            <input type="hidden" id="day" name="trainer" value='.$row["TRAINER"].' readonly><br>
                              <input type="submit" onclick="return clicked();" class="btn btn-primary" name="submitindyvidual" value='.$row["TIME"].' title="Trener: '.$row["TRAINER"].' &#013; Poziom: '.$row["LEVEL"].'"/><br>
                               <input type="hidden" id="day" name="level" value='.$row["LEVEL"].' readonly><br>
                       
                          ';                             
                         }mysqli_close($conn_harmonogram);
                         ?>    
                    </form>
                
    </div>
    </div>
       
    </div> 
            
       
<!-- DODAWANIE   -->
            <?php if($access=='ADMIN'){?>

                
            <div class="row" id="text">
                
            <div class="col-sm" id="activities_add">
                <p>Edytor zajęć</p>
                 <form method="post" action="">
                        <div class="form-row">
                            <div class="form-group col-md">

                                <select class="form-control" name="type_add" type="text" style="height:40px;">
                                    <option>Rodzaj</option>
                                    <option value="Zajecia indywidualne">Zajęcia indywidualne</option>
                                    <option value="Zajecia grupowe">Zajęcia grupowe</option>
                                </select>
                            </div>
                            <div class="form-group col-md">

                                <select class="form-control" name="day_add" type="text"  style="height:40px;">
                                    <option>Dzień</option>
                                    <option value="Poniedziałek">Poniedziałek</option>
                                    <option value="Wtorek">Wtorek</option>
                                    <option value="Środa">Środa</option>
                                    <option value="Czwartek">Czwartek</option>
                                    <option value="Piątek">Piątek</option>
                                </select>
                            </div>
                            <div class="form-group col-md">
                                <input class="form-control" type="text" placeholder="HH:MM" name="time_add" style="height:40px;">
                            </div>
                            <div class="form-group col-md">
                                <?php $conn_tr = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
                $query_tr = "SELECT * FROM activities WHERE mail = 'TRAINER'";
                $result_tr = mysqli_query($conn_tr, $query_tr);?>
                                <select class="form-control" name="trener_add" type="text"  style="height:40px;">
                                <option value="nie_wybrano">Trener</option>
                            
                               <?php
                         while($row = mysqli_fetch_array($result_tr))
                         {
                              echo '
                                    <option value='.$row["TRAINER"].'>'.$row["TRAINER"].'</option>
                              
                       
                          ';                             
                         }mysqli_close($conn_tr);
                         ?>    </select>
                            </div>
                            <div class="form-group col-md">

                                <select class="form-control" name="poziom_add" type="text"  style="height:40px;">
                                    <option value="nie_wybrano">Poziom</option>
                                    <option value="Początkujący">Początkujący</option>
                                    <option value="Średnio_zaawansowany">Średnio_zaawansowany</option>
                                    <option value="Zaawansowany">Zaawansowany</option>
                                </select>
                            </div>
                       </div>
                        <button type="submit" id="add" name="submit_add_activities" class="btn btn-primary">Dodaj zajęcia</button>
                      <button type="submit" id="del" name="submit_delete_activities" class="btn btn-primary">Usuń</button>
                    </form>
                
                           
                               <p> Dodaj trenera</p>
                 <form method="post" action="">
                        <div class="form-row">
                            <div class="form-group col-md">
                                <input class="form-control" type="text" placeholder="Imię_nazwisko" name="trainer_add">
                            </div>
                       </div>
                        <button type="submit" id="add" name="submit_add_trainer" class="btn btn-primary">Dodaj trenera</button>
                     <button type="submit" id="del" name="submit_delete_trainer" class="btn btn-primary">Usuń</button>
                    </form>
                
            </div></div>
  
            <?php } ?>
            <div class="row" id="text">
    <?php  
    

        $connect3 = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
        $query3 = "SELECT * FROM activities WHERE mail = '$mail' order by date_in desc";
        $result3 = mysqli_query($connect3, $query3);
  ?>   
            <div class="col-sm" id="activities_1">
                <h2>Historia</h2>
                                     <div class="table-responsive">  
                    <table id="editable_table3" class="table table-bordered table-striped">
                         <thead class="thead-dark">
                          <tr>
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
                           <td>'.$row["DAY"].'</td>
                           <td>'.$row["TIME"].'</td>
                           <td>'.$row["TYPE"].'</td>
                           <td>'.$row["DATE_IN"].'</td>
                           <td>'.$row["STATUS"].'</td>
                          </tr>
                          ';                             
                         }mysqli_close($connect3);
                         ?>
                         </tbody>
                    </table>
               </div> 

            </div>
                
            
    
            

        </div>
        </div>
    </div>  
    


</body>

   
    

</html>
 <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="js/jquery.tabledit.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   

    
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
                });  
        
        function clicked() {
    return confirm('Czy jesteś pewien?');
}
 </script>
