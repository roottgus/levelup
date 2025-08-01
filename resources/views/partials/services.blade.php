<section id="services" class="relative py-28 md:py-32 bg-gradient-to-b from-white to-light overflow-hidden">
  {{-- Onda decorativa superior --}}
  <div class="absolute inset-x-0 top-0 -mt-24 pointer-events-none z-0 select-none">
    <svg viewBox="0 0 1440 80" class="w-full h-32" preserveAspectRatio="none" aria-hidden="true">
      <path fill="#E4EFFF" d="M0,80 C480,0 960,160 1440,80 L1440,0 L0,0 Z"/>
    </svg>
  </div>

  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">
    {{-- Título con animación pro --}}
    <header class="text-center mb-16 animate-fadeInUp">
      <h2 class="inline-block text-4xl md:text-5xl font-extrabold tracking-tight bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent drop-shadow-xl">
        {!! __('messages.services_title') !!}
      </h2>
      <p class="mt-5 text-lg md:text-xl text-dark/70 max-w-xl mx-auto font-medium animate-fadeInUp delay-150">
        {!! __('messages.services_subtitle') !!}
      </p>
    </header>

    {{-- Grid PRO de servicios --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
      @php
        $services = [
          [
            'icon' => 'fa-code',
            'color' => 'primary',
            'title' => __('messages.service_web_title'),
            'desc'  => __('messages.service_web_desc'),
          ],
          [
            'icon' => 'fa-bullhorn',
            'color' => 'secondary',
            'title' => __('messages.service_marketing_title'),
            'desc'  => __('messages.service_marketing_desc'),
          ],
          [
            'icon' => 'fa-palette',
            'color' => 'green-600',
            'title' => __('messages.service_design_title'),
            'desc'  => __('messages.service_design_desc'),
          ],
          [
            'icon' => 'fa-chart-line',
            'color' => 'yellow-500',
            'title' => __('messages.service_seo_title'),
            'desc'  => __('messages.service_seo_desc'),
          ]
        ];
      @endphp

      @foreach($services as $service)
      <article class="group service-card-pro relative overflow-hidden rounded-3xl shadow-2xl hover:shadow-3xl bg-white/60 backdrop-blur-lg border border-primary/10 hover:border-primary/40 transition-all duration-300">
        {{-- Fondo glass y spot animado --}}
        <div class="absolute inset-0 z-0 pointer-events-none">
          <span class="absolute left-1/2 top-0 w-48 h-48 rounded-full bg-{{ $service['color'] }}/10 blur-2xl opacity-0 group-hover:opacity-70 group-hover:scale-110 transition-all duration-500 -translate-x-1/2 -translate-y-1/2"></span>
        </div>
        <div class="relative flex flex-col items-center text-center px-8 pt-10 pb-8 h-full z-10">
          {{-- Icono animado --}}
          <span class="flex items-center justify-center rounded-full mb-5 w-16 h-16 bg-{{ $service['color'] }}/20 group-hover:bg-gradient-to-br group-hover:from-{{ $service['color'] }} group-hover:to-white/90 shadow-xl transition-all duration-500 ring-4 ring-white/40 ring-inset animate-pop">
            <i class="fas {{ $service['icon'] }} text-{{ $service['color'] }} text-3xl md:text-4xl group-hover:text-white transition-colors duration-300"></i>
          </span>
          <h3 class="text-2xl font-extrabold tracking-tight mb-1 mt-0 text-{{ $service['color'] }} drop-shadow-sm group-hover:underline underline-offset-4 decoration-wavy decoration-2 transition-all">
            {{ $service['title'] }}
          </h3>
          <p class="text-base text-dark/80 mt-2 font-medium animate-fadeInUp delay-150">
            {{ $service['desc'] }}
          </p>
        </div>
      </article>
      @endforeach
    </div>
  </div>

  {{-- Onda inferior --}}
  <div class="absolute inset-x-0 bottom-0 -mb-20 pointer-events-none z-0 select-none">
    <svg viewBox="0 0 1440 80" class="w-full h-24" preserveAspectRatio="none" aria-hidden="true">
      <path fill="#E4EFFF" d="M0,80 C480,0 960,160 1440,80 L1440,0 L0,0 Z"/>
    </svg>
  </div>
</section>
