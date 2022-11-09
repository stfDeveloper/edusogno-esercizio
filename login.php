<?php
require_once('config.php');

$email = $connection->real_escape_string($_POST['email']);
$password = $connection->real_escape_string($_POST['password']);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $sql_select = "SELECT * FROM utenti WHERE email = '$email'";
    if ($result = $connection->query($sql_select)) {
        if ($result->num_rows == 1) {
            $row = $result->fetch_array(MYSQLI_ASSOC);
            if (password_verify($password, $row['password'])) {
                session_start();

                $_SESSION['logged'] = true;
                $_SESSION['id'] = $row['id'];
                $_SESSION['nome'] = $row['nome'];
                $_SESSION['email'] = $row['email'];
                
                header("location: events.php");
            }else{
                ?> 
                <section>
                <h1>La password non è corretta</h1>
                <h1><a href="login.html"> Riprova</a></h1>
                <br>
                <h4>o</h4>
                <h4><a href="index.php">RECUPERA PASSWORD</a></h4>           
                </section>
                <?php
            }
        }else{
            ?> 
                <section>
                <h1>La email non è corretta</h1>
                <h1><a href="login.html"> Riprova</a></h1>
                <br>
                <h4>o</h4>
                <h4><a href="index.php">REGISTRATI</a></h4>           
                </section>
                <?php
        }
    }else{
        echo "Errore durante il login";
    }
    $connection->close();
}


?>

<style>
<?php include 'assets/styles/style.css'; ?>
</style>