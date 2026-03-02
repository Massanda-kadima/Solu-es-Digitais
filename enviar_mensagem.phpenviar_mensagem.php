<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST["name"];
  $email = $_POST["email"];
  $assunto = $_POST["_subject"];
  $mensagem = $_POST["message"];

  // Enviar email
  $destinatario = "adrianomalungana@gmail.com";
  $corpo = "Nome: $nome\nEmail: $email\nAssunto: $assunto\nMensagem: $mensagem";
  $headers = "From: $email";

  if (mail($destinatario, $assunto, $corpo, $headers)) {
    echo "Mensagem enviada com sucesso!";
  } else {
    echo "Erro ao enviar mensagem.";
  }
}
?>