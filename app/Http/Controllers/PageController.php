<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;

class PageController extends Controller
{
    public function home()
    {
        SEOMeta::setTitle('PublienRed — Inicio')
               ->setDescription('Tu socio digital: software, web, marketing y diseño gráfico.')
               ->addKeyword(['desarrollo software','marketing digital','diseño web']);

        OpenGraph::setTitle('PublienRed — Inicio')
                 ->setUrl(route('home'))
                 ->addImage(asset('images/og-home.jpg'));

        TwitterCard::setTitle('PublienRed — Inicio')
                    ->setDescription('Impulsa tu marca con nuestro equipo de expertos')
                    ->setSite('@TuUsuarioTwitter');

        return view('home');
    }

    public function quienes()
    {
        SEOMeta::setTitle('Quiénes Somos · PublienRed')
               ->setDescription('Conoce al equipo de desarrolladores y diseñadores de PublienRed.')
               ->addKeyword(['equipo publienred','sobre nosotros']);

        OpenGraph::setTitle('Quiénes Somos · PublienRed')
                 ->setUrl(route('quienes'))
                 ->addImage(asset('images/og-about.jpg'));

        TwitterCard::setTitle('Quiénes Somos · PublienRed');

        return view('quienes');
    }

    public function servicios()
    {
        SEOMeta::setTitle('Servicios · PublienRed')
               ->setDescription('Descubre nuestros servicios: desarrollo web, software, social media, diseño y Ads.')
               ->addKeyword(['servicios publienred','desarrollo web','social media marketing']);

        OpenGraph::setTitle('Servicios · PublienRed')
                 ->setUrl(route('servicios'))
                 ->addImage(asset('images/og-services.jpg'));

        TwitterCard::setTitle('Servicios · PublienRed');

        return view('servicios');
    }

    public function portafolio()
    {
        SEOMeta::setTitle('Portafolio · PublienRed')
               ->setDescription('Casos de éxito y proyectos destacados de PublienRed.')
               ->addKeyword(['portafolio publienred','casos de éxito']);

        OpenGraph::setTitle('Portafolio · PublienRed')
                 ->setUrl(route('portafolio'))
                 ->addImage(asset('images/og-portfolio.jpg'));

        TwitterCard::setTitle('Portafolio · PublienRed');

        return view('portafolio');
    }

    public function faq()
    {
        SEOMeta::setTitle('FAQ · PublienRed')
               ->setDescription('Preguntas frecuentes sobre nuestros servicios.')
               ->addKeyword(['faq publienred','preguntas frecuentes']);

        OpenGraph::setTitle('FAQ · PublienRed')
                 ->setUrl(route('faq'))
                 ->addImage(asset('images/og-faq.jpg'));

        TwitterCard::setTitle('FAQ · PublienRed');

        return view('faq');
    }

    public function contactoForm()
    {
        SEOMeta::setTitle('Contacto · PublienRed')
               ->setDescription('Ponte en contacto con PublienRed para tu próximo proyecto.')
               ->addKeyword(['contacto publienred','solicitar cotización']);

        OpenGraph::setTitle('Contacto · PublienRed')
                 ->setUrl(route('contacto'))
                 ->addImage(asset('images/og-contact.jpg'));

        TwitterCard::setTitle('Contacto · PublienRed');

        return view('contacto');
    }
}
