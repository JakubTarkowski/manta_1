<?php
include("check.php");
include("actionadd.php");
$mail = $_SESSION['mail'];
 $conn2 = mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');
        $query2 = "SELECT * FROM users WHERE MAIL='$mail'";
        $result2 = mysqli_query($conn2, $query2);
        
        while($row = mysqli_fetch_array($result2)){$access= $row["ACCESS"];}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

       <title>Dane</title>

    <link rel="stylesheet" href="styleaccount.css">
      
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Gaegu:300,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

</head>
   <?php  
    


        $connect =  mysqli_connect('localhost','serwer90830_manta','P@ssw0rd','serwer90830_manta');

        $query = "SELECT * FROM users WHERE mail = '$mail'";

        $result = mysqli_query($connect, $query);

         
     ?> 
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
                <li class="active">
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
                <!-- Load Facebook SDK for JavaScript -->
      

                
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
            <div class="row" id="text">
                
           <?php
                         while($row = mysqli_fetch_array($result))
                        { ?>
                <div class="col-sm-12" id="users_1">
                    <h2>Dane</h2> 
        <form id="update_form" method="post" action="records_users.php">

        <span>ID</span><br>
            <input type="text" id= "off" name="id_upd" style="text-align:center" value="<?php echo $row["ID"];?>" readonly><br>
        <span>Login</span><br>
            <input type="text" id= "off" name="login_upd" style="text-align:center" value="<?php echo $row["LOGIN"];?>" readonly><br>
        <span>Imię i nazwisko</span><br>
            <input type="text" name="name_upd" id="name_upd" style="text-align:center" value="<?php echo $row["NAME"];?>"><br>
        <span>Adres E-mail</span><br>
            <input type="text" name="mail_upd" id="mail_upd" style="text-align:center" value="<?php echo $row["MAIL"];?>"><br>
        <span>Telefon</span><br>
            <input type="text" name="phone_upd" id="phone_upd" style="text-align:center" value="<?php echo $row["PHONE"];?>"><br>
        <span>Typ konta:</span><br>
            <input type="text" id= "off"  name="type_upd" style="text-align:center" value="<?php echo $row["ACCESS"];?>" readonly><br>
            
            <input type="submit" class="update" name="submit_update" value="Aktualizuj" title="Wypełnij wszystkie pola">
              
        </form>

         <?php } mysqli_close($connect);  ?>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   

    
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
                }); 

$(document).ready(function(){  
     $('#editable_table1').Tabledit({
      url:'action5.php',
      columns:{
       identifier:[0, "ID"],
       editable:[[1, 'DATE'], [2, 'TEXT']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });
 
});  
 </script>

