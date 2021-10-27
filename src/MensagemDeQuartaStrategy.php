<?php

namespace Strategy;

use Strategy\Dia;
use Strategy\Mensagem;

class MensagemDeQuartaStrategy implements MensagemDoDiaStrategy
{
    public function geraMensagem(Dia $dia): Mensagem
    {
        $mensagem = new Mensagem();
        $mensagem->texto = $dia->nomeDia . ' Não temos reunião hoje';
        return $mensagem;
    }
}
