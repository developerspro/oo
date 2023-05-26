<?php 

include_once 'Cliente.php';
include_once 'ClienteVip.php';

$cliente = new Cliente('Pato Donald');
$clientevip = new ClienteVip('Tio Patinhas');

$clientevip->somaPontos(1000);
$clientevip->mostraDados();
$clientevip->expiraPontos(2000);
$clientevip->mostraDados();