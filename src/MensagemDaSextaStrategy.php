<?php

namespace Strategy;

use Strategy\Dia;
use Strategy\Mensagem;

class MensagemDaSextaStrategy implements MensagemDoDiaStrategy
{
    public function geraMensagem(Dia $dia): Mensagem
    {
        $mensagem = new Mensagem();
        $mensagem->texto = $dia->nomeDia . ' Hoje tem happy hour a partir das 18h';
        return $mensagem;
    }
}
