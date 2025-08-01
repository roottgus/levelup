{{-- resources/views/partials/hero.blade.php --}}
<section id="hero" class="relative min-h-[92vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-[#1e3a8a] via-[#23283c] to-[#2291FF]">
  {{-- Imagen de fondo difuminada y oscura --}}
  <div class="absolute inset-0">
    <div class="w-full h-full bg-cover bg-center scale-110 blur-sm brightness-75 transition-all duration-700"
         style="background-image:url('{{ asset('images/tecladofondo.png') }}')"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-[#1e3a8a]/50 to-[#2291FF]/40"></div>
  </div>

  {{-- Contenido principal --}}
  <div class="relative z-10 container mx-auto px-6 py-10 text-center flex flex-col items-center animate-fade-in">
    <h1 class="text-white text-4xl sm:text-5xl md:text-6xl font-heading font-extrabold leading-tight drop-shadow-2xl mb-5 splash-title">
      <span class="block">{{ __('messages.hero_title_line1') }}</span>
      <span class="block hero-gradient-text animate-gradient-move">
        {{ __('messages.hero_title_line2') }}
      </span>
    </h1>
    <p class="text-light text-lg sm:text-2xl font-medium max-w-2xl mx-auto mb-8 splash-subtitle">
      {{ __('messages.hero_subtitle') }}
    </p>

    {{-- Call to Action buttons --}}
    <div class="flex flex-col sm:flex-row justify-center gap-4 splash-button">
      <a href="#contact" class="px-8 py-4 bg-blue-600 hover:bg-blue-800 text-white text-lg font-bold rounded-full shadow-lg transition-all duration-300">
        {{ __('messages.cta_agenda') }}
      </a>
      <a href="#portfolio" class="px-8 py-4 bg-white/10 border-2 border-white hover:border-blue-600 hover:bg-blue-600 hover:text-white text-white text-lg font-bold rounded-full shadow-lg transition-all duration-300">
        {{ __('messages.cta_portfolio') }}
      </a>
    </div>

    {{-- Trust indicator --}}
    <div class="mt-8 flex flex-col items-center gap-2">
      <span class="flex items-center justify-center gap-2 text-light text-base opacity-80 bg-black/30 px-4 py-2 rounded-full shadow animate-fade-in">
        <i class="fas fa-thumbs-up text-secondary text-xl"></i>
  {!! __('messages.hero_trust') !!}
</span>
    </div>
  </div>

  {{-- Scroll Down Indicator --}}
  <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20">
    <a href="#about" class="group flex flex-col items-center animate-float" aria-label="Bajar">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9 text-white group-hover:text-blue-500 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
      </svg>
      <span class="text-xs text-light mt-1">{{ __('messages.hero_scroll') }}</span>
    </a>
  </div>
  <div class="absolute bottom-0 inset-x-0 h-28 bg-gradient-to-b from-transparent to-white pointer-events-none"></div>
</section>
