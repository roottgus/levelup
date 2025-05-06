{{-- resources/views/partials/faq.blade.php --}}
@php
  $faqs = [
    ['icon'=>'fas fa-palette',   'clr'=>'primary',   'q'=>'¿Qué incluye el servicio de Diseño Gráfico?',            'a'=>'Nuestro paquete de Diseño Gráfico abarca desde la creación de logotipos e identidad visual hasta piezas promocionales, con revisiones ilimitadas dentro del alcance acordado.'],
    ['icon'=>'fas fa-search',    'clr'=>'secondary', 'q'=>'¿Cómo optimizan el SEO de mi sitio web?',                'a'=>'Realizamos análisis de palabras clave, optimizamos meta etiquetas, mejoramos la estructura de URLs y configuramos sitemap.xml y robots.txt para mejorar la visibilidad en buscadores.'],
    ['icon'=>'fas fa-code',      'clr'=>'dark',      'q'=>'¿Qué metodología usan para el desarrollo de software?', 'a'=>'Empleamos metodologías ágiles (Scrum/Kanban) con sprints quincenales, permitiéndote ver avances constantes y ajustar requisitos en tiempo real.'],
    ['icon'=>'fas fa-globe',     'clr'=>'medium',    'q'=>'¿Cuánto tiempo lleva lanzar una página web corporativa?', 'a'=>'Un sitio estándar de 5-7 páginas suele tardar 2-3 semanas. Proyectos con e-commerce o integraciones avanzadas pueden requerir de 4 a 6 semanas.'],
    ['icon'=>'fas fa-edit',      'clr'=>'primary',   'q'=>'¿Puedo actualizar el contenido de mi web después de la entrega?', 'a'=>'Sí, entregamos un CMS personalizado que te permite editar textos, imágenes y secciones sin necesidad de conocimientos de programación.'],
    ['icon'=>'fas fa-life-ring', 'clr'=>'secondary', 'q'=>'¿Ofrecen soporte y mantenimiento post-lanzamiento?',      'a'=>'Sí, ofrecemos paquetes de soporte y mantenimiento que incluyen actualizaciones de seguridad, mejoras continuas y asesoría según tus necesidades.'],
  ];
@endphp

<section id="faq" class="py-20 bg-light">
  <div class="max-w-7xl mx-auto px-4">

    {{-- Encabezado rediseñado --}}
    <div class="relative max-w-2xl mx-auto mb-16 text-center">
      {{-- Título principal --}}
      <h2 class="section-title reveal-fade">
        <i class="fas fa-question-circle text-secondary icon-hover mr-2"></i>
        Tus dudas <span class="text-primary">frecuentes</span>
      </h2>
      {{-- Descripción --}}
      <p class="text-base text-dark/70 leading-relaxed">
        Aquí resolvemos las preguntas más comunes sobre nuestros servicios de software, marketing, SEO y diseño gráfico. 
        <a href="#contact" class="text-primary underline">Contáctanos</a> si no encuentras tu respuesta.
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
      {{-- IZQUIERDA: Búsqueda + FAQs --}}
      <div>
        {{-- Campo de búsqueda --}}
        <div class="mb-6">
          <input
            type="text"
            id="faq-search"
            placeholder="¿Qué pregunta tienes?"
            class="w-full border-b-2 border-medium bg-transparent py-2 px-4 placeholder-medium text-base focus:outline-none focus:border-primary transition"
          />
        </div>

        {{-- Lista de FAQs --}}
        <div class="space-y-4" id="faq-list">
          @foreach($faqs as $item)
            <details
              class="bg-white border-l-4 border-{{ $item['clr'] }} p-5 rounded-lg shadow-sm transition-shadow hover:shadow-md overflow-hidden"
            >
              <summary
                role="button"
                aria-expanded="false"
                class="flex items-center justify-between font-heading text-base font-semibold text-dark open:text-{{ $item['clr'] }} cursor-pointer list-none"
              >
                <div class="flex items-center space-x-2">
                  <i class="{{ $item['icon'] }} text-{{ $item['clr'] }}"></i>
                  <span>{{ $item['q'] }}</span>
                </div>
                <i class="fas fa-plus text-{{ $item['clr'] }} open:hidden"></i>
                <i class="fas fa-minus text-{{ $item['clr'] }} hidden open:block"></i>
              </summary>
              <div
                class="faq-content mt-3 font-body text-sm text-dark leading-relaxed"
                style="max-height: 0; overflow: hidden; transition: max-height 0.3s ease;"
              >
                <p>{{ $item['a'] }}</p>
              </div>
            </details>
          @endforeach
        </div>
      </div>

      {{-- DERECHA: Imagen de soporte --}}
<div class="flex justify-center lg:justify-end">
  <img
    src="{{ asset('images/soporte.png') }}"
    alt="Soporte al cliente PublienRed"
    class="rounded-2xl shadow-lg object-cover w-3/4 max-w-sm"
  />
</div>

    </div>
  </div>

  {{-- Scripts --}}
  <script>
    const search  = document.getElementById('faq-search');
    const list    = document.getElementById('faq-list');
    const details = list.querySelectorAll('details');

    search.addEventListener('input', e => {
      const term = e.target.value.toLowerCase();
      details.forEach(d => {
        const q = d.querySelector('summary div span').textContent.toLowerCase();
        d.style.display = q.includes(term) ? '' : 'none';
      });
    });

    details.forEach(detail => {
      const content = detail.querySelector('.faq-content');
      detail.addEventListener('toggle', () => {
        if (detail.open) {
          details.forEach(d => { if (d !== detail) d.open = false; });
          content.style.maxHeight = content.scrollHeight + 'px';
        } else {
          content.style.maxHeight = '0';
        }
        detail.querySelector('summary').setAttribute('aria-expanded', detail.open);
      });
    });
  </script>
</section>
