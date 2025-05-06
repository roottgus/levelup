{{-- resources/views/partials/services.blade.php --}}
<section id="services" class="relative py-20 bg-light overflow-hidden">
  {{-- Onda SVG superior --}}
  <div class="absolute inset-x-0 top-0 -mt-20 pointer-events-none">
    <svg viewBox="0 0 1440 80" class="w-full h-20" preserveAspectRatio="none">
      <path fill="#F3F4F6" d="M0,80 C480,0 960,160 1440,80 L1440,0 L0,0 Z"/>
    </svg>
  </div>

  <div class="relative max-w-6xl mx-auto px-4">
  {{-- Título y subrayado centrado --}}
  <div class="flex justify-center mb-12">
    <div class="text-center">
    <h2 class="section-title reveal-fade">
        <span class="relative inline-block w-8 h-8 mr-2">
          {{-- Engranaje grande (giro lento) --}}
          <i class="fas fa-cog text-primary absolute inset-0 animate-spin-slow"></i>
          {{-- Engranaje pequeño (giro rápido inverso) --}}
          <i class="fas fa-cog text-secondary absolute inset-0 w-9 h-9 left-1.5 top-1.5 animate-spin-fast-reverse"></i>
        </span>
        Nuestros <span class="text-secondary">Servicios</span>
      </h2>
      
    </div>
  </div>

  {{-- Descripción --}}
  <div class="flex justify-center mb-8">
    <p class="text-center text-medium text-dark/70 reveal-fade delay-200 max-w-2xl">
      Impulsamos tu negocio con soluciones a medida en desarrollo, marketing y diseño.
    </p>
  </div>

  {{-- Grid de tarjetas --}}
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      {{-- Desarrollo Web --}}
      <div class="group relative bg-white rounded-2xl border-t-4 border-primary shadow-md overflow-hidden
                  transform transition hover:-translate-y-2 hover:scale-105 hover:shadow-2xl reveal-from-left">
        {{-- Brillo al pasar el ratón --}}
        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/40 to-transparent opacity-0 group-hover:opacity-100
                    transition-opacity duration-500 pointer-events-none" style="mix-blend-mode: screen;"></div>

        <div class="p-6 flex flex-col h-full">
          <div class="flex items-center justify-center w-12 h-12 mb-4 bg-primary/10 text-primary rounded-full transition-colors
                      group-hover:bg-primary group-hover:text-light">
            {{-- Icono ordenador --}}
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9.75 17L9 20h6l-.75-3M3 5h18M3 5a2 2 0 012-2h14a2 2 0 012 2M3 5v12a2 2 0 002 2h14a2 2 0 002-2V5"/>
            </svg>
          </div>
          <h3 class="text-2xl font-heading mb-2 text-dark group-hover:text-primary transition-colors">
            Desarrollo Web
          </h3>
          <p class="text-medium flex-grow leading-relaxed">
            Creamos sitios a medida y aplicaciones escalables, con las últimas tecnologías y foco en usabilidad.
          </p>
        </div>
      </div>

      {{-- Marketing Digital --}}
      <div class="group relative bg-white rounded-2xl border-t-4 border-secondary shadow-md overflow-hidden
                  transform transition hover:-translate-y-2 hover:scale-105 hover:shadow-2xl reveal-from-right">
        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/40 to-transparent opacity-0 group-hover:opacity-100
                    transition-opacity duration-500 pointer-events-none" style="mix-blend-mode: screen;"></div>

        <div class="p-6 flex flex-col h-full">
          <div class="flex items-center justify-center w-12 h-12 mb-4 bg-secondary/10 text-secondary rounded-full transition-colors
                      group-hover:bg-secondary group-hover:text-light">
            {{-- Icono megáfono --}}
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8m-9 13V9"/>
            </svg>
          </div>
          <h3 class="text-2xl font-heading mb-2 text-dark group-hover:text-secondary transition-colors">
            Marketing Digital
          </h3>
          <p class="text-medium flex-grow leading-relaxed">
            Estrategias de SEO, SEM y redes sociales que aumentan tu visibilidad y convierten visitas en clientes.
          </p>
        </div>
      </div>

      {{-- Diseño Gráfico --}}
      <div class="group relative bg-white rounded-2xl border-t-4 border-green-500 shadow-md overflow-hidden
                  transform transition hover:-translate-y-2 hover:scale-105 hover:shadow-2xl reveal-from-left">
        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/40 to-transparent opacity-0 group-hover:opacity-100
                    transition-opacity duration-500 pointer-events-none" style="mix-blend-mode: screen;"></div>

        <div class="p-6 flex flex-col h-full">
          <div class="flex items-center justify-center w-12 h-12 mb-4 bg-green-100 text-green-500 rounded-full transition-colors
                      group-hover:bg-green-500 group-hover:text-light">
            {{-- Icono pincel --}}
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15.232 5.232l3.536 3.536M9.036 11.432l3.536 3.536M6.343 17.657a4 4 0 005.657 0l7.071-7.071a4 4 0 00-5.657-5.657L6.343 12l.001 5.657z"/>
            </svg>
          </div>
          <h3 class="text-2xl font-heading mb-2 text-dark group-hover:text-green-500 transition-colors">
            Diseño Gráfico
          </h3>
          <p class="text-medium flex-grow leading-relaxed">
            Branding, ilustraciones y piezas visuales impactantes que refuerzan tu identidad corporativa.
          </p>
        </div>
      </div>

      {{-- Posicionamiento SEO --}}
      <div class="group relative bg-white rounded-2xl border-t-4 border-yellow-500 shadow-md overflow-hidden
                  transform transition hover:-translate-y-2 hover:scale-105 hover:shadow-2xl reveal-from-right">
        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/40 to-transparent opacity-0 group-hover:opacity-100
                    transition-opacity duration-500 pointer-events-none" style="mix-blend-mode: screen;"></div>

        <div class="p-6 flex flex-col h-full">
          <div class="flex items-center justify-center w-12 h-12 mb-4 bg-yellow-100 text-yellow-500 rounded-full transition-colors
                      group-hover:bg-yellow-500 group-hover:text-light">
            {{-- Icono flecha ascendente --}}
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 17l7-7 7 7M13 10V3"/>
            </svg>
          </div>
          <h3 class="text-2xl font-heading mb-2 text-dark group-hover:text-yellow-500 transition-colors">
            Posicionamiento SEO
          </h3>
          <p class="text-medium flex-grow leading-relaxed">
            Optimización on‑page y off‑page para mejorar tu ranking en buscadores y atraer tráfico cualificado.
          </p>
        </div>
      </div>
    </div>
  </div>

  {{-- Onda SVG inferior --}}
  <div class="absolute inset-x-0 bottom-0 -mb-20 pointer-events-none">
    <svg viewBox="0 0 1440 80" class="w-full h-20" preserveAspectRatio="none">
      <path fill="#F3F4F6" d="M0,80 C480,0 960,160 1440,80 L1440,0 L0,0 Z"/>
    </svg>
  </div>
</section>
