<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

#[Signature('app:install-app')]
#[Description('Command description')]
class InstallApp extends Command
{
    // El nombre del comando que usaremos
    protected $signature = 'app:install';

    protected $description = 'Configura el boilerplate automáticamente al clonar';

    public function handle()
    {
        $this->info('🚀 Iniciando instalación del Boilerplate...');

        // 1. Copiar .env si no existe
        if (! File::exists('.env')) {
            $this->info('📝 Creando archivo .env...');
            File::copy('.env.example', '.env');
            $this->call('key:generate');
        }

        // 2. Ejecutar migraciones
        $this->info('init de Base de datos...');
        $this->call('migrate', ['--force' => true]);

        // 3. Configurar Filament Shield (Roles y Permisos)
        $this->info('🛡️ Generando permisos de Shield...');
        $this->call('shield:generate', ['--all' => true]);

        // 4. Instrucción final
        $this->newLine();
        $this->info('✅ ¡Instalación completada con éxito!');
        $this->warn('Recuerda configurar tus claves de STRIPE en el archivo .env');
        $this->info('Ahora puedes crear tu usuario admin con: php artisan shield:super-admin');
    }
}
