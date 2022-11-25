<?php
include("check.php");
include("actionadd.php");
$mail = $_SESSION['mail'];

 $conn2 = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
        $query2 = "SELECT * FROM users WHERE MAIL='$mail'";
        $result2 = mysqli_query($conn2, $query2);
        
        while($row = mysqli_fetch_array($result2)){$access= $row["ACCESS"];}
mysqli_close($conn2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Jakub Tarkowski</title>

                 

    <title>Konto</title>

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
                <li class="active">
                    <a href="account_main.php">Konto</a>
                </li>
                <li>
                    <a href="account_users.php">Dane</a>
                </li>
                <li>
                    <a href="account_activities.php">Zajęcia</a>
                </li>
                <li>
                    <a href="account_payments.php">Płatności</a>
                </li>
                <li>
                    <a href="account_contact.php">Kontakt</a>
                </li>
                <?php if($access=='ADMIN'){?>
                <li>
                    <a href="account.php">Admin</a>
                </li>
<?php } ?>
                
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
                            <li><a href="logout.php" id="red"><i class="fa fa-power-off"></i> Wyloguj</a></li>                           
                        </ul>
                   
                </div>
            </nav>
    
<div class="row" id="text">
            
            <div class="col-sm" id="news">

                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <h2>Aktualności</h2>
                        <div class="carousel-inner">
                            
                            
<?php $count = 0;
                               
    


        $connect2 = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
        $query2 = "SELECT * FROM info order by DATE desc";
        $result2 = mysqli_query($connect2, $query2);
                         while($row = mysqli_fetch_array($result2))
                         {
                        $count++;
                             if($count === 1)
                          echo '
                          <div class="carousel-item active">
                          <p>'.$row["DATE"].'</p>
                           <p>'.$row["TEXT"].'</p>
                           <p>'.$row["AUTHOR"].'</p>
                        </div>
                          ';
                             else
                                 echo '
                          <div class="carousel-item">
                          <p>'.$row["DATE"].'</p>
                           <p>'.$row["TEXT"].'</p>
                           <p>'.$row["AUTHOR"].'</p>
                          </div>';
                         }
                            mysqli_close($connect2);
                         ?>
    
                        </div>
                         <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                </div>
        
   
                

            </div>
   <?php if($access=='ADMIN'){?>
        <div class="col-sm" id="news_table">
                 <form id="info_add" method="post" action="">
                    <textarea class="form-control" name="info" placeholder="Treść informacji" rows="1"></textarea>
                                       <?php $conn_tr = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
                $query_tr = "SELECT * FROM activities WHERE mail = 'TRAINER'";
                $result_tr = mysqli_query($conn_tr, $query_tr);?>
                               <select class="form-control" name="author" type="text" style="height:40px;">
                                <option value="nie_wybrano">Trener</option>
                            
                               <?php
                         while($row = mysqli_fetch_array($result_tr))
                         {
                              echo '
                                    <option value='.$row["TRAINER"].'>'.$row["TRAINER"].'</option>
                              
                       
                          ';                             
                         }mysqli_close($conn_tr);
                         ?>    </select>
                     
                
                               
                    <input type="submit" name="dodaj" class="btn btn-success btn-block" value="Dodaj">
                    </form>
                
        </div>
    <?php } ?>
 
</div>
<div class="row" id="text">


                <div class="col-sm" id="info">
                    <p>Zapisane zajęcia</p>
                    <p>
<?php 
             
       $conn= mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
                    $query = "SELECT DISTINCT DAY, TIME, TYPE FROM activities WHERE mail = '$mail' order by date_in desc";             
                    $result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
    echo "" . $row["DAY"]. " " . $row["TIME"]. " " . $row["TYPE"]. " <br>";
  }
} else {
  echo "Brak zapisów";
}

mysqli_close($conn);?>
                        </p>
                    
                </div>
                
    
    <div class="col-sm" id="info">
        <p>Zakupione karnety</p>
        <p>
<?php 
             
       $conn= mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
                    $query = "SELECT * FROM payments WHERE mail = '$mail' order by date_in desc";             
                    $result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
    echo "" . $row["TYPE"]. "<br> OD " . $row["START"]. " DO " . $row["STOP"]. "<br> Status : " . $row["STATUS"]. "<br>";
  }
} else {
  echo "Brak karnetów";
}

mysqli_close($conn);?>
</p>
      
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
</script>

<script>
$(document).ready(function(){  
    $('#editable_table1').Tabledit({
         
      url:'action1.php',
      columns:{
       identifier:[0, "ID"],
       editable:[[1, 'DATE'], [2, 'TEXT']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       
      }
     });
 
});  
 </script>
