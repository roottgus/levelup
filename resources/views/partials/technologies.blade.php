<section id="technologies" class="py-12 bg-white">
  <div class="max-w-5xl mx-auto px-4 text-center">

    {{-- Título giratorio --}}
    <h3 class="section-title mb-8 inline-flex items-center justify-center">
      <i class="fas fa-tools text-primary mr-2 animate-spin-slow"></i>
      Nuestras <span class="text-secondary">Tecnologías</span>
    </h3>

    <p class="text-base text-dark/70 leading-relaxed mb-8 reveal-fade delay-200">
      Utilizamos las herramientas y frameworks más robustos del mercado para garantizar soluciones eficientes y escalables.
    </p>

    <div class="grid grid-cols-3 sm:grid-cols-5 md:grid-cols-6 gap-6 items-center justify-items-center">
      @php
        $techs = ['php','laravel','mysql','react','vite','node'];
      @endphp

      @foreach($techs as $i => $tech)
        <div
          class="flex items-center justify-center"
          style="animation-delay: {{ $i * 0.3 }}s;"
        >
          <img
            src="{{ asset("images/tech/{$tech}.svg") }}"
            alt="{{ ucfirst($tech) }}"
            class="h-24
                   animate-float
                   transform
                   transition
                   hover:scale-110
                   hover:animate-pulse-slow"
          />
        </div>
      @endforeach
    </div>
  </div>
</section>
