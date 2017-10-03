<?php

require '../../init.php';

require DIRETORIO_MODELS    . 'contact/contato.php';
require DIRETORIO_FUNCTIONS . 'contact/insere_contato.php';
require DIRETORIO_HELPERS   . 'requisicao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $contato = criaModeloDeContato();

  $contato = recuperaDadosDoContato($contato, 'POST');

  $conexao = abre_conexao();

  insereDadosDoContato($contato, $conexao);
}
