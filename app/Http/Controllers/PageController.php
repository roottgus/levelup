<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class PageController extends Controller
{
    public function home(Request $request)
    {
        $localeSet = session()->has('locale');
        $reveal    = $request->query('reveal') == 1;

        // Si no hay idioma en sesión o no tenemos reveal=1, mostramos SOLO el splash
        if (! $localeSet || ! $reveal) {
            return view('splash');
        }

        // Configuración de SEO para la home real
        SEOMeta::setTitle('LevelUp+ Digital Agency — Inicio')
               ->setDescription('Potencia tu presencia digital: diseño web, gestión de redes sociales y branding profesional.')
               ->addKeyword(['agencia digital', 'diseño web', 'social media', 'levelup', 'marketing digital']);

        OpenGraph::setTitle('LevelUp+ Digital Agency — Inicio')
                 ->setUrl(route('home'))
                 ->addImage(asset('images/og-home.jpg'));

        TwitterCard::setTitle('LevelUp+ Digital Agency — Inicio')
                    ->setDescription('Impulsa tu marca con nuestro equipo de expertos digitales')
                    ->setSite('@LevelUpAgency');

        // Testimonios ficticios
       $testimonios = [
    [
        'nombre'  => 'María Torres',
        'empresa' => 'Tienda Smart',
        // Apunta a messages.php en lugar de a un archivo nuevo
        'mensaje' => 'messages.maria_mensaje',
        'foto'    => asset('images/testimonios/maria.png'),
    ],
    [
        'nombre'  => 'Carlos Jiménez',
        'empresa' => 'Digital Ocean',
        'mensaje' => 'messages.carlos_mensaje',
        'foto'    => asset('images/testimonios/carlos.png'),
    ],
    [
        'nombre'  => 'Ana López',
        'empresa' => 'EmprendeYA',
        'mensaje' => 'messages.ana_mensaje',
        'foto'    => asset('images/testimonios/ana.png'),
    ],
];


        // Pasamos también el flag a home.blade.php
        return view('home', compact('testimonios'));
    }

    public function quienes()
    {
        SEOMeta::setTitle('Quiénes Somos · LevelUp+ Digital Agency')
               ->setDescription('Conoce al equipo creativo, innovador y profesional de LevelUp+ Digital Agency.')
               ->addKeyword(['equipo levelup', 'sobre nosotros', 'agencia digital', 'team']);

        OpenGraph::setTitle('Quiénes Somos · LevelUp+ Digital Agency')
                 ->setUrl(route('quienes'))
                 ->addImage(asset('images/og-about.jpg'));

        TwitterCard::setTitle('Quiénes Somos · LevelUp+ Digital Agency');

        return view('quienes');
    }

    public function servicios()
    {
        SEOMeta::setTitle('Servicios · LevelUp+ Digital Agency')
               ->setDescription('Descubre nuestros servicios: diseño web, gestión de redes sociales, branding y marketing digital.')
               ->addKeyword(['servicios levelup', 'diseño web', 'social media management', 'branding', 'marketing digital']);

        OpenGraph::setTitle('Servicios · LevelUp+ Digital Agency')
                 ->setUrl(route('servicios'))
                 ->addImage(asset('images/og-services.jpg'));

        TwitterCard::setTitle('Servicios · LevelUp+ Digital Agency');

        return view('servicios');
    }

    public function portafolio()
    {
        SEOMeta::setTitle('Portafolio · LevelUp+ Digital Agency')
               ->setDescription('Conoce nuestros casos de éxito y proyectos destacados en diseño digital y marketing.')
               ->addKeyword(['portafolio levelup', 'casos de éxito', 'proyectos', 'clientes']);

        OpenGraph::setTitle('Portafolio · LevelUp+ Digital Agency')
                 ->setUrl(route('portafolio'))
                 ->addImage(asset('images/og-portfolio.jpg'));

        TwitterCard::setTitle('Portafolio · LevelUp+ Digital Agency');

        return view('portafolio');
    }

    public function faq()
    {
        SEOMeta::setTitle('FAQ · LevelUp+ Digital Agency')
               ->setDescription('Resuelve tus dudas frecuentes sobre nuestros servicios digitales, diseño web y social media.')
               ->addKeyword(['faq levelup', 'preguntas frecuentes', 'dudas', 'servicios digitales']);

        OpenGraph::setTitle('FAQ · LevelUp+ Digital Agency')
                 ->setUrl(route('faq'))
                 ->addImage(asset('images/og-faq.jpg'));

        TwitterCard::setTitle('FAQ · LevelUp+ Digital Agency');

        return view('faq');
    }

    public function contactoForm()
    {
        SEOMeta::setTitle('Contacto · LevelUp+ Digital Agency')
               ->setDescription('¿Listo para impulsar tu marca? Contáctanos para cotizar tu proyecto digital.')
               ->addKeyword(['contacto levelup', 'cotización', 'agencia digital', 'asesoría']);

        OpenGraph::setTitle('Contacto · LevelUp+ Digital Agency')
                 ->setUrl(route('contacto'))
                 ->addImage(asset('images/og-contact.jpg'));

        TwitterCard::setTitle('Contacto · LevelUp+ Digital Agency');

        return view('contacto');
    }
}
