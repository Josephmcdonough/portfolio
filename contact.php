<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Joseph McDonough</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="http://joseph-mcdonough.com/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="http://joseph-mcdonough.com/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="http://joseph-mcdonough.com/favicon-16x16.png">
    <link rel="manifest" href="http://joseph-mcdonough.com/site.webmanifest">
</head>

<body>
<header>
    <a href="">A propos</a>
    <a href="#">Mon CV</a>
    <a href="contact.php">Me contacter</a>
</header>
<div class="bckg1">
    <h1 class="contactitle">Contact</h1>
    <form method="post">
        <label>
            <textarea placeholder="Nom" name="nom" required></textarea>
        </label>
        <br>
        <label>
            <textarea placeholder="Prénom" name="prenom" required></textarea>
        </label>
        <br>
        <label>
            <input placeholder="Email" type="email" name="email" required>
        </label>
        <br>
        <label>
            <textarea placeholder="Message" name="message" required></textarea>
        </label>
        <br>
        <input type="submit">
    </form>
    <a class="retour" href="index.html"> >> Retourner sur le site</a>
</div>
<?php
if (isset($_POST['message'])) {
    $position_arobase = strpos($_POST['email'], '@');
    if ($position_arobase === false)
        echo '<p>Votre email doit comporter un arobase.</p>';
    else {
        $retour = mail('contact@joseph-mcdonough.com', 'Envoi depuis la page Contact', $_POST['message'], 'From: ' . $_POST['email']);
        if($retour)
            echo '<p>Votre message a été envoyé.</p>';
        else
            echo '<p>Erreur.</p>';
    }
}
?>

<script>
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 100) {
            $('header').css('background','#EEEEEE');
        } else {
            $('header').css('background','transparent');
        }
    });
</script>
</body>
</html>