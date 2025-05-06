{{-- resources/views/partials/hero.blade.php --}}
<section id="hero" class="relative h-screen flex items-center justify-center overflow-hidden">
  {{-- Background Image as CSS background --}}
  <div class="absolute inset-0 bg-cover bg-center" style="background-image:url('{{ asset('images/tecladofondo.png') }}')"></div>

  {{-- Dark overlay for contrast --}}
  <div class="absolute inset-0 bg-black/50"></div>

  {{-- Hero content --}}
  <div class="relative z-10 container mx-auto px-6 text-center">
    <h1 class="text-white text-4xl sm:text-5xl md:text-6xl font-heading font-bold leading-tight mb-4">
      <span class="block">Impulsa tu negocio</span>
      <span class="block text-secondary">con soluciones digitales únicas</span>
    </h1>
    <p class="text-light text-lg sm:text-xl max-w-2xl mx-auto mb-8">
      Desarrollo web, marketing estratégico y diseño de vanguardia para transformar tu marca en una experiencia inolvidable.
    </p>

    {{-- Call to Action buttons --}}
    <div class="flex flex-col sm:flex-row justify-center gap-4">
      <a href="#contact" class="px-8 py-4 bg-secondary hover:bg-red-600 text-white text-lg font-body rounded-lg shadow-lg transition">
        Contratar Ahora
      </a>
      <a href="#portfolio" class="px-8 py-4 bg-transparent border-2 border-white hover:border-secondary text-white text-lg font-body rounded-lg transition">
        Ver Casos de Éxito
      </a>
    </div>

    {{-- Trust indicator --}}
    <p class="mt-6 text-light text-sm opacity-75">Más de <strong>50+</strong> clientes satisfechos</p>
  </div>

  {{-- Scroll Down Indicator --}}
  <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
    <a href="#about" class="animate-bounce text-white" aria-label="Bajar">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
      </svg>
    </a>
  </div>
  {{-- Fade de transición hacia blanco --}}
  <div class="absolute bottom-0 inset-x-0 h-24 bg-gradient-to-b from-transparent to-white pointer-events-none"></div>
</section>
