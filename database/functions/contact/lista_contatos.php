<?php

function retornaContatos($db)
{
  $query =
    "SELECT
      data,
      nome,
      email,
      comentario
    FROM contatos";

  if ($resultado = $db->query($query)) {

    $contatos = array();

    while ($registro = $resultado->fetch_array(MYSQLI_ASSOC)) {

      $contatos[] = array(
        'data'       => $registro['data'],
        'nome'       => $registro['nome'],
        'email'      => $registro['email'],
        'comentario' => $registro['comentario']
      );

    }

  }

  return $contatos;

}
