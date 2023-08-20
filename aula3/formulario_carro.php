<?php
require_once "Carro.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Exemplo de Formulário do carro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\styles.css">
</head>
<body>
    <hr class="invisible">
    <hr class="invisible">

    <div class="container">
        <h3>Preencha os Dados</h3>
        <form method="post">
            <div class="form-group">
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" id="marca" name="marca" required>
            </div>
            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="text" class="form-control" id="modelo" name="modelo" required>
            </div>
            <div class="form-group">
                <label for="ano">Ano:</label>
                <input type="date" class="form-control" id="ano" name="ano" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST") {   
            $marca = $_POST['marca'];
            $modelo = $_POST['modelo'];
            $ano = $_POST['ano'];

            $carro = new Carro($marca, $modelo, $ano);
            echo "<h3>Dados Enviados</h3>";
            echo "<p><strong>Marca:</strong> " . $carro->get_marca();
            echo "<p><strong>Modelo:</strong> " . $carro->get_modelo();
            echo "<p><strong>Ano:</strong> " . $carro->get_ano();

        }
        
        ?>
</div>
</body>
</html>