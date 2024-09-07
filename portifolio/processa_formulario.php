<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Validações básicas para verificar se os campos não estão vazios
    if (!empty($nome) && !empty($email) && !empty($mensagem)) {
        // Defina o e-mail para onde será enviada a mensagem
        $para = "joaocorso8@gmail.com";  
        $assunto = "Novo contato do site";

        // Monta o corpo do e-mail
        $corpo = "Nome: $nome\n";
        $corpo .= "E-mail: $email\n";
        $corpo .= "Mensagem:\n$mensagem";

        // Define os cabeçalhos do e-mail
        $headers = "From: $email";

        // Tenta enviar o e-mail
        if (mail($para, $assunto, $corpo, $headers)) {
            echo "Mensagem enviada com sucesso!";
        } else {
            echo "Erro ao enviar a mensagem. Por favor, tente novamente mais tarde.";
        }
    } else {
        echo "Por favor, preencha todos os campos.";
    }
} else {
    echo "Método de envio inválido.";
}
?>
