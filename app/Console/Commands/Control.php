<?php

namespace App\Console\Commands;

use App\Models\Controles;
use Illuminate\Console\Command;

class Control extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'control:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Control inicial';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $control = $this->crearControl();

        $this->line('Control Generado Satisfactoriamente');

        //relacionarlo
        $this->info('Proceso concluido con exito');
    }

    public function crearControl()
    {

        return Controles::create(
            [

                'doc_id' => 1,
                'user_id' => 1,
                'etiqueta' => 'UIOEM0001',
                'imagen' => '/img/escalera.png',
                'qr' => 'UIOEM0001',
                'fecha' => '2021-07-05',
                'denominacion' => 'ET',
                'ciudad' => 'Quito',
                'colaborador' => 'Sarahi Dueñas',
                'observaciones' => 'Escalera Telescopica en mal estado',
                'tipoControl' => 'Solicitud de Reposición del bien',

            ]
        );
    }
}
