<?php

namespace toc\Jobs;

use toc\User;
use toc\Colecao;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use toc\Notifications\updateColecao;

class SendNotificationColecao implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;

    protected $colecao;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user, $colecao)
    {
        $this->user = $user;

        $this->colecao = $colecao;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {   
        $this->user->notify(new updateColecao([
            'id' => $this->colecao->id,
            'message' => sprintf('A coleção %s foi atualizada', $this->colecao->nome)
        ]));

        // Luan, qual a finalidade de Verificacao?
        // $ver = new Verificacao();
        // $ver->id_colecao = $request->id;
        // $ver->nome = $request->nome;
        // $ver->descricao = $request->descricao;
        // $ver->mediapag = $request->mediapag;
        // $ver->numedicoes = $request->numedicoes;
        // $ver->autor = $request->autor;
        // $ver->categoria = $request->categoria;
        // $ver->editora = $request->editora;
        // $ver->isbn = $request->isbn;
        // $ver->usuario = $request->usuario;
        // $ver->imagem = $request->file("foto")->store("colecao");
        // $ver->save();
    
    }
}
