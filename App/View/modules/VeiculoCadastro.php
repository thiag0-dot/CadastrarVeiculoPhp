<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>cadastro veiculo</title>
    <style>
        <?php require('Cadastro.css') ?>
    </style>
</head>
<body>
    <div id="form">
        <form action="/Veiculo/save" method="post" >
            <legend>    Cadastro de veiculos</legend>
            <input type="hidden" value="<?= $model->id ?>" name="idVeiculo"/>

            <div class="col-md-12">
                <label>Marca</label>
                <select name="Marca" id="Marca" class="form-select">
                    <?php foreach($model->lista_marca as $Marca):?>
                    <option value="<?= $Marca->idMarca?>"><?= $Marca->Nome?></option>
                    <?php endforeach?>
                </select>
                
                <label>Modelo</label>
                <select name="Modelo" id="Modelo" class="form-select">
                <?php foreach($model->lista_modelo as $Modelo):?>
                        <option value="<?= $Modelo->idModelo?>"><?= $Modelo->Nome?></option>
                    <?php endforeach?>
                </select>
                <br>
                <label>Tipo</label>
                <select name="Tipo" id="Tipo" class="form-select">
                    <?php foreach($model->lista_tipo as $Tipo):?>
                        <option value="<?= $Tipo->idTipo?>"><?= $Tipo->Nome?></option>
                    <?php endforeach?>
                </select>
                <br>
                <label>Fabricante</label>
                <select name="Fabricante" id="Fabricante" class="form-select">
                    <?php foreach($model->lista_fabricante as $Fabricante):?>
                        <option value="<?= $Fabricante->idFabricante?>"><?= $Fabricante->Nome?></option>
                    <?php endforeach?>
                </select>
                <br>
                <label>Combustivel</label>
                <select name="Combustivel" id="Combustivel" class="form-select">
                    <?php foreach($model->lista_combustivel as $Combustivel):?>
                        <option value="<?= $Combustivel->idCombustivel?>"><?= $Combustivel->Nome?></option>
                    <?php endforeach?>
                </select> 
            </div>
            <div class="col-md-4">
                <label for=" Ano" class="form-label">Ano:</label>
                <input autocomplete="off" spellcheck="false" min="1886" max="2023" type="Number" id="Ano" name="Ano" class="form-control"> 
                <label for="Cor" class="form-label">Cor:</label>
                <input style="text-transform:uppercase" type="text" id="Cor" name="Cor" class="form-control">
                <br>
                <label for="Chassi" class="form-label">Chassi:</label>
                <input type="text" id="Chassi" name="Chassi" class="form-control">
                <label for="Km" class="form-label">Km:</label>
                <input type="text" id="Km" name="Km" class="form-control">
                <br>
            </div>
            <div class="col-12">
                <div class="form-check">
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
                </div>
            </div>
            <div class="d-grid gap-2 col-1 mx-auto">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>