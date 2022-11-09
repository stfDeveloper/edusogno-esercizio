<?php

require_once('config.php');

$nome = $connection->real_escape_string($_POST['nome']);
$cognome = $connection->real_escape_string($_POST['cognome']);
$email = $connection->real_escape_string($_POST['email']);
$password = $connection->real_escape_string($_POST['password']);
$encrypted = password_hash($password, PASSWORD_DEFAULT);

$e = "SELECT email FROM utenti WHERE email = '$email'";
$prevDupEmail = mysqli_query($connection, $e);

$sql = "INSERT INTO utenti (nome, cognome, email, password) VALUES ('$nome','$cognome','$email','$encrypted')";

if (mysqli_num_rows($prevDupEmail) > 0) {
        ?><section>
            <?php echo "($email) E' già in uso"; ?>
            <h1>E' la tua email?<a href="login.html">ACCEDI</a></h1>
            <br>
            <h4>o</h4>
            <h4><a href="index.php">REGISTRATI</a></h4> 
        </section> 
         <?php
    }else {
         if ($connection->query($sql) === true) { 
    echo "success ";
    }else{
    echo "error";
    } 
}
?>
<style>
<?php include 'assets/styles/style.css'; ?>
</style>