<?php

namespace Strategy;

use Strategy\Dia;
use Strategy\Mensagem;

class MensagemDaSegundaStrategy implements MensagemDoDiaStrategy
{
    public function geraMensagem(Dia $dia): Mensagem
    {
        $mensagem = new Mensagem();
        $mensagem->texto = $dia->nomeDia . ' Hoje tem reunião às 10:00';
        return $mensagem;
    }
}
