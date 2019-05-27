<?php

namespace toc\Observers;

use toc\Colecao;

class ColecaoObserver
{
    public function created(Colecao $colecao)
    {
        dd('Criando colecao');
    }

    public function updated(Colecao $colecao)
    {
        dd('enter here');
    }
}