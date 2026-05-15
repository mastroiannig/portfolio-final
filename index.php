<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

 
 
    <link rel="stylesheet" href="build/style.css">
    <title>Document</title>
</head>
<body>
<?php
    include("partials/nav.php");
?>
<div class="container">
    <div class="row">
        <?php
        require "config/connexion.php";
        $req = $bdd->query("SELECT products.cover AS cover, products.name AS pname, categories.name AS cname, DATE_FORMAT(products.date, '%d/%m/%Y') AS mydate, products.id AS pid, categories.id AS cid FROM products INNER JOIN categories ON products.category = categories.id ORDER BY products.date DESC LIMIT 0,4");
        while($don = $req->fetch())
        $req->closeCursor();
        ?>
    </div>
</div>
<div class="slide" id="Home">
    <h1>GIANNI</h1>
    <p>Graphic Designer</p>
</div>
<div class="slide" id="contact">
    <div class="droite">
        <h3>Contact</h3>
        <?php
            if(isset($_GET['success']))
            {
                echo "<div class='message-success'>Votre message à bien été envoyé! Merci</div>";
            }

            if(isset($_GET['error']))
            {
                echo "<div class='message-error'>Une erreur est survenue</div>";
            }

        ?>
        <form action="treatmentContact.php" method="POST">
            <div class="form-group">
                <label for="nom">Nom: </label>
                <input type="text" name="nom" id="nom">
            </div>
            <div class="form-group">
                <label for="email">E-mail: </label>
                <input type="email" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="message">Message: </label>
                <textarea name="message" id="message"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Envoyer">
            </div>
        </form>
    </div>
</div>
</body>
</html>