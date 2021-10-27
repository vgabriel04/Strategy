<?php

namespace Strategy;

use Strategy\Dia;
use Strategy\Mensagem;

interface MensagemDoDiaStrategy
{
    public function geraMensagem(Dia $dia): Mensagem;
}
