{{-- resources/views/partials/about.blade.php --}}
<section id="about" class="relative overflow-hidden py-16 bg-white">
  {{-- Decoraciones de fondo --}}
  <div class="absolute -top-16 -left-16 w-64 h-64 bg-secondary opacity-10 rounded-full"></div>
  <div class="absolute -bottom-16 -right-16 w-80 h-80 bg-primary opacity-10 rounded-full"></div>

  {{-- División diagonal suave --}}
  <div class="absolute inset-0 pointer-events-none">
    <div class="h-full w-1/2 bg-white opacity-15 clip-path-diagonal-right"></div>
  </div>

  {{-- Contenedor principal ampliado a max-w-7xl --}}
  <div class="relative max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
    {{-- TEXTO --}}
    <div class="space-y-6 reveal-from-left">
      <p class="text-sm text-secondary uppercase tracking-widest flex items-center reveal-fade">
        <span class="inline-block w-2 h-2 bg-secondary rounded-full mr-2"></span>
        Sobre Nosotros
      </p>

      <h2 class="text-4xl md:text-5xl font-heading text-gray-900 font-bold leading-tight reveal-from-left">
        Tu socio digital de <span class="text-primary">confianza</span>
      </h2>

      <p class="text-lg text-gray-600 max-w-prose reveal-fade">
        En <strong>PublienRed</strong> combinamos creatividad y tecnología para impulsar tu marca.
        Nuestro equipo de desarrolladores, diseñadores y estrategas trabaja de la mano contigo
        para ofrecer soluciones a medida que realmente marquen la diferencia.
      </p>

      {{-- TARJETAS SIMPLES: icono + título, hover muestra descripción --}}
      <div class="flex flex-wrap justify-center items-start gap-6">
        @php
          $features = [
            ['icon'=>'fas fa-award','title'=>'Experiencia','desc'=>'Más de 10 años impulsando marcas'],
            ['icon'=>'fas fa-users','title'=>'Equipo','desc'=>'Programadores & Diseñadores'],
            ['icon'=>'fas fa-lightbulb','title'=>'Innovación','desc'=>'Soluciones de vanguardia'],
            ['icon'=>'fas fa-headset','title'=>'Soporte','desc'=>'Atención 24/7 a tu proyecto'],
          ];
        @endphp

        @foreach($features as $feat)
          <div
            class="relative group bg-white rounded-2xl overflow-hidden h-40 px-16 py-4
                   flex items-center justify-center reveal-from-left"
          >
            {{-- Contenido inicial: icono + título --}}
            <div class="absolute inset-0 flex flex-col items-center justify-center
              transition-opacity duration-300 opacity-100 group-hover:opacity-0
              z-0"
>
              <i class="{{ $feat['icon'] }} text-secondary text-3xl mb-2"></i>
              <h3 class="text-lg font-heading font-semibold text-gray-900">
                {{ $feat['title'] }}
              </h3>
            </div>

            {{-- Contenido hover: descripción sobre fondo especial --}}
            <div class="absolute inset-0 bg-primary bg-opacity-95 flex items-center justify-center p-4 text-center
              transition-opacity duration-300 opacity-0 group-hover:opacity-100
              z-10"
>
              <p class="text-white text-lg font-body">{{ $feat['desc'] }}</p>
            </div>
          </div>
        @endforeach
      </div>

      <a
        href="#services"
        class="inline-block mt-8 bg-secondary text-white font-body px-8 py-3 rounded-full
               hover:bg-red-600 transition shadow-lg reveal-fade"
      >
        Conoce nuestros Servicios
      </a>
    </div>

    {{-- ILUSTRACIÓN DINÁMICA --}}
    <div class="flex justify-center lg:justify-end reveal-from-right">
      <div class="relative group w-full max-w-lg">
        <div class="absolute inset-0 transform rotate-6 bg-gradient-to-br from-secondary to-primary rounded-3xl shadow-2xl"></div>
        <img
          src="{{ asset('images/aboutus1.png') }}"
          alt="Equipo PublienRed"
          class="relative rounded-3xl shadow-xl object-cover w-full h-auto
                 transform -rotate-3 transition duration-500 group-hover:scale-105"
        />
        <div class="absolute top-0 right-0 w-16 h-16 bg-secondary opacity-50 rounded-full transform translate-x-1/2 -translate-y-1/2 transition-opacity duration-500 group-hover:opacity-30"></div>
        <div class="absolute bottom-0 left-0 w-24 h-24 bg-primary opacity-50 rounded-full transform -translate-x-1/2 translate-y-1/2 transition-opacity duration-500 group-hover:opacity-30"></div>
      </div>
    </div>
  </div>
</section>
