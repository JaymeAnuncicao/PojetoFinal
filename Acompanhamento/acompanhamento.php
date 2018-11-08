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
    <div class="mt-5 float-right btnVoltar btn btn-lg blue darken-4"><i class="fas fa-arrow-left mt-4"></i></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="table-responsive-lg">
                    <table style="margin-top:15vh" class="z-depth-3 table">
                        <thead class="blue darken-4 white-text">
                            <tr class="text-center row">
                                <th class="col-4">Peça Trocada</th>
                                <th class="col-4">Data</th>
                                <th class="col-4">Comentário</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="col-2 ml-auto mr-5">
                <table style="margin-top:15vh" class="table-borderless ml-auto z-depth-3 table">
                    <thead class="black-text">
                        <tr class="text-center">
                            <th class="font-weight-bold">Valor Gasto</th>
                        </tr>
                        <tr>
                            <td class="text-center">
                                123123
                            </td>
                        </tr>
                    </thead>
                    <thead class="black-text">
                        <tr class="text-center">
                            <th class="font-weight-bold">Orçamento</th>
                        </tr>
                        <tr>
                            <td class="text-center">
                                123123
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <?php require '../arquivosRequire/footer.php';?>
</body>
</html>