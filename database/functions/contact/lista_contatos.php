<?php

function retornaContatos($db)
{
  $query =
    "SELECT
      id,
      DATE_FORMAT(data, '%d-%m-%Y') AS data,
      horario,
      nome,
      email,
      comentario
    FROM contatos";

  if ($resultado = $db->query($query)) {

    $contatos = array();

    while ($registro = $resultado->fetch_array(MYSQLI_ASSOC)) {

      $contatos[] = array(
        'id'         => $registro['id'],
        'data'       => $registro['data'],
        'horario'    => $registro['horario'],
        'nome'       => ucwords($registro['nome']),
        'email'      => strtolower($registro['email']),
        'comentario' => ucwords($registro['comentario'])
      );

    }

  }

  return $contatos;

}

function deletaContato($db, $id)
{
  $query =
    "DELETE FROM contatos WHERE id = '$id'";

  $resultado = mysqli_query($db, $query);

  if ($resultado) {

    return true;

  }

  return false;
}
