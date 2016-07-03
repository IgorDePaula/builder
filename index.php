<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 02/07/16
 * Time: 21:49
 */
require 'vendor/autoload.php';
use App\Peca\Roda,
    App\Peca\Motor,
    App\Peca\Porta;
use App\CarBuilder;

$cb = new CarBuilder();
$cb->addPeca(new Motor());
$cb->addPeca(new Roda());
$cb->addPeca(new Roda());
$cb->addPeca(new Roda());
$cb->addPeca(new Roda());
$cb->addPeca(new Porta());
$cb->addPeca(new Porta());

$cb->construct();

echo $cb->getConstruction();//por ter quebra de linha como '\n', esta só será vista no terminal. No navegador será visto tudo em uma linha só.
echo '<br>';
echo '<br>';

echo "Temos {$cb->getMotor()->count()} motor<br>";
echo "Temos {$cb->getRoda()->count()} roda(s)<br>";
echo "Temos {$cb->getPorta()->count()} porta(s)<br>";