<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News letter</title>
</head>
<body>

    <form action="formulaire.php" method="POST">
        <label for="mail">Entrez votre e-mail pour recevoir notre news letter</label>
        <input type="email" name="mail" is="mail">
        <input type="submit">
    </form>

    <?php
        if (!empty($_POST["mail"])){
            $date = new DateTime();
            $mail = $_POST["mail"]."<====>".$date->format('H:i:s')."\n";
            file_put_contents("mail.txt", $mail, FILE_APPEND);
        }
        
        $file = fopen("mail.txt", 'rb');
        while ($ligne = fgets($file)){

            echo $ligne."<br>";
        }

    ?>

</body>
</html>