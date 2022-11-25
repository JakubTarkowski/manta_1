<?php
include("check.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zweryfikuj Konto</title>
    <link rel="stylesheet" href="stylelogin.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    </head>
<body>
<div class="container" id="container2">
	<div class="form">
        <form method="post" action="">
                  <input type="text" name="mail" placeholder="Adres email">
                    <input type="text" name="key" placeholder="Wprowadź 4-cyfrowy klucz">
                <input type="submit" name="submit_verify">
            
        </form>
        
         
	</div>
	
</div>

</body>
</html>
