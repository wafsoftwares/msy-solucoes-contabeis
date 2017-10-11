<?php

require '../../init.php';

require ABS_PATH . 'database/functions/contact/lista_contatos.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

  $id = isset($_GET['id']) ? $_GET['id'] : NULL;

  if (! empty($id)) {

    $conexao = abre_conexao();

    $resultado = deletaContato($conexao, $id);

    if ($resultado) {

      $conexao->close();

      header('Location: ' . BASE_URL . 'public/views/contact/contatos.php');
    }

  }
  
}
