<?php
include("check.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Panel logowania</title>
    <link rel="stylesheet" href="stylelogin.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    </head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">



        
         <form id="register" method="post" action="">
            <h1>Rejestracja</h1>
                <input type="text" name="user_reg" placeholder="Imię i nazwisko">
				<input type="text" name="mail_reg" placeholder="Email">
                <input type="text" name="phone_reg" placeholder="Telefon">
                <input type="text" name="login_reg" placeholder="Login">
				<input type="password" name="pass_reg" placeholder="Hasło">
				<input type="password" name="pass2_reg"placeholder="Potwierdź hasło">
				<input type="submit" name="submit_register" value="Zarejestruj">
                </form>
	</div>
	<div class="form-container sign-in-container">
                <form id="login_form" method="post" action="">
                    <h1>Logowanie</h1>
                    <span><?php echo $error;?></span>
				<input type="text" name="mail" placeholder="Adres e-mail">
				<input type="password" name="pass" placeholder="Hasło">
				<input type="submit" name="submit_login" value="Zaloguj">
                </form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Masz konto?</h1>
				<p>Przejdz do logowania</p>
				<button class="ghost" id="signIn">Logowanie</button>
                <a href="index.php"><button class="ghost">Strona główna</button></a>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Nie masz konta?</h1>
				<p>Zarejestruj się już teraz</p>
				<button class="ghost" id="signUp">Rejestracja</button>
                <a href="index.php"><button class="ghost">Strona główna</button></a>
			</div>
		</div>
	</div>
</div>
  <script>
   const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
    

</body>
</html>
