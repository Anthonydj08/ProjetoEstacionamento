<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'inicio';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['inicio'] = "inicio/index";

$route['criarpessoa'] = "pessoa/criar";
$route['PessoaListar'] = "pessoa/todos";
$route['pessoaCriar']['post'] = "pessoa/inserir";
$route['pessoaExcluir/(:any)']['delete'] = "Pessoa/excluir/$1";
$route['pessoaEditar/(:any)'] = "Pessoa/editar/$1";
$route['pessoaAtualizar/(:any)']['put'] = "Pessoa/atualizar/$1";

$route['criarveiculo'] = "veiculo/criar";
$route['VeiculoListar'] = "veiculo/todos";
$route['veiculoCriar']['post'] = "veiculo/inserir";
$route['veiculoExcluir/(:any)']['delete'] = "Veiculo/excluir/$1";
$route['veiculoEditar/(:any)'] = "Veiculo/editar/$1";
$route['veiculoAtualizar/(:any)']['put'] = "Veiculo/atualizar/$1";

$route['criarvaga'] = "vaga/criar";
$route['VagaListar'] = "vaga/todos";
$route['vagaCriar']['post'] = "vaga/inserir";
$route['vagaExcluir/(:any)']['delete'] = "Vaga/excluir/$1";
$route['vagaEditar/(:any)'] = "Vaga/editar/$1";
$route['vagaMostrar/(:any)'] = "Vaga/mostrar/$1";
$route['vagaAtualizar/(:any)']['put'] = "Vaga/atualizar/$1";

