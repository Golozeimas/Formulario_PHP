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
    <label for="nome"> Nome : </label> <input type="text" name="name" required> <span style="color:red;">*</span> <br> <br>
    <label for="email">E-mail:</label> <input type="email" name="email" required> <span style="color:red;">*</span> <br><br>
    <label for="website">Website:</label> <input type="url" name="website" required> <span style="color:red;">*</span> <br> <br>
    <label for="comentario" style="display: block;">Comentário:</label> <textarea name="comentario" cols="30" rows="10"> </textarea> 
    <br> <br>
    <label for="genero">Gênero:</label> <input type="radio" value="Masculino" name="genero">Masculino
                                        <input type="radio" value="Feminino" name="genero">Feminino
                                        <br><br>
                                        <button name="enviado" type="submit">Enviar</button>
    </form>

    <h1> Dados enviados: </h1>
    <?php
    
    if(isset($_POST['enviado'])){
        
        $genero = "não foi selecionado";
        
        if(isset($_POST["genero"])) // se tem algum genero, a variavel genero, muda para ele que foi selecionado
            $genero = $_POST['genero'];

        echo "<p><b>Nome: </b>". $_POST['name'] . "</p>";
        echo "<p><b>E-mail: </b>". $_POST['email'] . "</p>";
        echo "<p><b>Website: </b>". $_POST['website'] . "</p>";
        echo "<p><b>Comentario: </b>". $_POST['comentario'] . "</p>";
        echo "<p><b>Gênero: </b>". $genero . "</p>";
    }
    ?>
</body>
</html>