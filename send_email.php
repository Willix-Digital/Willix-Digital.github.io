<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = filter_var($_POST['textarea'], FILTER_SANITIZE_SPECIAL_CHARS);

    $to = "votre_email@domaine.com"; // Remplacez par votre adresse email
    $subject = "Nouveau message de contact";
    $body = "Vous avez reçu un nouveau message de contact.\n\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email envoyé avec succès!";
    } else {
        echo "Échec de l'envoi de l'email.";
    }
}
?>
