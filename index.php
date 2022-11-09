<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edusogno</title>
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
    <?php
    include __DIR__ . '/header.php';
    ?>
    <section>
        <h1 class="title">Crea il tuo account</h1>
        <div class="card">
            <form action="register.php" method="POST">       
                <label for="nome">Inserisci il nome</label>
                    <input type="text" placeholder="Mario" id="nome" name="nome" required>

                <label for="cognome">Inserisci il cognome</label>
                    <input type="text" placeholder="Rossi" id="cognome" name="cognome" required>

                <label for="email">Inserisci l'email</label>
                    <input type="email" placeholder="name@example.com" id="email" name="email" >


                <label for="password">Inserisci la password</label>
                    <input type="password" placeholder="Scrivila qui" id="password" name="password" required>

                <button type="submit">REGISTRATI</button>
                <a href="login.html">Hai già un'account? <b>Acccedi</b></a>
            </form>
        </div>
    </section>

</body>

</html>
<style>
<?php include '../assets/styles/style.css'; ?>
</style>