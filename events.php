<?php 
session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {
    header("location: login.html");
    exit;
}
$email=$_SESSION['email'];
require_once ('config.php');
$sql_select = " SELECT * FROM eventi WHERE attendees LIKE '%$email%'";
$result = mysqli_query($connection, $sql_select);
$events = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edusogno</title>
    <link rel="stylesheet" href="./assets/styles/style.css">
</head>
<body>
    <header>
      <div class="logo"></div> 
    </header>
    <section>
        <h1 class="title">
             <?php echo "Ciao " . ucfirst($_SESSION["nome"]) . " ecco i tuoi eventi" ?>
        </h1>
        <div class="events">
            <?php
                if (count($events) > 0){
                    foreach ($events as $event){
                        echo '<div class="event">';
                        echo '<h2>'.$event['nome_evento'].'</h2>';
                        echo '<button type="button">JOIN</button>';
                        echo '</div>';
                    };
                }else{
                echo '<h3>Non hai eventi</h3>';
                }
            ?>
        </div>
    </section>

</body>
</html>


