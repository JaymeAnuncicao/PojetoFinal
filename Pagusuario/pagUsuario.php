<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Página do Usuário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require '../arquivosRequire/header.php';?>
    <link rel="stylesheet" href="/php/CSS/styleLogin.css">
</head>
<body>
    <?php require '../arquivosRequire/navbar.php';?>
    <div class="container">
        <div class="card-deck geral">
            <div class="cardsUsuario card blue darken-4">
                <a data-toggle="modal" data-target="#modalSolicitar">
                    <div class="card-body pb-5">
                    <h5 class="text-white text-center card-title">Solicitar Serviço</h5>
                    <p class="text-white card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab at deleniti inventore sit aspernatur eaque optio aliquid reprehenderit eum aliquam?</p>
                    </div>
                </a>
            </div>
            <div class="cardsUsuario card blue darken-4">
                <a href="/php/Acompanhamento/acompanhamento.php">
                    <div class="card-body pb-5">
                    <h5 class="text-white text-center card-title">Acompanhar Serviço</h5>
                    <p class="text-white card-text text-justify">Lorem ipsum dolor sit amet consecteturadipisicing elit. Ab at deleniti inventore sit aspernatur eaque optio aliquidreprehenderit eum aliquam?</p>
                    </div>
                </a>
            </div>
            <div class="cardsUsuario card blue darken-4">
                <a data-toggle="modal" data-target="#modalInfo">
                    <div class="card-body pb-5">
                    <h5 class="text-white text-center card-title">Suas informações</h5>
                    <p class="text-white card-text text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab at deleniti inventore sit aspernatur eaque optio aliquid reprehenderit eum aliquam?</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSolicitar" tabindex="-1" role="dialog">
        <div class="container-fluid">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form class="text-center primary-color-dark p-5">
                        <h4 class="modal-title text-white w-100">Solicitar Serviço</h4>
                        <br>
                        <div class="row justify-content-center">
                            <input type="text"  name="nome" class="z-depth-1 col-5 form-control mb-4" placeholder="Marca">
                            <input type="text" name="email" class="z-depth-1 col-5 ml-4 form-control mb-4" placeholder="Modelo">
                        </div> 
                        <div class="row justify-content-center">
                            <input type="text"  name="nome" class="z-depth-1 col-5 form-control mb-4" placeholder="Placa">
                            <input type="text" name="email" class="z-depth-1 col-5 ml-4 form-control mb-4" placeholder="Cor">
                        </div> 
                        <div class="row justify-content-center">
                            <input type="text"  name="nome" class="z-depth-1 col-5 form-control mb-4" placeholder="N° Chassi">
                            <select id="tipo" class="z-depth-1 col-5 ml-4 browser-default custom-select mb-4">
                                <option selected>Problema</option>
                                <option value="1">Alinhamento</option>
                                <option value="2">Troca de Óleo</option>
                                <option value="3">Pintura</option>
                                <option value="4">Troca de Peça</option>
                            </select>
                        </div> 
                        <div class="row justify-content-center">
                            <input type="text"  name="nome" class="z-depth-1 col-5 form-control mb-4" placeholder="Placa">
                            <input type="submit" class="bg-dark border-0 text-white z-depth-1 col-5 ml-4 form-control mb-4" value="Confirmar">
                        </div> 
                        <div class="row justify-content-center">
                            <input type="reset" class="red text-center border-0 text-white z-depth-1 col-11 form-control mb-4" data-toggle="modal" data-target="#modalSolicitar" value="Cancelar">
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalInfo" tabindex="-1" role="dialog">
        <div class="container-fluid">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="blue darken-4 p-4">
                        <h3 class="text-center text-white font-weight-bold">Informações</h3>
                        <h4 class="ml-5 text-white font-weight-bold">Nome:</h4>
                        <h4 class="ml-5 text-white font-weight-bold">Email:</h4>
                        <h4 class="ml-5 text-white font-weight-bold">Telefone:</h4>
                        <div class="container-fluid row justify-content-center">
                            <button class="ml-5 btn rounded btn-danger" data-toggle="modal" data-target="#modalInfo">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require '../arquivosRequire/footer.php';?>
</body>
</html>