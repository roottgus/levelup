<section id="portfolio" x-data="{ filter: 'all' }" class="relative py-24 bg-gradient-to-b from-light via-white to-primary/10 overflow-hidden">
  {{-- SVG Wave Divider Superior --}}
  <div class="absolute inset-x-0 -top-16 pointer-events-none select-none z-0">
    <svg viewBox="0 0 1440 120" class="w-full h-32" fill="currentColor" aria-hidden="true">
      <path d="M0,32L48,42.7C96,53,192,75,288,74.7C384,75,480,53,576,53.3C672,53,768,75,864,90.7C960,107,1056,117,1152,117.3C1248,117,1344,107,1392,101.3L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"/>
    </svg>
  </div>

  <div class="relative max-w-7xl mx-auto px-6 z-10">
    {{-- Heading Pro --}}
    <header class="flex flex-col items-center mb-16 animate-fadeInUp">
      <span class="inline-flex items-center">
        <svg class="mr-3 w-8 h-8 text-primary icon-hover animate-pop" viewBox="0 0 28 28" fill="none">
          <circle cx="14" cy="14" r="12" stroke="currentColor" stroke-width="3" opacity="0.13"/>
          <path d="M10 18l4-8 4 8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <h2 class="section-title text-3xl md:text-4xl font-extrabold tracking-tight bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent drop-shadow-lg">
          {!! __('messages.portfolio_title') !!}
        </h2>
      </span>
      <p class="text-center text-lg mt-4 text-dark/70 max-w-2xl animate-fadeInUp delay-150">
        {!! __('messages.portfolio_subtitle') !!}
      </p>
    </header>

    {{-- Filtros --}}
    <div class="flex flex-wrap justify-center mb-14 gap-4 animate-fadeInUp delay-200">
      @php 
        $cats = [
          'all'       => __('messages.portfolio_cat_all'),
          'web'       => __('messages.portfolio_cat_web'),
          'admin'     => __('messages.portfolio_cat_admin'),
          'ecommerce' => __('messages.portfolio_cat_ecommerce'),
          'graphic'   => __('messages.portfolio_cat_graphic'),
        ];
      @endphp
      @foreach($cats as $key => $label)
        <button
          @click="filter='{{ $key }}'"
          :class="filter==='{{ $key }}'
            ? 'border-2 border-primary bg-primary/10 text-primary shadow-md scale-105'
            : 'border border-medium text-medium hover:border-primary hover:text-primary hover:bg-primary/5'"
          class="px-6 py-2.5 rounded-full font-semibold transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-primary/30 bg-white/50 backdrop-blur-md"
        >{{ $label }}</button>
      @endforeach
    </div>

    @php
      $projects = [
        ['title'=>__('messages.project_jperfumeria'), 'cat'=>'web', 'img'=>'screenjp.jpg'],
        ['title'=>__('messages.project_adminsys'), 'cat'=>'admin', 'img'=>'screengc.jpg'],
        ['title'=>__('messages.project_df'), 'cat'=>'ecommerce', 'img'=>'screendf.jpg'],
        ['title'=>__('messages.project_dj'), 'cat'=>'admin', 'img'=>'screenmargarita.jpg'],
        ['title'=>__('messages.project_rifas'), 'cat'=>'web', 'img'=>'screenrifas.jpg'],
      ];
      $catColors = [
        'web'       => 'primary',
        'admin'     => 'secondary',
        'ecommerce' => 'primary',
        'graphic'   => 'secondary',
      ];
    @endphp

    {{-- Grid Portafolio --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-7">
      @foreach($projects as $p)
        @php $c = $catColors[$p['cat']] ?? 'primary'; @endphp
        <div
          x-show="filter==='all' || filter==='{{ $p['cat'] }}'"
          x-transition:enter="animate-fadeInUp"
          class="portfolio-card group relative overflow-hidden rounded-3xl shadow-xl border-t-4 border-{{ $c }} bg-white/60 backdrop-blur-lg transition-all duration-300 hover:scale-[1.04] hover:shadow-2xl focus-within:ring-2 focus-within:ring-{{ $c }} cursor-pointer"
          tabindex="0"
        >
          {{-- Imagen --}}
          <img
            src="{{ asset('images/screen/'.$p['img']) }}"
            alt="{{ $p['title'] }}"
            class="w-full aspect-[4/5] object-cover transition-transform duration-500 group-hover:scale-105 group-focus:scale-105"
            loading="lazy"
            draggable="false"
          />
          {{-- Overlay oscuro --}}
          <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 group-focus:bg-black/15 transition-all duration-300 pointer-events-none"></div>
          {{-- Glow animado --}}
          <div class="pointer-events-none absolute inset-0 opacity-0 group-hover:opacity-20 transition-opacity duration-500" style="box-shadow:0 0 48px 12px var(--tw-shadow-color);mix-blend-mode:screen;"></div>
          {{-- Info Box --}}
          <div class="absolute bottom-0 left-0 w-full px-5 py-4 bg-{{ $c }}/25 backdrop-blur-sm">
            <h3 class="text-lg font-bold text-{{ $c }} drop-shadow-sm">{{ $p['title'] }}</h3>
            <span class="text-xs font-medium text-secondary/80">{{ ucfirst($p['cat']) }}</span>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  {{-- SVG Skew Separator Inferior --}}
  <div class="relative h-10 mt-20 pointer-events-none select-none z-0">
    <div class="absolute w-full h-full bg-white transform -skew-y-3"></div>
  </div>

  {{-- Socios & Alianzas --}}
  <section id="partners" class="relative z-20">
    <svg class="absolute top-0 left-0 w-full pointer-events-none" viewBox="0 0 1440 100" preserveAspectRatio="none" aria-hidden="true">
      <path fill="#F3F4F6" d="M0,0 C400,100 800,0 1440,100 L1440,0 L0,0 Z" />
    </svg>
    <div class="bg-gradient-to-br from-primary/15 via-secondary/15 to-white pt-24 pb-20">
      <div class="max-w-7xl mx-auto px-6 flex flex-col lg:flex-row items-center lg:items-stretch gap-12">
        <div class="lg:w-1/3 flex flex-col justify-center items-center lg:items-start text-center lg:text-left mb-8 lg:mb-0">
          <h2 class="text-3xl md:text-4xl font-extrabold mb-2 flex items-center justify-center lg:justify-start">
            <svg class="w-8 h-8 mr-3 text-primary icon-hover animate-pop" viewBox="0 0 30 30" fill="none">
              <circle cx="15" cy="15" r="12" stroke="currentColor" stroke-width="2.5" opacity="0.12"/>
              <path d="M10 16l3 3 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>
              <span class="text-dark font-black tracking-wider">{{ __('messages.partners_title1') }}</span>
              <span class="mx-1">&amp;</span>
              <span class="bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent font-black tracking-wider">{{ __('messages.partners_title2') }}</span>
              <span class="inline-block align-middle w-8 h-1 ml-2 rounded bg-gradient-to-r from-primary/40 to-secondary/50"></span>
            </span>
          </h2>
          <p class="text-base text-dark/70 mt-2">{{ __('messages.partners_subtitle') }}</p>
        </div>
        <div class="lg:w-2/3 flex flex-col justify-center">
          <div class="relative overflow-hidden">
            <div class="absolute inset-y-0 left-0 w-10 bg-gradient-to-r from-white to-transparent pointer-events-none z-10"></div>
            <div class="absolute inset-y-0 right-0 w-10 bg-gradient-to-l from-white to-transparent pointer-events-none z-10"></div>
            <div class="marquee-pro flex gap-10 py-2 items-center">
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
                <div class="flex-shrink-0 w-36 h-16 flex items-center justify-center bg-white/90 rounded-xl shadow-md backdrop-blur-md transition-all duration-300 hover:scale-110 hover:shadow-xl hover:bg-primary/10 group cursor-pointer">
                  <img
                    src="{{ asset('images/logos/' . $logo) }}"
                    alt="Logo {{ pathinfo($logo, PATHINFO_FILENAME) }}"
                    class="max-h-10 w-auto object-contain pointer-events-none"
                    draggable="false"
                  />
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    <style>
      .marquee-pro {
        display: inline-flex;
        width: calc(200% + 2rem);
        animation: marquee-pro 16s linear infinite;
        will-change: transform;
      }
      @keyframes marquee-pro {
        0%   { transform: translateX(0);}
        100% { transform: translateX(-50%);}
      }
      @media (max-width: 1023px) {
        #partners .lg\:w-1\/3, #partners .lg\:w-2\/3 {
          width: 100% !important;
        }
        #partners .flex-col.lg\:flex-row {
          flex-direction: column !important;
        }
      }
    </style>
  </section>
</section>
