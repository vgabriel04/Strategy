<?php

namespace Strategy;

use Strategy\Dia;
use Strategy\Mensagem;

class MensagemDoDomingoStrategy implements MensagemDoDiaStrategy
{
    public function geraMensagem(Dia $dia): Mensagem
    {
        $mensagem = new Mensagem();
        $mensagem->texto = $dia->nomeDia . ' Domingo não tem expediente';
        return $mensagem;
    }
}
