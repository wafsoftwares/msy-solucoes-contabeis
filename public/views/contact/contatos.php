<?php require '../../../init.php'; ?>
<?php require DIRETORIO_MODULES . 'contatos.php'; ?>

<?php

  consultaContatos();

  $contatos = $_SESSION['contatos'];
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- meta informações -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- meta informações -->

    <title>Listando Contatos</title>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- bootstrap -->

    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
    <!-- font awesome -->

    <!-- normalize css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>libs/normalize/css/normalize.css">
    <!-- normalize css -->

    <!-- css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/contatos.css">
    <!-- css -->
  </head>
  <body>
    <!-- container -->
    <div class="container">
      <!-- cabeçalho -->
      <header class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a href="relatorio_consulta_ajuste.php" class="navbar-brand">Relatório de Conteúdo Postado de Goleiro - Ranking Avanção</a>
              </div> <!-- cabeçalho -->
            </div> <!-- container -->
          </nav> <!-- navegação -->
        </div> <!-- coluna -->
      </header> <!-- linha -->
      <!-- cabeçalho -->

      <!-- conteúdo -->
      <main>
        <div class="row">
          <div class="col-md-12">
            <table border="1" class="tabela table table-striped table-bordered table-hover">
              <caption>Registros do Banco de Dados</caption>
              <thead>
                <tr>
                  <th class="text-center">Data</th>
                  <th class="text-center">Nome</th>
                  <th class="text-center">E-mail</th>
                  <th class="text-center">Comentário</th>
                </tr>
              </thead>

              <tbody>
                <?php foreach($contatos as $contato) : ?>
                  <tr>
                    <td class="text-center"><?php echo $contato['data']; ?></td>
                    <td class="text-center"><?php echo $contato['nome']; ?></td>
                    <td class="text-center"><?php echo $contato['email']; ?></td>
                    <td class="text-center"><?php echo $contato['comentario']; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div> <!-- coluna -->
        </div> <!-- linha -->
      </main>
      <!-- conteúdo -->
    </div> <!-- container -->
    <!-- container -->

    <br><br>

    <!-- botão -->
    <div class="row">
      <div class="col-md-7 text-right">
        <a class="btn btn-default" href="<?php echo BASE_URL; ?>public/views/admin/app.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Página Anterior</a>
      </div>
    </div>
    <!-- botão -->

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- jquery -->

    <!-- bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- bootstrap -->
  </body>
</html>
