{{-- resources/views/partials/footer.blade.php --}}
<footer class="mt-0">
  {{-- Zona superior: columnas en degradado --}}
  <div class="relative bg-gradient-to-r from-primary to-medium text-light pt-3 pb-3 overflow-hidden">
    <div class="relative z-10 max-w-7xl mx-auto px-6">
      {{-- GRID para organizar el footer --}}
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-sm">

        {{-- Logo & Descripción --}}
        <div class="space-y-3">
          <a href="{{ url('/') }}" class="inline-block">
            <img src="{{ asset('images/logo-footer.png') }}"
                 alt="{{ config('app.name') }} Logo"
                 class="h-8">
          </a>
          <p class="font-body">
            {!! __('messages.footer_description') !!}
          </p>
          <div class="flex space-x-3">
            <a href="#" class="text-light hover:text-primary transition"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-light hover:text-primary transition"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-light hover:text-primary transition"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" class="text-light hover:text-primary transition"><i class="fab fa-instagram"></i></a>
          </div>
        </div>

        {{-- ENLACES Y SERVICIOS como subgrid de dos columnas --}}
        <div class="md:col-span-2 w-full">
          <div class="grid grid-cols-2 gap-4">
            {{-- Enlaces Rápidos --}}
            <div class="space-y-2">
              <h4 class="text-base font-heading font-bold text-light border-b border-black inline-block pb-1">
                {{ __('messages.footer_links') }}
              </h4>
              <ul class="space-y-1 font-body">
                <li>
                  <a href="{{ url('/?reveal=1#about')}}" class="hover:text-black transition">
                    {{ __('messages.about') }}
                  </a>
                </li>
                <li>
                  <a href="{{ url('/?reveal=1#contact')}}" class="hover:text-black transition">
                    {{ __('messages.contact') }}
                  </a>
                </li>
                <li>
                  <a href="{{ url('/politica') }}" class="hover:text-black transition">
                    {{ __('messages.privacy_policy') }}
                  </a>
                </li>
                <li>
                  <a href="{{ url('/terminos') }}" class="hover:text-black transition">
                    {{ __('messages.terms_conditions') }}
                  </a>
                </li>
              </ul>
            </div>

            {{-- Servicios --}}
            <div class="space-y-2">
              <h4 class="text-base font-heading font-bold text-light border-b border-secondary inline-block pb-1">
                {{ __('messages.services') }}
              </h4>
              <ul class="space-y-1 font-body">
                <li><span>{{ __('messages.service_web_title') }}</span></li>
                <li><span>{{ __('messages.service_marketing_title') }}</span></li>
                <li><span>{{ __('messages.service_design_title') }}</span></li>
                <li><span>{{ __('messages.service_seo_title') }}</span></li>
              </ul>
            </div>
          </div>
        </div>

        {{-- CONTACTO siempre columna a la derecha en desktop, abajo en móvil --}}
        <div class="space-y-3 flex flex-col items-center md:items-start justify-center text-center md:text-left mt-6 md:mt-0 md:col-span-1">
          <h4 class="text-base font-heading font-bold text-light border-b border-primary inline-block pb-1">
            {{ __('messages.contact_us') }}
          </h4>
          <div class="font-body space-y-1">
            <p class="flex items-center justify-center md:justify-start">
              <i class="fas fa-map-marker-alt mr-2 text-primary"></i>
              {{ __('messages.contact_location_value') }}
            </p>
            <p class="flex items-center justify-center md:justify-start">
              <i class="fas fa-phone-alt mr-2 text-secondary"></i>
              {{ __('messages.contact_phone_value') }}
            </p>
            <p class="flex items-center justify-center md:justify-start">
              <i class="fas fa-envelope mr-2 text-primary"></i>
              {{ __('messages.contact_email_value') }}
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>

  {{-- Zona inferior: fondo claro para el copyright --}}
  <div class="bg-light text-dark py-3 text-xs">
    <div class="max-w-2xl mx-auto px-6 text-center font-body flex items-center justify-center gap-2">
      <span class="inline-block [animation-name:pulse-green] [animation-duration:2s] [animation-iteration-count:infinite] align-middle">
        <svg width="20" height="20" fill="none" viewBox="0 0 24 24" class="inline">
          <path d="M12 2l7 4v5c0 5.5-3.5 9.74-7 11-3.5-1.26-7-5.5-7-11V6l7-4z"
                fill="#0f66af" stroke="#fff" stroke-width="1.5"/>
          <path d="M9.5 11.5l2 2 3-3"
                stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </span>
      <style>
        @keyframes pulse-green {
          0%, 100% { opacity: 1; }
          50% { opacity: 0.6; filter: drop-shadow(0 0 6px #16c784); }
        }
      </style>

      <div>
        © {{ date('Y') }} LevelUp+. {{ __('messages.all_rights') }}
        <br>
        <span class="font-bold tracking-wider text-primary">
          DBA
          <span class="text-xs align-middle font-bold mx-1" style="font-size: 0.8em;">OF</span>
          BERART SERVICE LLC
        </span>
      </div>
    </div>
  </div>
</footer>
