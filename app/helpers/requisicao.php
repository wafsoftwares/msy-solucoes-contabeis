<?php

function recuperaDadosDoContato($arr, $metodo)
{
  if ($metodo == 'POST') {
    foreach ($_POST as $chave => $valor) {
      $arr['nome']       = strtolower($valor['nome']);
      $arr['email']      = strtolower($valor['email']);
      $arr['comentario'] = strtolower($valor['comentario']);
    }

    $arr['data']    = date('Y-m-d');
    $arr['horario'] = date('H:i:s');
  }

  return $arr;
}
