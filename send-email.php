<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = htmlspecialchars($_POST['name']);
    $mail = htmlspecialchars($_POST['email']);
    
    $message = htmlspecialchars($_POST['message']);

    $to = "middleeastahmed9@gmail.com"; // Remplacez par votre adresse e-mail
    $subject = "Nouveau message de contact";
    $body = "name: $prenom\nAdresse email: $mail\n\nmessage:\n$message";
    $headers = "From: $mail";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès!";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
    
    header('Location: contact.php');
    exit();
}
?>