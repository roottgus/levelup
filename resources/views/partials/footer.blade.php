{{-- resources/views/partials/footer.blade.php --}}
<footer class="mt-0">
  {{-- Zona superior: columnas en degradado --}}
  <div class="relative bg-gradient-to-r from-primary to-medium text-light pt-3 pb-3 overflow-hidden">
    {{-- Patrón sutil --}}
    <div class="absolute inset-0 opacity-5 pointer-events-none bg-[url('/images/pattern-diagonal.svg')]"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-8 text-sm">
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

      {{-- Enlaces Rápidos --}}
      <div class="space-y-2">
        <h4 class="text-base font-heading font-bold text-light border-b border-black inline-block pb-1">
          {{ __('messages.footer_links') }}
        </h4>
        <ul class="space-y-1 font-body">
          <li><a href="#services"  class="hover:text-black transition">{{ __('messages.services') }}</a></li>
          <li><a href="#portfolio" class="hover:text-black transition">{{ __('messages.portfolio') }}</a></li>
          <li><a href="#about"     class="hover:text-black transition">{{ __('messages.about') }}</a></li>
          <li><a href="#contact"   class="hover:text-black transition">{{ __('messages.contact') }}</a></li>
        </ul>
      </div>

      {{-- Servicios --}}
      <div class="space-y-2">
        <h4 class="text-base font-heading font-bold text-light border-b border-secondary inline-block pb-1">
          {{ __('messages.services') }}
        </h4>
        <ul class="space-y-1 font-body">
          <li><a href="#" class="hover:text-secondary transition">{{ __('messages.service_web_title') }}</a></li>
          <li><a href="#" class="hover:text-secondary transition">{{ __('messages.service_marketing_title') }}</a></li>
          <li><a href="#" class="hover:text-secondary transition">{{ __('messages.service_design_title') }}</a></li>
          <li><a href="#" class="hover:text-secondary transition">{{ __('messages.service_seo_title') }}</a></li>
        </ul>
      </div>

      {{-- Contacto --}}
      <div class="space-y-3">
        <h4 class="text-base font-heading font-bold text-light border-b border-primary inline-block pb-1">
          {{ __('messages.contact_us') }}
        </h4>
        <div class="font-body space-y-1">
          <p class="flex items-center">
            <i class="fas fa-map-marker-alt mr-2 text-primary"></i>
            {{ __('messages.contact_location_value') }}
          </p>
          <p class="flex items-center">
            <i class="fas fa-phone-alt mr-2 text-secondary"></i>
            {{ __('messages.contact_phone_value') }}
          </p>
          <p class="flex items-center">
            <i class="fas fa-envelope mr-2 text-primary"></i>
            {{ __('messages.contact_email_value') }}
          </p>
        </div>
      </div>
    </div>
  </div>

  {{-- Zona inferior: fondo claro para el copyright --}}
  <div class="bg-light text-dark py-3 text-xs">
    <div class="max-w-2xl mx-auto px-6 text-center font-body">
      © {{ date('Y') }} LevelUp+. {{ __('messages.all_rights') }}
    </div>
  </div>
</footer>
