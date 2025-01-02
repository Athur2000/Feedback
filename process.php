<?php
    session_start();

    if (!isset($_SESSION['id'])) {
        $_SESSION['id'] = 1;
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['name']) or empty($_POST['email']) or empty($_POST['message'])) {
            echo 'por favor preencha todos os campos';
        } else {
    
            $name = str_replace('#','-', $_POST['name']);
            $email = str_replace('#','-', $_POST['email']);
            $message = str_replace('#','-', $_POST['message']);

            $texto = $_SESSION['id'] . '#' . $name . '#' . $email . '#' . $message . PHP_EOL;

            $arquivo = fopen('registro.txt', 'a');

            fwrite($arquivo, $texto);
            fclose($arquivo);
            $_SESSION['id']++;
        }
    } else {
        echo 'Erro no envio do Feedback, reinicie a pagina e tente novamente';
    }
    header('location: agradecimento.php')
?>