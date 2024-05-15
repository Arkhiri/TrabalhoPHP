<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livros</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>Cadastro de livros</header>
    <div class="container-1">
        <form id="formulario" action="" method="POST">
            <div class="cadastro">
                <table>
                    <tr>
                    <td><label for="titulo">Título:</label></td>
                    <td><input type="text" name="titulo" id="titulo"></td>
                    </tr>
                    <tr>
                        <td><label for="autor">Autor:</label></td>
                        <td><input type="text" name="autor" id="autor"></td>
                    </tr>
                    <tr>
                        <td><label for="preco">Preço:</label></td>
                        <td><input type="number" name="preco" id="preco"></td>
                    </tr>
                    <tr>
                        <td><label for="qntd">Quantidade:</label></td>
                        <td><input type="number" name="qntd" id="qntd"></td>
                    </tr>
                </table>
                <input id="btn" type="submit" value="Submit">
            </div>
        </form>
    </div>

</body>
<script src="script.js"></script>
<?php
include('conexaodb.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['titulo'];
    $autor = $_POST['autor'];
    $preco = $_POST['preco'];
    $qntd = $_POST['qntd'];
    echo "<div class='cadastro'><div> Nome recebido: " . htmlspecialchars($nome) . "</div></div>";
} else {
    echo "Método de requisição inválido.";
}

?>
</html>