<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaŕio</title>
</head>
<body>
    
    <h1>Formulário com PHP</h1>
    <h3 style="color:red;">*Obrigatório</h3>
    <form action="" method="POST">
    <label for="nome"> Nome : </label> <input type="text" id="name" required> <br> <br>
    <label for="email">E-mail:</label> <input type="text" id="email" required> <br><br>
    <label for="website">Website:</label> <input type="text" id="website" required> <br> <br>
    <label for="comentario" style="display: block;">Comentário:</label> <textarea id="comentario" cols="30" rows="10"> </textarea> 
    <br> <br>
    <label for="genero">Gênero:</label> <input type="radio" value="Masculino" name="genero">Masculino
                                        <input type="radio" value="Feminino" name="genero">Feminino
                                        <br><br>
                                        <button id="enviado" type="submit">Enviar</button>
    </form>

    <h1> Dados enviados: </h1>
    <?php
    if(isset($_POST['enviado'])){
        echo "<p><b>Nome: </b>". $_POST['nome'] . "</p>";
        echo "<p><b>E-mail: </b>". $_POST['email'] . "</p>";
        echo "<p><b>Website: </b>". $_POST['website'] . "</p>";
        echo "<p><b>Comentario: </b>". $_POST['comentario'] . "</p>";
        echo "<p><b>Gênero: </b>". $_POST['genero'] . "</p>";
    }
    ?>
</body>
</html>