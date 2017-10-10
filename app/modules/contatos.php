<?php

require DIRETORIO_FUNCTIONS . 'contact/lista_contatos.php';

function consultaContatos()
{
  $conexao = abre_conexao();

  $contatos = retornaContatos($conexao);

  $_SESSION['contatos'] = $contatos;
}
