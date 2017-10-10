<?php

/**
 * script de inicialização
 * @author - wellington félix
 * @link   - wafsoftwares@gmail.com
 */

# definindo configurações para exibição de erros
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

# importando script com as rotas do servidor
require 'routes/servidor.php';

# importando script com as rotas dos diretórios dentro do diretório pai app/
require 'routes/aplicacao.php';

require 'routes/templates.php';

require 'config/database/configuracoes.php';

require 'database/conexao.php';
