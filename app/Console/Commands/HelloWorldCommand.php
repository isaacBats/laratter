<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class HelloWorldCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hello:world {argumento1 : Esto sera devuelto por pantalla} {--algo : No tiene uso aun.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Este es nuestro Hola Mundo de artisan!.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $valor = $this->argument('argumento1');
        $this->line("Me enviaste el argumento: {$valor}");
        $this->info('Esto es un mensage de info');
        // true si quieren que mande el mensage de error
        // importamte para automatizacion mandar un numero diferente de cero 
        // para comunicar que el comando fallo 
        if(false) {
            $this->error('Esto es un mensage de error');
            return 1;
        }


    }
}
