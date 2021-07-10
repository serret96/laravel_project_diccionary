<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Mail\Mailer;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendReminderEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;
//      declaerem la variable que generem al controllador
    protected $msg;

    /**
     * Create a new job instance.
     *
     * @return void
     */
//    li seleccionem les dades
    public function __construct($msg)
    {
        $this->msg = $msg;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
//    un cop s'inicia el supervisord els missatge s'enviaran automaticament
    public function handle()
    {
//      Aqui donem les dades a les quals sera enviat el missatge
//        Primerament el correu i tot seguit una capçalera/titol
//          L'ltim element es tracta el que obtenim en la funcio sendmail
        mail('rubenserret@iesmontsia.org',
            'EbreDIC',
            "$this->msg", "Contacta");
    }
}
