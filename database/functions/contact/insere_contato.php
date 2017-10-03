<?php

function insereDadosDoContato($arr, $db)
{
  $query =
    "INSERT INTO contatos
      VALUES
        ('',
        '{$arr['data']}',
        '{$arr['horario']}',
        '{$arr['nome']}',
        '{$arr['email']}',
        '{$arr['comentario']}')";

  $resultado = $db->query($query);

  if ($resultado) {
    $db->close();
  }

  header('Location: ' . BASE_URL . 'public/views/index.php');
}
