<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [

    'inertia' => env('SEO_TOOLS_INERTIA', false),

    'meta' => [
        'defaults' => [
            // El título por defecto de la web (se usará si no defines uno en tu controlador)
            'title'       => false,
            // Coloca el título de la página después del default: "Página · PublienRed"
            'titleBefore' => false,
            // Descripción global si no la sobreescribes
            'description' => 'PublienRed: Soluciones digitales y marketing para tu negocio',
            // Separador entre título y el title por defecto
            'separator'   => ' – ',
            // Palabras clave por defecto
            'keywords'    => ['desarrollo de software','creación de sitios web','social media marketing','diseño gráfico','publicidad Ads'],
            // Genera <link rel="canonical"> con Url::current()
            'canonical'   => 'current',
            // Control de robots: index y follow
            'robots'      => 'index, follow',
        ],
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],
        'add_notranslate_class' => false,
    ],

    'opengraph' => [
        'defaults' => [
            // No imprimimos titulo/description por defecto: lo generamos en controlador
            'title'       => false,
            'description' => false,
            // Url::current()
            'url'         => null,
            'type'        => 'website',
            // Nombre del sitio en OG
            'site_name'   => 'PublienRed',
            // Imagen por defecto (URL absoluta)
            'images'      => [ config('app.url').'/images/og-image.jpg' ],
        ],
    ],

    'twitter' => [
        'defaults' => [
            // Tipo de tarjeta
            'card' => 'summary_large_image',
            // Si tienes usuario de Twitter, ponlo aquí
            //'site' => '@TuUsuario',
        ],
    ],

    'json-ld' => [
        'defaults' => [
            // Título y descripción se suelen generarse dinámicamente
            'title'       => false,
            'description' => false,
            // Url::current()
            'url'         => null,
            // Tipo de Schema
            'type'        => 'LocalBusiness',
            // Imagen de logo para JSON‑LD
            'images'      => [ config('app.url').'/images/logo.png' ],
        ],
    ],

];
