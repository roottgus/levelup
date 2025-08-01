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

    {{-- Muestra errores --}}
    @if ($errors->any())
      <div class="mb-6 text-center">
        <div class="inline-block bg-red-500 text-light px-4 py-2 rounded">
          @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
          @endforeach
        </div>
      </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
      {{-- IZQUIERDA: subtítulo, título, descripción y tarjetas --}}
      <div class="space-y-4 reveal-from-left">
        <span class="inline-block text-sm text-primary uppercase tracking-wide">
          {{ __('messages.contact_subtitle') }}
        </span>
        <h2 class="text-2xl md:text-3xl font-heading font-bold text-light">
          {{ __('messages.contact_title') }}
        </h2>
        <p class="text-sm md:text-base max-w-prose">
          {{ __('messages.contact_description') }}
        </p>

        {{-- Tarjetas de info --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">
          {{-- Ubicación --}}
          <div class="bg-dark rounded-lg p-4 space-y-2 border-l-4 border-primary hover:bg-primary/10 transition transform hover:-translate-y-1 shadow">
            <i class="fas fa-map-marker-alt text-primary text-2xl"></i>
            <h3 class="font-heading text-base text-light">{{ __('messages.contact_location_title') }}</h3>
            <p class="text-xs text-light/80">{{ __('messages.contact_location_value') }}</p>
          </div>
          {{-- Horario --}}
          <div class="bg-dark rounded-lg p-4 space-y-2 border-l-4 border-secondary hover:bg-secondary/10 transition transform hover:-translate-y-1 shadow reveal-from-bottom">
            <i class="far fa-clock text-secondary text-2xl"></i>
            <h3 class="font-heading text-base text-light">{{ __('messages.contact_hours_title') }}</h3>
            <p class="text-xs text-light/80">{!! nl2br(e(__('messages.contact_hours_value'))) !!}</p>
          </div>
          {{-- Contacto --}}
          <div class="bg-dark rounded-lg p-4 space-y-2 border-l-4 border-medium hover:bg-medium/10 transition transform hover:-translate-y-1 shadow">
            <i class="fas fa-phone-alt text-light text-2xl"></i>
            <h3 class="font-heading text-base text-light">{{ __('messages.contact_phone_title') }}</h3>
            <p class="text-xs text-light/80">
              {!! nl2br(e(__('messages.contact_phone_value'))) !!}
            </p>
          </div>
        </div>
      </div>

      {{-- DERECHA: formulario --}}
      <div class="relative reveal-from-right">
        <div class="absolute -top-6 -left-6 w-56 h-56 bg-secondary opacity-10 rounded-xl transform rotate-6 pointer-events-none"></div>
        <div class="absolute -bottom-6 -right-6 w-56 h-56 bg-primary opacity-10 rounded-xl transform -rotate-6 pointer-events-none"></div>
        <div class="bg-dark rounded-xl shadow-lg p-6 relative z-20">
          <h3 class="text-xl font-heading text-secondary mb-1">{{ __('messages.contact_form_subtitle') }}</h3>
          <h2 class="text-2xl font-bold text-light mb-4">{{ __('messages.contact_form_title') }}</h2>

          <form id="contact-form" action="{{ route('contact.send') }}" method="POST" class="space-y-4 text-sm">
            @csrf

            {{-- Honeypot --}}
            <div style="display:none;">
              <input type="text" name="website" tabindex="-1" autocomplete="off">
            </div>

            <div id="contact-status" class="mb-4 text-center"></div>
            <div>
              <label for="name" class="sr-only">{{ __('messages.contact_name_label') }}</label>
              <input
                type="text"
                id="name" name="name"
                placeholder="{{ __('messages.contact_name_placeholder') }}"
                class="w-full bg-transparent border-b-2 border-light py-1 placeholder-light focus:outline-none focus:border-primary"
                required
              />
            </div>
            <div>
              <label for="email" class="sr-only">{{ __('messages.contact_email_label') }}</label>
              <input
                type="email"
                id="email" name="email"
                placeholder="{{ __('messages.contact_email_placeholder') }}"
                class="w-full bg-transparent border-b-2 border-light py-1 placeholder-light focus:outline-none focus:border-primary"
                required
              />
            </div>
            <div>
              <label for="message" class="sr-only">{{ __('messages.contact_message_label') }}</label>
              <textarea
                id="message" name="message" rows="3"
                placeholder="{{ __('messages.contact_message_placeholder') }}"
                class="w-full bg-transparent border-b-2 border-light py-1 placeholder-light focus:outline-none focus:border-primary resize-none"
                required
              ></textarea>
            </div>
            <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

            <button
              type="submit"
              class="w-full bg-primary text-light font-semibold uppercase tracking-wide py-2 rounded-sm shadow-inner hover:bg-secondary transition"
            >
              {{ __('messages.contact_send_button') }}
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@push('scripts')
<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.sitekey') }}"></script>
<script>
  grecaptcha.ready(function() {
    grecaptcha.execute('{{ config('services.recaptcha.sitekey') }}', { action: 'contact' })
      .then(function(token) {
        document.getElementById('g-recaptcha-response').value = token;
      });
  });
</script>
@endpush
