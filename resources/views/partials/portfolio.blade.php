{{-- resources/views/partials/portfolio.blade.php --}}

<section id="portfolio" x-data="{ filter: 'all' }" class="relative py-20 bg-gradient-to-b from-light to-white overflow-hidden">
  {{-- SVG Wave Divider --}}
  <div class="absolute inset-x-0 -top-12">
    <svg viewBox="0 0 1440 120" class="w-full h-32 fill-current text-white">
      <path d="M0,32L48,42.7C96,53,192,75,288,74.7C384,75,480,53,576,53.3C672,53,768,75,864,90.7C960,107,1056,117,1152,117.3C1248,117,1344,107,1392,101.3L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"/>
    </svg>
  </div>

  <div class="max-w-screen-xl mx-auto px-6">
    {{-- Heading --}}
    <h2 class="section-title reveal-fade">
  <i class="fas fa-briefcase text-primary icon-hover mr-2"></i>
  Nuestro <span class="text-secondary">Portafolio</span>
</h2>

    <p class="text-center text-medium mb-12 reveal-fade" style="animation-delay:200ms">
      Una colección de proyectos en desarrollo web, sistemas y branding.
    </p>

    {{-- Category Filters --}}
    <div class="flex flex-wrap justify-center mb-12 gap-4 reveal-from-left">
      @php 
        $cats = [
          'all'       => 'Todos',
          'web'       => 'Web',
          'admin'     => 'Admin',
          'ecommerce' => 'E‑Commerce',
          'graphic'   => 'Gráfico',
        ];
      @endphp
      @foreach($cats as $key => $label)
        <button
          @click="filter='{{ $key }}'"
          :class="filter==='{{ $key }}'
            ? 'border-2 border-primary bg-primary/10 text-primary'
            : 'border border-medium text-medium hover:border-primary hover:text-primary'"
          class="px-5 py-2 rounded-full font-semibold transition shadow-sm focus:outline-none focus:ring-2 focus:ring-primary/50 bg-white/50"
        >{{ $label }}</button>
      @endforeach
    </div>

    @php
      $projects = [
        ['title'=>'JPerfumeria.com','cat'=>'web','img'=>'screenjp.jpg'],
        ['title'=>'Sistema Administrativo','cat'=>'admin','img'=>'screengc.jpg'],
        ['title'=>'DF Ferretería (Créditos)','cat'=>'ecommerce','img'=>'screendf.jpg'],
        ['title'=>'D&J Distribuciones','cat'=>'admin','img'=>'screenmargarita.jpg'],
        ['title'=>'Rifas “Mi Querencia”','cat'=>'web','img'=>'screenrifas.jpg'],
      ];
      $catColors = [
        'web'       => 'primary',
        'admin'     => 'secondary',
        'ecommerce' => 'primary',
        'graphic'   => 'secondary',
      ];
    @endphp

    {{-- Project Cards Grid --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
      @foreach($projects as $p)
        @php $c = $catColors[$p['cat']] ?? 'primary'; @endphp
        <div
          x-show="filter==='all' || filter==='{{ $p['cat'] }}'"
          class="relative overflow-hidden rounded-xl shadow-lg group border-t-4 border-{{ $c }} reveal-from-right"
          style="animation-delay: {{ $loop->index * 100 }}ms"
        >
          {{-- Image --}}
          <img
            src="{{ asset('images/screen/'.$p['img']) }}"
            alt="{{ $p['title'] }}"
            class="w-full aspect-[4/5] object-cover transition-transform duration-500 group-hover:scale-105"
          />

          {{-- Dark overlay on hover --}}
          <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-opacity duration-300"></div>

          {{-- Info Box --}}
          <div class="absolute bottom-0 left-0 w-full px-4 py-3 bg-{{ $c }}/20 backdrop-blur-sm">
            <h3 class="text-base font-heading font-semibold text-{{ $c }}">{{ $p['title'] }}</h3>
            <span class="text-sm font-body text-secondary">{{ ucfirst($p['cat']) }}</span>
          </div>

          {{-- Glow effect --}}
          <div class="pointer-events-none absolute inset-0 opacity-0 group-hover:opacity-30 transition-opacity duration-300"
               style="box-shadow: 0 0 20px rgba(var(--color-{{ $c }}), 0.5); mix-blend-mode: screen;">
          </div>
        </div>
      @endforeach
    </div>

  </div>
  {{-- Skew Separator --}}
<div class="transform -skew-y-3 bg-white h-8 mt-16"></div>

{{-- sección Socios & Alianzas con SVG onda y degradado reforzado --}}
<section id="partners" class="relative">
  {{-- Onda SVG superior --}}
  <svg class="absolute top-0 left-0 w-full" viewBox="0 0 1440 100" preserveAspectRatio="none">
    <path fill="#F3F4F6" d="M0,0 C400,100 800,0 1440,100 L1440,0 L0,0 Z" />
  </svg>

  {{-- Contenedor con degradado más marcado y padding extra --}}
  <div class="bg-gradient-to-br from-primary/20 to-secondary/20 pt-24 pb-24">
    <div class="max-w-screen-xl mx-auto px-6 flex flex-col lg:flex-row items-center lg:items-start gap-12">
      
      {{-- Izquierda: título + texto --}}
      <div class="lg:w-1/3 text-center lg:text-left">
      <h2 class="section-title reveal-fade">
  <i class="fas fa-handshake text-primary icon-hover mr-2"></i>
  Socios &amp; <span class="text-secondary">Alianzas</span>
</h2>

        
      </div>
      
      {{-- Derecha: slider de logos --}}
      <div class="lg:w-2/3 relative overflow-hidden">
        {{-- Máscaras laterales --}}
        <div class="absolute inset-y-0 left-0 w-12 bg-gradient-to-r from-white to-transparent pointer-events-none"></div>
        <div class="absolute inset-y-0 right-0 w-12 bg-gradient-to-l from-white to-transparent pointer-events-none"></div>

        {{-- Marquee --}}
        <div class="marquee flex space-x-8 py-4">
          @php
            $logos = [
              'logogroumix.png',
              'logodonconcho.png',
              'logojperfumes.png',
              'logotodofarma.png',
              'logofarmavilma.png',
              'logopr.png',
              'logocc.png',
              'logomp.png',
              'logown.png',
            ];
            $slides = array_merge($logos, $logos);
          @endphp

          @foreach($slides as $logo)
            <div class="flex-shrink-0 w-32 h-16 flex items-center justify-center bg-white rounded-lg shadow-sm
                        transform transition hover:scale-110 hover:shadow-md">
              <img
                src="{{ asset('images/logos/' . $logo) }}"
                alt="Logo {{ pathinfo($logo, PATHINFO_FILENAME) }}"
                class="max-h-12 object-contain"
              />
            </div>
          @endforeach
        </div>
      </div>

    </div>
  </div>
</section>

{{-- CSS del marquee y hover iconos --}}
<style>
  @keyframes marquee {
    0%   { transform: translateX(0); }
    100% { transform: translateX(-50%); }
  }
  .marquee {
    display: inline-flex;
    width: calc(200% + 2rem);
    animation: marquee 15s linear infinite;
  }
</style>

</section>
