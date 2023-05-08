<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo</title>
</head>
<body>
    <form action="/Modelo/save" method="post" >
    <legend>Cadastro de Modelo</legend>
    <input type="hidden" value="<?= $model->id ?>" name="id"/>
        <label for="nome" class="form-label">Nome:</label>
        <input style="text-transform:uppercase" type="text" id="nome" name="nome">
    <button type="submit" class="btn btn-primary">Enviar</button>
</body>
</html>