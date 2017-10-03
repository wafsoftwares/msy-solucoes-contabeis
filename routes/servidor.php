<?php

/**
 * script de rotas do servidor web
 * @author - wellington félix
 * @link   - wafsoftwares@gmail.com
 */

# definindo constante com a rota absoluta da aplicação
if (! defined('ABS_PATH'))
  define('ABS_PATH', dirname(__DIR__. '../') . '/');

# definindo constante com a rota do diretório raíz da aplicação no servidor
if (! defined('URL_BASE'))
  define('BASE_URL', '/msy/');
