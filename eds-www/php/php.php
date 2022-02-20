<?php
   
    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $celular = $_GET["celular"];
    $mensagem = $_GET["mensagem"];
    $produto = $_GET["produto"];

    echo $nome;
    echo $email;
    echo $celular;
    echo $mensagem;
    echo $produto;
    
    $pdo = new PDO('mysql:host=localhost;dbname=ifood;charset=utf8', 'root', '');

    $stmt = $pdo->prepare("INSERT INTO cadastro (nome, email, celular, mensagem, produto)
    VALUES (?, ?, ?, ?, ?);");
    $stmt->bindParam(1, $nome);
    $stmt->bindParam(2, $email);
    $stmt->bindParam(3, $celular);
    $stmt->bindParam(4, $mensagem);
    $stmt->bindParam(5, $produto);
    $stmt->execute();

echo "Mensagem enviada c/ sucesso!"
?>

