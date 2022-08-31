<?php

    if(isset($_POST['submit']))
    {
        //print_r('Nome: ' . $_POST['nome']);
        //print_r('<br>');
        //print_r('Email: ' . $_POST['email']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email) VALUES($nome,$email)");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/fonts.css">
    <link rel="stylesheet" href="./styles/media.css">
    <link rel="stylesheet" href="./js/fuctionValidarEmail.js">
    <title>Iotech Soluções em Tecnologia</title>
</head>
<body>
    <header>
        <div id="title">
            <h1>Iotech Soluções</h1>
            <h1>Em Tecnologia</h1>
        </div>

        <ul>
            <a href="#"><li>Início</li></a>
            <a href="#"><li>Serviços</li></a>
            <a href="#"><li>Sobre</li></a>
            <a href="#"><li>Contato</li></a>
            <a href="#" id="inscreva-se-btn"><li>Já tem uma conta?</li></a>
        </ul>
    </header>

    <main>
        <aside>
            <h2><span>Inscreva-se agora</span></h2>
            <h2>Na Newslatter</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.         
            </p>
            <form action="index.php" method="POST">
                <input type="text" name="nome" id="nome" placeholder="Nome">
                <input type="email" name="email" id="email" placeholder="E-mail">
                <input type="submit" name="submit" id="submit" value="Enviar >">
            </form>
        </aside>

        <article>
            <img src="./components/images/image1.png" alt="girl-blue">
        </article>

    </main>
</body>
</html>