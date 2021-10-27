<?php

require 'vendor/autoload.php';

use Strategy\Dia;
use Strategy\GeradorDeMensagem;
use Strategy\MensagemDaQuintaStrategy;

$geradorDeMensagem = new GeradorDeMensagem();
// $geradorDeMensagem->setDia(new MensagemDaSegundaStrategy()); //RotaStrategy
// $geradorDeMensagem->setDia(new MensagemDaTercaStrategy()); //RotaStrategy
// $geradorDeMensagem->setDia(new MensagemDeQuartaStrategy()); //RotaStrategy
$geradorDeMensagem->setDia(new MensagemDaQuintaStrategy()); //RotaStrategy
// $geradorDeMensagem->setDia(new MensagemDaSextaStrategy()); //RotaStrategy
// $geradorDeMensagem->setDia(new MensagemDoSabadoStrategy()); //RotaStrategy
// $geradorDeMensagem->setDia(new MensagemDoDomingoStrategy()); //RotaStrategy

$quinta = new Dia('quinta');
$mensagem = $geradorDeMensagem->escolheDia($quinta);
echo $mensagem->texto;
