<div id="splash"
  class="fixed inset-0 h-screen w-screen z-[9999] flex items-center justify-center bg-gradient-to-br from-[#0F66AF] via-[#1a1c2b] to-[#0c63d4] overflow-hidden transition-opacity duration-700 animate-fade-in"
>
  <!-- Fondo partículas/ondas SVG animadas -->
  <div class="absolute inset-0 z-[-10] pointer-events-none">
    <svg class="absolute top-0 left-0 w-full h-full" viewBox="0 0 1440 600" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,320 Q720,480 1440,320 L1440,600 L0,600Z" fill="#0f66af33"/>
      <path d="M0,380 Q720,520 1440,380 L1440,600 L0,600Z" fill="#e5002a22"/>
    </svg>
  </div>

  <!-- Círculo animado de íconos y logo -->
  <div class="relative flex flex-col items-center justify-center text-center px-8 z-10">
    <div class="relative mb-8 w-56 h-56 flex items-center justify-center">
      <ul class="icon-list relative w-full h-full">
        @php
          $icons = [
            'fa-html5', 'fa-css3-alt', 'fa-js', 'fa-laravel', 'fa-react', 'fa-node-js',
            'fa-facebook-f', 'fa-instagram', 'fa-x-twitter', 'fa-js', 'fa-node-js', 'fa-laravel'
          ];
        @endphp
        @foreach($icons as $i => $icon)
          <li class="icon-item" style="--i: {{ $i }}; --n: {{ count($icons) }};">
            <i class="fab {{ $icon }}"></i>
          </li>
        @endforeach
        <div class="absolute inset-0 flex items-center justify-center">
          <div class="h-28 w-28 flex items-center justify-center rounded-full bg-white/10 border-4 border-primary animate-pulse-slow shadow-lg overflow-hidden">
            <img src="{{ asset('images/logo.png') }}"
                 alt="LevelUp+ Digital Agency"
                 class="h-36 w-auto object-contain" />
          </div>
        </div>
      </ul>
    </div>
    <!-- Títulos -->
    <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 drop-shadow splash-title">
      {{ __('messages.splash_title') }}
    </h1>
    <p class="text-xl md:text-2xl text-slate-200 font-medium splash-subtitle">
      {{ __('messages.splash_subtitle') }}
    </p>

    <!-- Selector de idioma (botones) -->
    <div class="mt-10 flex space-x-8">
      <button type="button" class="splash-lang" data-locale="es" title="Español">
        <img src="{{ asset('images/flag-es.png') }}" alt="Español" class="w-10 h-10 rounded-full border-2 border-white hover:scale-110 transition" />
      </button>
      <button type="button" class="splash-lang" data-locale="en" title="English">
        <img src="{{ asset('images/flag-us.png') }}" alt="English" class="w-10 h-10 rounded-full border-2 border-white hover:scale-110 transition" />
      </button>
    </div>
    <span class="mt-2 text-white text-xs font-medium tracking-wide drop-shadow">
      {{ __('messages.select_language') }}
    </span>
  </div>
</div>

@push('scripts')
<script>
window.addEventListener('load', () => {
  const splash = document.getElementById('splash');
  document.querySelectorAll('.splash-lang').forEach(btn => {
    btn.addEventListener('click', () => {
      const locale = btn.getAttribute('data-locale');
      // Fade-out splash
      splash.style.opacity = '0';
      splash.style.pointerEvents = 'none';
      splash.addEventListener('transitionend', () => {
        // Redirect to set locale and reload
        window.location.href = `/lang/${locale}`;
      }, { once: true });
    });
  });
});
</script>
@endpush
