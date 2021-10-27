<?php

namespace Strategy;

use Strategy\Dia;
use Strategy\Mensagem;
use Strategy\MensagemDoDiaStrategy;

class GeradorDeMensagem
{
    private MensagemDoDiaStrategy $mensagemDoDiaStrategy;

    public function setDia(MensagemDoDiaStrategy $mensagemDoDiaStrategy)
    {
        $this->mensagemDoDiaStrategy = $mensagemDoDiaStrategy;
    }

    public function escolheDia(Dia $dia): Mensagem
    {
        $retorno = $this->mensagemDoDiaStrategy->geraMensagem($dia);
        return $retorno;
    }
}
