<?php

namespace App\Console\Commands;

use App\Models\Rol;
use App\Models\Usuario;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Instalador extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Instalador inicial de usuarios del proyecto QR SCanner';

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

        if (!$this->verificar()) {
            $rol = $this->crearRolSuperAdmin();

            $usuario = $this->crearUsuarioSuperAdmin();

            $bodega = $this->crearUsuarioBodega();
            $control = $this->crearUsuarioControl();
            $observador = $this->crearUsuarioObservador();
            $monitor= $this->crearUsuarioMonitor();
            $usuario->roles()->attach($rol);
            $this->line('El Rol y el Usuario se instalaron correctamente');

              //relacionarlo
            $this->info('Usuarios creado satisfactoriamente');
        } else {
            $this->error('Ya existe un superAdmin');
        }
    }

    private function verificar()
    {

        return Rol::find(1);
        //return false;
        //return $rol->isEmpty();
    }

    private function crearRolSuperAdmin()
    {
        $rol = "Super Administrador";
        return Rol::create([

            'nombre' => $rol,
            'slug' => Str::slug($rol, '_')

        ]);
    }

    private function crearUsuarioSuperAdmin()
    {
        return Usuario::create([

            'usuario' => 'Super Admin',
            'password' => Hash::make('pass1234'),
            'nombre' => 'Fabricio Martinez',
            'email' => 'gmartinez@telconet.ec',
            'area' => 'SSA',
            'rol' => 'administrador',
            'estado' => 1

        ]);
    }

    private function crearUsuarioControl()
    {
        return Usuario::create([

            'usuario' => 'Control',
            'password' => Hash::make('pass1234'),
            'nombre' => 'Elias Serrano Maldonado ',
            'email' => 'control@telconet.ec',
            'area' => 'Fiscalización',
            'rol' => 'control',
            'estado' => 1

        ]);
    }
    private function crearUsuarioBodega()
    {
        return Usuario::create([

            'usuario' => 'Bodega UIO',
            'password' => Hash::make('pass1234'),
            'nombre' => 'Julio Solis Córtez',
            'email' => 'bodega@telconet.ec',
            'area' => 'Bodega',
            'rol' => 'bodega',
            'estado' => 1

        ]);
    }
    private function crearUsuarioObservador()
    {
        return Usuario::create([

            'usuario' => 'Observador',
            'password' => Hash::make('pass1234'),
            'nombre' => 'Miguel Córtez Puentes',
            'email' => 'observador@telconet.ec',
            'area' => 'Cuadrilla',
            'rol' => 'observador',
            'estado' => 1

        ]);
    }

    private function crearUsuarioMonitor()
    {
        return Usuario::create([

            'usuario' => 'Monitor',
            'password' => Hash::make('pass1234'),
            'nombre' => 'César Parra Muñoz',
            'email' => 'monitor@telconet.ec',
            'area' => 'Fiscalización',
            'rol' => 'monitor',
            'estado' => 1

        ]);
    }
}
