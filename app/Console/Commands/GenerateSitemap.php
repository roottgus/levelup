<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Genera un sitemap.xml estático para las rutas principales';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $sitemap = Sitemap::create();

        // Agrega aquí todas las rutas de tu one‑page
        $routes = [
            '/',
            '/quienes-somos',
            '/servicios',
            '/portafolio',
            '/faq',
            '/contacto',
        ];

        foreach ($routes as $route) {
            $sitemap->add(Url::create($route));
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generado correctamente en public/sitemap.xml');

        return 0;
    }
}
