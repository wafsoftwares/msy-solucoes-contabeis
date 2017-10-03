<?php

/**
 * script de rotas dos diretórios dentro do diretório pai app/
 * @author - wellington félix
 * @link   - wafsoftwares@gmail.com
 */

# definindo constante com a rota do diretório helpers/
if (! defined('DIRETORIO_HELPERS'))
  define('DIRETORIO_HELPERS', ABS_PATH . 'app/helpers/');

# definindo constante com a rota do diretório models/
if (! defined('DIRETORIO_MODELS'))
  define('DIRETORIO_MODELS', ABS_PATH . 'app/models/');

# definindo constante com a rota do diretório modules/
if (! defined('DIRETORIO_MODULES'))
  define('DIRETORIO_MODULES', ABS_PATH . 'app/modules/');

# definindo constante com a rota do diretório requests/
if (! defined('DIRETORIO_REQUESTS'))
  define('DIRETORIO_REQUESTS', ABS_PATH . 'app/requests/');

if (! defined('DIRETORIO_FUNCTIONS'))
  define('DIRETORIO_FUNCTIONS', ABS_PATH . 'database/functions/');
