<?php

namespace Strategy;

use Strategy\Dia;
use Strategy\Mensagem;

class MensagemDaTercaStrategy implements MensagemDoDiaStrategy
{
    public function geraMensagem(Dia $dia): Mensagem
    {
        $mensagem = new Mensagem();
        $mensagem->texto = $dia->nomeDia . 'Hoje tem planejamento estratégico às 11h';
        return $mensagem;
    }
}
