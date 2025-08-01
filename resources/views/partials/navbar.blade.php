{{-- resources/views/partials/navbar.blade.php --}}

{{-- Topbar fijo con iconos sociales e info de contacto --}}
<div class="bg-primary text-gray-200 text-base select-none">
  <div class="max-w-7xl mx-auto px-4 flex items-center justify-between py-2">
    <div class="flex items-center gap-5">
      {{-- Twitter --}}
      <a href="https://twitter.com/tuusuario"
         class="hover:text-secondary transition-colors"
         aria-label="Twitter">
        <i class="fab fa-twitter text-xl"></i>
      </a>
      {{-- Instagram --}}
      <a href="https://instagram.com/tuusuario"
         class="hover:text-secondary transition-colors"
         aria-label="Instagram">
        <i class="fab fa-instagram text-xl"></i>
      </a>
      {{-- TikTok --}}
      <a href="https://tiktok.com/@tuusuario"
         class="hover:text-secondary transition-colors"
         aria-label="TikTok">
        <i class="fab fa-tiktok text-xl"></i>
      </a>
      {{-- YouTube --}}
      <a href="https://youtube.com/tuusuario"
         class="hover:text-secondary transition-colors"
         aria-label="YouTube">
        <i class="fab fa-youtube text-xl"></i>
      </a>
    </div>
    <div class="flex items-center gap-2 text-white text-xs md:text-base">
      <i class="fab fa-whatsapp text-green-400 text-lg"></i>
      <span class="hidden sm:inline">{{ __('messages.whatsapp_label') }}</span>
      <span class="font-bold">+1-531-532-1179</span>
    </div>
  </div>
</div>

{{-- Navbar “pill” --}}
<nav class="fixed top-14 inset-x-0 z-50 px-4 md:px-8 transition-all duration-200">
  <div class="max-w-7xl mx-auto flex items-center justify-between bg-primary/90 backdrop-blur-xl shadow-xl rounded-full h-16 px-5 md:px-10 border-2 border-primary/70">
    <!-- Logo -->
    <a href="#" class="flex items-center group hover:scale-105 transition-transform duration-200">
      <img src="{{ asset('images/logoppal.png') }}" alt="Logo" class="h-10 w-auto drop-shadow-xl"/>
    </a>

    <!-- Menú píldora (desktop) -->
    <div id="main-nav" class="hidden md:flex items-center gap-8 font-medium">
      @php
        $links = [
          'home'     => '#',
          'about'    => '#about',
          'services' => '#services',
          'portfolio'=> '#portfolio',
          'faq'      => '#faq',
          'contact'  => '#contact',
        ];
      @endphp
      @foreach($links as $key => $anchor)
        <a href="{{ $anchor }}"
           class="relative py-2 px-3 text-white hover:text-secondary transition-colors group">
          <span class="relative z-10">{{ __('messages.' . $key) }}</span>
          <span
            class="absolute left-0 bottom-0 w-full h-1 bg-secondary rounded transition-all duration-300 scale-x-0 group-hover:scale-x-100 origin-center"
            style="@if(request()->is(ltrim($anchor,'#'))) transform: scaleX(1); @endif"
          ></span>
        </a>
      @endforeach
    </div>

    <!-- CTA + burger -->
    <div class="flex items-center gap-2">
      <a href="#contact"
         class="hidden md:inline-block bg-secondary hover:bg-red-600 text-white px-6 py-2 rounded-full font-semibold shadow transition duration-150">
        {{ __('messages.navbar_hire') }}
      </a>
      <button id="nav-toggle"
              class="md:hidden p-2 text-white bg-primary rounded-full focus:outline-none focus:ring-2 focus:ring-secondary focus:ring-offset-2"
              aria-label="{{ __('messages.navbar_toggle') }}">
        <i class="fas fa-bars text-xl"></i>
      </button>
    </div>
  </div>

  <!-- Menú móvil -->
  <div id="mobile-menu"
       class="fixed top-0 left-0 w-full h-full bg-black/70 z-40 flex-col items-center justify-center hidden transition-all">
    <div class="absolute top-8 right-8">
      <button id="nav-close" class="text-white text-3xl" aria-label="{{ __('messages.navbar_close') }}">
        <i class="fas fa-times"></i>
      </button>
    </div>
    <div class="flex flex-col items-center gap-8 mt-32">
      @foreach($links as $key => $anchor)
        <a href="{{ $anchor }}"
           class="text-white text-2xl font-bold hover:text-secondary transition"
           onclick="document.getElementById('mobile-menu').classList.add('hidden')">
          {{ __('messages.' . $key) }}
        </a>
      @endforeach
      <a href="#contact"
         class="mt-8 bg-secondary text-white px-8 py-3 rounded-full font-semibold shadow-lg hover:bg-red-600 transition">
        {{ __('messages.navbar_hire') }}
      </a>
    </div>
  </div>
</nav>

<script>
  // Toggle menú en móvil
  document.getElementById('nav-toggle').onclick = function() {
    document.getElementById('mobile-menu').classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
  };
  document.getElementById('nav-close').onclick = function() {
    document.getElementById('mobile-menu').classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
  };
  // Scroll suave para anclas internas
  document.querySelectorAll('nav a[href^="#"], #mobile-menu a[href^="#"]').forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        document.getElementById('mobile-menu').classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
      }
    });
  });
</script>
