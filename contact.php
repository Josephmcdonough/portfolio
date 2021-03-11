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
    <a href="index.html#presentation">A propos</a>
    <a href="http://joseph-mcdonough.com/fichiers/CV_joseph_mcdonough.pdf" target="_blank">Mon CV</a>
    <a href="index.html">Accueil</a>
</header>
<div class="bckg1 bckgcontact">
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

<footer>
    <div class="reseauxfooter">
        <a href="mailto:contact@joseph-mcdonough.com"><img src="img/envelope.png" height="512" width="512"
                                                           alt="mailto"/></a>
        <a href="https://github.com/Josephmcdonough"><img src="img/github.png" height="512" width="512" alt="git"/></a>
        <a href="https://www.instagram.com/mcdonough_joseph/?hl=fr"><img src="img/instagram.png" height="512"
                                                                         width="512" alt="insta"/></a>
        <a href="https://genius.com/El_C0conut"><img src="img/genius-mieux.png"
                                                     alt="genius"/></a>
        <a href="https://www.linkedin.com/in/joseph-mcdonough-2451a01a3/"><img src="img/linkedin.png" height="512"
                                                                               width="512" alt="linkedin"/></a>
    </div>
</footer>

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