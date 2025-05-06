<div
  id="splash"
  class="fixed inset-0 h-screen w-screen z-[9999] flex items-center justify-center overflow-hidden"
>
  {{-- Fondo degradado --}}
  <div class="animated-gradient absolute inset-0 z-[-10] pointer-events-none"></div>

  {{-- Círculo de iconos y contenido al frente --}}
  <div class="relative z-20 flex flex-col items-center justify-center text-center px-8">
    {{-- Anillo de iconos --}}
    <div class="icon-circle relative mb-6">
      @php
        $icons = ['fa-js', 'fa-html5', 'fa-css3-alt', 'fa-laravel', 'fa-react', 'fa-node'];
      @endphp
      <ul class="icon-list relative w-60 h-60">
        @foreach($icons as $i => $icon)
          <li class="absolute icon-item" style="--i: {{ $i }}; --n: {{ count($icons) }};">
            <i class="fab {{ $icon }}"></i>
          </li>
        @endforeach
        <div class="absolute inset-0 flex items-center justify-center">
          <img src="{{ asset('images/logo.png') }}"
               alt="PublienRed"
               class="h-48 w-auto mx-auto"/>
        </div>
      </ul>
    </div>

    {{-- Texto y botón debajo del logo --}}
    <h1 class="splash-title text-4xl md:text-5xl font-extrabold text-primary">
      Construimos tu futuro digital
    </h1>

    <p class="splash-subtitle mt-4 text-lg md:text-xl text-gray-200">
      Aplicaciones web, diseño y desarrollo a medida
    </p>
    <p class="splash-subtitle mt-4 text-lg md:text-xl text-gray-200">
    Social Media Marketing
    </p>

    <button id="splash-btn"
            class="splash-button mt-8 px-6 py-3 bg-primary text-white rounded-full font-semibold">
      Comenzar
    </button>
  </div>
</div>
