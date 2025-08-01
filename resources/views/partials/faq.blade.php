@php
  $faqs = __('messages.faqs');
@endphp

<section id="faq" class="py-24 bg-gradient-to-b from-light via-white to-primary/10">
  <div class="max-w-7xl mx-auto px-4">
    {{-- Header PRO --}}
    <div class="relative max-w-2xl mx-auto mb-16 text-center">
      <h2 class="text-3xl md:text-4xl font-extrabold mb-4 tracking-tight bg-gradient-to-r from-secondary via-primary to-secondary bg-clip-text text-transparent drop-shadow-lg inline-flex items-center justify-center animate-fadeInUp">
        <svg class="w-8 h-8 mr-3 text-secondary animate-pop" viewBox="0 0 32 32" fill="none">
          <circle cx="16" cy="16" r="13" stroke="currentColor" stroke-width="3" opacity="0.15"/>
          <path d="M16 10v4M16 21h.01" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
        </svg>
        {!! __('messages.faq_title') !!}
      </h2>
      <p class="text-base text-dark/70 leading-relaxed animate-fadeInUp delay-150">
        {!! __('messages.faq_subtitle') !!}
        <a href="#contact" class="text-primary underline hover:text-secondary transition-colors">{{ __('messages.contact_us') }}</a>
        {{ __('messages.if_no_answer') }}
      </p>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
      {{-- IZQUIERDA: Búsqueda + FAQs --}}
      <div class="w-full max-w-lg mx-auto lg:mx-0">
        {{-- Buscador --}}
        <div class="mb-6 relative animate-fadeInUp delay-200">
          <input
            type="text"
            id="faq-search"
            placeholder="{{ __('messages.faq_search_placeholder') }}"
            class="w-full border-b-2 border-medium bg-white/50 rounded-xl py-2 px-4 text-base shadow-md placeholder-medium text-dark focus:outline-none focus:border-primary/70 transition-all duration-200"
            autocomplete="off"
            aria-label="{{ __('messages.faq_search_label') }}"
          />
          <i class="fas fa-search absolute right-4 top-1/2 -translate-y-1/2 text-medium pointer-events-none"></i>
        </div>
        {{-- FAQs dinámicas --}}
        <div class="space-y-3" id="faq-list">
          @foreach($faqs as $i => $item)
            <details
              class="faq-card group bg-white/70 backdrop-blur-xl border-l-4 border-{{ $item['clr'] }} p-4 rounded-xl shadow transition-all duration-300 focus-within:ring-2 focus-within:ring-{{ $item['clr'] }} overflow-hidden animate-fadeInUp"
              style="animation-delay:{{ $i * 60 }}ms"
              tabindex="0"
            >
              <summary
                class="flex items-center justify-between font-heading text-base font-semibold text-dark/90 cursor-pointer select-none list-none outline-none focus:text-{{ $item['clr'] }} transition-colors"
                aria-expanded="false"
                role="button"
              >
                <span class="flex items-center gap-2">
                  <i class="{{ $item['icon'] }} text-{{ $item['clr'] }} text-lg group-hover:animate-wiggle"></i>
                  <span>{{ $item['q'] }}</span>
                </span>
                <span class="inline-flex items-center ml-2">
                  <i class="fas fa-plus text-{{ $item['clr'] }} transition-transform group-open:rotate-90 group-open:opacity-0"></i>
                  <i class="fas fa-minus text-{{ $item['clr'] }} ml-[-16px] opacity-0 group-open:opacity-100 transition-opacity duration-200"></i>
                </span>
              </summary>
              <div class="faq-content mt-2 font-body text-dark/80 text-sm leading-relaxed transition-all duration-500 opacity-0 max-h-0 group-open:opacity-100 group-open:max-h-60">
                <p>{{ $item['a'] }}</p>
              </div>
            </details>
          @endforeach
        </div>
      </div>
      {{-- DERECHA: Imagen soporte pro --}}
      <div class="flex justify-center lg:justify-end animate-fadeInUp delay-300">
        <img
          src="{{ asset('images/soporte.png') }}"
          alt="Soporte al cliente LevelUp+"
          class="rounded-3xl shadow-xl object-cover w-4/5 max-w-sm border-4 border-primary/10"
          loading="lazy"
          draggable="false"
        />
      </div>
    </div>
  </div>

  {{-- Animaciones y lógica de FAQ --}}
  <style>
    @keyframes fadeInUp { 0% { opacity:0; transform:translateY(32px);} 100% { opacity:1; transform:translateY(0);} }
    @keyframes pop { 0%{transform:scale(0.85);} 60%{transform:scale(1.12);} 100%{transform:scale(1);} }
    @keyframes wiggle { 0%, 100% { transform: rotate(-7deg);} 50% { transform: rotate(7deg);} }
    .animate-fadeInUp { animation: fadeInUp 1.05s cubic-bezier(.36,1.42,.28,1.01) both; }
    .animate-pop { animation: pop .7s cubic-bezier(.41,1.31,.48,.82) both;}
    .animate-wiggle { animation: wiggle .6s cubic-bezier(.41,1.31,.48,.82) both;}
    .faq-card { will-change: box-shadow, background; }
    details[open] .faq-content {
      opacity: 1 !important;
      max-height: 480px !important;
      transition: all .45s cubic-bezier(.77,0,.18,1);
    }
    .faq-content {
      opacity: 0;
      max-height: 0;
      transition: all .3s cubic-bezier(.77,0,.18,1);
    }
  </style>
  <script>
    // Buscador FAQ PRO
    document.addEventListener('DOMContentLoaded', function () {
      const search  = document.getElementById('faq-search');
      const list    = document.getElementById('faq-list');
      const details = list.querySelectorAll('details');
      search.addEventListener('input', e => {
        const term = e.target.value.toLowerCase();
        details.forEach(d => {
          const q = d.querySelector('summary span span').textContent.toLowerCase();
          d.style.display = q.includes(term) ? '' : 'none';
        });
      });
      // Solo un FAQ abierto a la vez, con transición
      details.forEach(detail => {
        const content = detail.querySelector('.faq-content');
        detail.addEventListener('toggle', () => {
          if (detail.open) {
            details.forEach(d => { if (d !== detail) d.open = false; });
            content.style.maxHeight = content.scrollHeight + 60 + 'px';
            content.style.opacity = '1';
          } else {
            content.style.maxHeight = '0';
            content.style.opacity = '0';
          }
          detail.querySelector('summary').setAttribute('aria-expanded', detail.open);
        });
      });
    });
  </script>
</section>
