<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>Document sans titre</title>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
      <meta http-equiv="refresh" content="0; URL=contact.php">
  </head>


  <?php
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $sujet = $_POST['sujet'];
    $objet = $_POST['objet'];
    $msg = $_POST['message'];


    $message = "$nom $email $sujet $msg";

    $to = 'alexis.leleu@hetic.net';
    // $objet = "Test" //Met l'objet que tu veux

    /* En-têtes de l'e-mail */
    $headers = "From: $mail \r\n\r\n";

    /* Envoi de l'e-mail */
    mail($to, $objet, $message, $headers)
