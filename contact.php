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
<h1>Contact</h1>
<form method="post">
    <label>Email</label>
    <input type="email" name="email" required><br>
    <label>Message</label>
    <textarea name="message" required></textarea><br>
    <input type="submit">
</form>
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
</body>
</html>