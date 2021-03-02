<?php
$nome= addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$mensagem= addslashes($_POST['mensagem']);


$to="palomaarce456franciele@gmail.com";
$subject ="CONTATO SITE";
$body= "Nome: " . $nome . " \n".
            "Email". $email . "\n".
            "Mensagem: " . $mensagem;
$header = "From: palomaarce456franciele@gmail.com" . "\r\n" . 
            "X=Mailer:PHP/". phpversion();

if(mail($to, $subject, $body, $header)
){
    echo "Email enviado com sucesso";
} else{
    echo "Houve um erro";
}
?>
