<?php

namespace Strategy;

use Strategy\Dia;
use Strategy\Mensagem;

class MensagemDoSabadoStrategy implements MensagemDoDiaStrategy
{
    public function geraMensagem(Dia $dia): Mensagem
    {
        $mensagem = new Mensagem();
        $mensagem->texto = $dia->nomeDia . 'Sabado de Semana não tem expediente';
        return $mensagem;
    }
}
