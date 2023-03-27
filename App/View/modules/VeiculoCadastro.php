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
        <input type="hidden" value="<?= $model->id ?>" name="idVeiculo"/>

        <label>Marca</label>
        <select name="Marca" id="Marca">
            <?php foreach($model->lista_marca as $Marca):?>
                <option value="<?= $Marca->id?>"><?= $Marca->Nome?></option>
            <?php endforeach?>
        </select>

        <label>Modelo</label>
        <select name="Modelo" id="Modelo">
            <?php foreach($model->lista_modelo as $Modelo):?>
                <option value="<?= $Modelo->id?>"><?= $Modelo->Nome?></option>
            <?php endforeach?>
        </select>
        <br>
        <br>
        <label>Tipo</label>
        <select name="Tipo" id="Tipo">
            <?php foreach($model->lista_tipo as $Tipo):?>
                <option value="<?= $Tipo->id?>"><?= $Tipo->Nome?></option>
            <?php endforeach?>
        </select>

        <label>Fabricante</label>
        <select name="Fabricante" id="Fabricante">
            <?php foreach($model->lista_fabricante as $Fabricante):?>
                <option value="<?= $Fabricante->id?>"><?= $Fabricante->Nome?></option>
            <?php endforeach?>
        </select>
        <br>
        <br>
        <label>Combustivel</label>
        <select name="Combustivel" id="Combustivel">
            <?php foreach($model->lista_combustivel as $Combustivel):?>
                <option value="<?= $Combustivel->id?>"><?= $Combustivel->Nome?></option>
            <?php endforeach?>
        </select> 
        <label for=" Ano" class="form-label">Ano:</label>
        <input type="text" class="form-control" id="Ano" name="Ano">
        <br>
        <br>
        <label for="Cor" class="form-label">Cor:</label>
        <input type="text" id="Cor" name="Cor">

        <label for="Chassi" class="form-label">Chassi:</label>
        <input type="text" id="Chassi" name="Chassi">
        <br>
        <br>
        <label for="Km" class="form-label">Km:</label>
        <input type="text" id="Km" name="Km">
        <br>
        <br>
        <input type="checkbox" id="Revisao" name="Revisao" >
        <label for="Revisao">Revisao</label>
        <br>
        <input type="checkbox" id="Sinistro" name="Sinistro" >
        <label for="Sinistro">Sinistro</label>
        <br>
        <input type="checkbox" id="RouboFurto" name="RouboFurto" >
        <label for="RouboFurto">Roubo/Furto</label>
        <br>
        <input type="checkbox" id="Aluguel" name="Aluguel" >
        <label for="Aluguel">Aluguel</label>
        <br>
        <input type="checkbox" id="Venda" name="Venda" >
        <label for="Venda">Venda</label>
        <br>
        <input type="checkbox" id="Particular" name="Particular" >
        <label for="Particular">Particular</label>
        <br>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>
</html>