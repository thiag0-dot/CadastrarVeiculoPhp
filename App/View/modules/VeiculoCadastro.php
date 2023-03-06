<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro veiculo</title>
</head>
<body>
    <form action="/Veiculo/save" method="post" >
        <legend>Cadastro de veiculos</legend>
        <input type="hidden" value="<?= $model->id ?>" name="id"/>

        <label>Marca</label>
        <select name="Marca" id="Marca">
            <?php foreach($model->lista_marca as $Marca):?>
                <option value="<?= $Marca->id?>"><?= $Marca->Nome?></option>
            <?php endforeach?>
        </select>
    </form>
</body>
</html>