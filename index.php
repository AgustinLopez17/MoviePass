<?php
    include_once('header.php');
?>
<header></header>
    <img src="img/logo.png" alt="MoviePass" class="logo">
    <p class="title">MoviePass</p>
<div class="container">
    <h1>Welcome</h1>
    <form action="process/loguin.php" method="POST">
        <input type="text" name="username" placeholder="Type your username">
        <input type="password" name="password" placeholder="Type your password">
        <button type="submit" class="submit">Log In</button> <p class="or">or</p>
        <button type="button" onclick="location: process/register.php" class="register">Register</button>  
    </form>
</div>
<footer></footer>
</body>