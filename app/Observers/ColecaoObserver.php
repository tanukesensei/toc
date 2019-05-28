<?php

namespace toc\Observers;

use toc\Colecao;
use toc\UsuarioColecao;
use toc\Usuario;
use toc\Jobs\SendNotificationColecao;

class ColecaoObserver
{
    protected $id = null;

    protected $users = [];

    // Mudar depois de finalizado, está 1 apenas para testes.
    const NUMERO_USUARIO_NOTIFICAR = 1;

    public function created(Colecao $colecao)
    {
        
    }

    public function updated(Colecao $colecao)
    {
        $this->id = $colecao->id;

        if($this->countUserInCollection() >= self::NUMERO_USUARIO_NOTIFICAR) {

            $this->getUserToNotify();

            foreach ($this->users as $user) {
                dispatch(new SendNotificationColecao($user, $colecao));
            }
        }
    }

    /**
     * How users have this collection
     *
     * @return int
     */
    public function countUserInCollection()
    {
        return UsuarioColecao::whereIdColecao($this->id)->count();
    }

    /**
     * Return a array with all users to send notifications
     *
     * @return Array
     */
    public function getUserToNotify()
    {
        $this->users = UsuarioColecao::whereIdColecao($this->id)
            ->first()
            ->usuarios;
    }
}