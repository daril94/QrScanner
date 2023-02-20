<?php

namespace App\Console\Commands;

//use App\Models\Documentos;

use App\Models\Docs;
use Illuminate\Support\Facades\Hash;

use Illuminate\Console\Command;

class Documentos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'documentos:install';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Datos temporables de los documentos';

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
        $documentos = $this->crearDocumentos();
        $documentos2 = $this->crearDocumentos2();
        $this->line('Documento Generado Satisfactoriamente');

        //relacionarlo
        $this->info('Proceso concluido con exito');
    }

    public function crearDocumentos()
    {

        return Docs::create(
            [

                'pedido' => 1,
                'numerodoc' => 1234,
                'asignadoa' => 'Fernando García Robles',
                'aprobadopor' => 'Sarahi Dueñas',
                'ciudad' => 'QUITO',
                'herramienta' => 'Escalera',
                'tipo' => 'Telescopica',
                'bodega' => 'UIODC1B',
                'articulo' => '10-12-18',
                'etiqueta' => 'UIOEM001',
                'descripcion' => 'Escalera Telescopica',
                'ubicacion' => 'UIO',
                'modelo' => 'FA1235',
                'fecha' => '2018-07-05'

            ]
        );
    }
    public function crearDocumentos2()
    {

        return Docs::create(
            [

                'pedido' => 2,
                'numerodoc' => 1235,
                'asignadoa' => 'Martín Aguilera Pozo',
                'aprobadopor' => 'Fabricio Martinez',
                'ciudad' => 'QUITO',
                'herramienta' => 'Escalera',
                'tipo' => 'de Extension',
                'bodega' => 'UIODC1A',
                'articulo' => '10-16-18',
                'etiqueta' => 'UIOEM002',
                'descripcion' => 'Escalera de Extension',
                'ubicacion' => 'UIO',
                'modelo' => 'R1565',
                'fecha' => '2019-11-15'

            ]
        );
    }
}
