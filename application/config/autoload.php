<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array(
    'database',
    'session',
    'form_validation',
    'lib_view',
    'lib_mng',
    'lib_auth',
);

$autoload['drivers'] = array();

$autoload['helper'] = array(
    'url',
    'form',
    'html',
    'form_validation',
    '',
    '',
);

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array(
    'mdl_set',
    'crud',
);
