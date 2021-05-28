<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $data["titulo"];  ?></title>
</head>

<body>
    <h2><?php echo $data["titulo"];  ?></h2>
    <br>

    <a href="#">agregar</a>

    <table border="1">
        <thead>
            <tr>
                <th>placa</th>
                <th>marca</th>
                <th>modelo</th>
                <th>año</th>
                <th>color</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($data["vehiculos"] as $item) {
            ?>
                <tr>
                    <td><?=$item["placa"]; ?></td>
                    <td><?=$item["marca"]; ?></td>
                    <td><?=$item["modelo"]; ?></td>
                    <td><?=$item["anio"]; ?></td>
                    <td><?=$item["color"]; ?></td>

                </tr>

            <?php
            }
            ?>
        </tbody>

    </table>

</body>

</html>