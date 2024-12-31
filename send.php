<?php
// Destinataire
$to = "fniroxy8@gmail.com";

// Sujet de l'e-mail
$subject = "Sujet de l'e-mail";

// Message
$message = "
<html>
<head>
    <title>Sujet de l'e-mail</title>
</head>
<body>
    <h1>Bonjour !</h1>
    <p>Ceci est un e-mail envoyé sans bibliothèque externe.</p>
</body>
</html>
";

// Pour envoyer un e-mail au format HTML, configurez les en-têtes
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Ajoutez un expéditeur
$headers .= "From: wallacepalace6@gmail.com" . "\r\n";

// Envoi de l'e-mail
if (mail($to, $subject, $message, $headers)) {
    echo "E-mail envoyé avec succès.";
} else {
    echo "Erreur lors de l'envoi de l'e-mail.";
}
?>
