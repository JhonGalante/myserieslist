<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>My Series List</title>

    <style>
        body{
            padding-bottom: 50px;
        }
        /*
        footer{
            position:relative;
            bottom: 0;
            left: 0;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            border:1px solid white;
        }
        */
    </style>

</head>

<body class="bg-dark text-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">

        <?php echo anchor('series', 'MySeriesList', 'class="navbar-brand"') ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <?php echo anchor('series/novaSerie', 'Adicionar', 'class="nav-link"')?>
                </li>
                <li class="nav-item">
                <?php echo anchor('series/sair', 'Sair', 'class="nav-link"')?>
                </li>
            </ul>
        </div>

    </nav>