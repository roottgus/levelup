{{-- resources/views/partials/navbar.blade.php --}}

{{-- Topbar fijo con iconos sociales e info de contacto --}}
<div class="bg-primary text-gray-200 text-base">
  <div class="max-w-6xl mx-auto px-4 flex items-center justify-between py-3">
    <div class="flex items-center space-x-6">
      {{-- Twitter --}}
      <a href="https://twitter.com/tuusuario" class="text-white hover:text-gray-100">
        <i class="fab fa-twitter h-8 w-8"></i>
      </a>
      {{-- Instagram --}}
      <a href="https://instagram.com/tuusuario" class="text-white hover:text-gray-100">
        <i class="fab fa-instagram h-8 w-8"></i>
      </a>
      {{-- TikTok --}}
      <a href="https://tiktok.com/@tuusuario" class="text-white hover:text-gray-100">
        <i class="fab fa-tiktok h-8 w-8"></i>
      </a>
      {{-- YouTube --}}
      <a href="https://youtube.com/tuusuario" class="text-white hover:text-gray-100">
        <i class="fab fa-youtube h-8 w-8"></i>
      </a>
    </div>
    <div class="flex items-center space-x-2 text-sm text-white">
      <span>Whatsapp</span>
      <span class="font-semibold">+58-424-744-7443</span>
    </div>
  </div>
</div>

{{-- Navbar “pill” --}}
<nav class="fixed top-20 inset-x-0 z-40 px-6">
  <div class="max-w-6xl mx-auto flex items-center justify-between bg-primary bg-opacity-80 backdrop-blur-lg rounded-full h-16 px-6">
    <!-- Logo -->
    <a href="#" class="flex items-center">
      <img src="{{ asset('images/logoppal.png') }}" alt="PublienRed" class="h-10"/>
    </a>

    <!-- Menú píldora -->
    <div class="hidden md:flex items-center space-x-8 text-white font-body">
      @php
        $links = [
          'Inicio'         => '#',
          'Quiénes Somos'  => '#about',
          'Servicios'      => '#services',
          'Portafolio'     => '#portfolio',
          'FAQ'            => '#faq',
          'Contacto'       => '#contact',
        ];
      @endphp
      @foreach($links as $label => $anchor)
        <a href="{{ $anchor }}" class="hover:text-secondary transition-colors">
          {{ $label }}
        </a>
      @endforeach
    </div>

    <!-- CTA + burger -->
    <div class="flex items-center space-x-4">
      <a href="#contact" class="hidden md:inline-block bg-secondary hover:bg-red-600 text-white px-6 py-2 rounded-lg font-body">
        Contratar
      </a>
      <button id="nav-toggle" class="md:hidden text-white text-2xl">
        <i class="fas fa-bars"></i>
      </button>
    </div>
  </div>
</nav>

<script>
  // Toggle menú en móvil
  document.getElementById('nav-toggle').addEventListener('click', () => {
    document.querySelector('.max-w-6xl .md\\:flex').classList.toggle('hidden');
  });

  // Scroll suave para anclas internas
  document.querySelectorAll('nav a[href^="#"]').forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });
</script>
