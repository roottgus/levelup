{{-- resources/views/partials/contact.blade.php --}}
<section id="contact" class="relative py-8 bg-gradient-to-b from-dark via-dark to-medium text-light overflow-hidden">
  {{-- Ondas decorativas --}}
  <div class="absolute inset-0 pointer-events-none">
    <svg class="w-full h-full" preserveAspectRatio="none">
      <defs>
        <linearGradient id="grad-wave" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#0F66AF" stop-opacity="0.2" />
          <stop offset="100%" stop-color="#E5002A" stop-opacity="0.2" />
        </linearGradient>
      </defs>
      <path
        d="M0,120 C200,180 400,60 800,120 L800,0 L0,0 Z"
        fill="url(#grad-wave)"
        class="transform translate-y-20"
      />
    </svg>
  </div>

  <div class="relative z-10 max-w-5xl mx-auto px-4">
    {{-- Alerta de éxito --}}
    @if(session('success'))
      <div class="mb-6 text-center">
        <div class="inline-block bg-green-500 text-light px-4 py-2 rounded">
          {{ session('success') }}
        </div>
      </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
      {{-- IZQUIERDA: subtítulo, título, descripción y tarjetas --}}
      <div class="space-y-4 reveal-from-left">
        <span class="inline-block text-sm text-primary uppercase tracking-wide">
          Ponte en contacto
        </span>
        <h2 class="text-2xl md:text-3xl font-heading font-bold text-light">
          Contáctanos
        </h2>
        <p class="text-sm md:text-base max-w-prose">
          ¿Tienes un proyecto en mente? ¡Cuéntanos! Completa el formulario o utiliza los datos de contacto.
        </p>

        {{-- Tarjetas de info --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
          {{-- Ubicación --}}
          <div class="bg-dark rounded-lg p-4 space-y-2 border-l-4 border-primary hover:bg-primary/10 transition transform hover:-translate-y-1 shadow">
            <i class="fas fa-map-marker-alt text-primary text-2xl"></i>
            <h3 class="font-heading text-base text-light">Ubicación</h3>
            <p class="text-xs text-light/80">Estado Mérida, Venezuela</p>
          </div>
          {{-- Horario --}}
          <div class="bg-dark rounded-lg p-4 space-y-2 border-l-4 border-secondary hover:bg-secondary/10 transition transform hover:-translate-y-1 shadow reveal-from-bottom">
            <i class="far fa-clock text-secondary text-2xl"></i>
            <h3 class="font-heading text-base text-light">Horario</h3>
            <p class="text-xs text-light/80">Lun–Vie: 9 AM – 6 PM<br>Sáb–Dom: Cerrado</p>
          </div>
          {{-- Contacto --}}
          <div class="bg-dark rounded-lg p-4 space-y-2 border-l-4 border-medium hover:bg-medium/10 transition transform hover:-translate-y-1 shadow">
            <i class="fas fa-phone-alt text-light text-2xl"></i>
            <h3 class="font-heading text-base text-light">Teléfono</h3>
            <p class="text-xs text-light/80">
              +58 424 744 7443<br>
              admin@publienred.com
            </p>
          </div>
        </div>
      </div>

      {{-- DERECHA: formulario --}}
      <div class="relative reveal-from-right">
        {{-- Capas decorativas sin capturar clicks --}}
        <div class="absolute -top-6 -left-6 w-56 h-56 bg-secondary opacity-10 rounded-xl transform rotate-6 pointer-events-none"></div>
        <div class="absolute -bottom-6 -right-6 w-56 h-56 bg-primary opacity-10 rounded-xl transform -rotate-6 pointer-events-none"></div>

        {{-- Formulario con z‑index encima --}}
        <div class="bg-dark rounded-xl shadow-lg p-6 relative z-20">
          <h3 class="text-xl font-heading text-secondary mb-1">¿Tienes alguna duda?</h3>
          <h2 class="text-2xl font-bold text-light mb-4">Envíanos un mensaje</h2>

          <form id="contact-form" action="{{ route('contact.send') }}" method="POST" class="space-y-4 text-sm">
            @csrf
            <div id="contact-status" class="mb-4 text-center"></div>
            <div>
              <label for="name" class="sr-only">Nombre</label>
              <input
                type="text"
                id="name" name="name"
                placeholder="Tu Nombre"
                class="w-full bg-transparent border-b-2 border-light py-1 placeholder-light focus:outline-none focus:border-primary"
                required
              />
            </div>
            <div>
              <label for="email" class="sr-only">Correo Electrónico</label>
              <input
                type="email"
                id="email" name="email"
                placeholder="Tu Correo Electrónico"
                class="w-full bg-transparent border-b-2 border-light py-1 placeholder-light focus:outline-none focus:border-primary"
                required
              />
            </div>
            <div>
              <label for="message" class="sr-only">Mensaje</label>
              <textarea
                id="message" name="message" rows="3"
                placeholder="Tu Mensaje"
                class="w-full bg-transparent border-b-2 border-light py-1 placeholder-light focus:outline-none focus:border-primary resize-none"
                required
              ></textarea>
            </div>

            <button
              type="submit"
              class="w-full bg-primary text-light font-semibold uppercase tracking-wide py-2 rounded-sm shadow-inner hover:bg-secondary transition"
            >
              Enviar Mensaje
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
