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
          <img src="{{ asset('images/logo-footer.png') }}" alt="PublienRed Logo" class="h-8">
        </a>
        <p class="font-body">
          En <strong>PublienRed</strong> combinamos software a medida y marketing digital para impulsar tu marca y transformar tus ideas.
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
        <h4 class="text-base font-heading font-bold text-light border-b border-black inline-block pb-1">Enlaces</h4>
        <ul class="space-y-1 font-body">
          <li><a href="#services" class="hover:text-black transition">Servicios</a></li>
          <li><a href="#portfolio" class="hover:text-black transition">Portafolio</a></li>
          <li><a href="#about" class="hover:text-black transition">Quiénes Somos</a></li>
          <li><a href="#contact" class="hover:text-black transition">Contacto</a></li>
        </ul>
      </div>

      {{-- Servicios --}}
      <div class="space-y-2">
        <h4 class="text-base font-heading font-bold text-light border-b border-secondary inline-block pb-1">Servicios</h4>
        <ul class="space-y-1 font-body">
          <li><a href="#" class="hover:text-secondary transition">Desarrollo Web</a></li>
          <li><a href="#" class="hover:text-secondary transition">Marketing Digital</a></li>
          <li><a href="#" class="hover:text-secondary transition">Diseño Gráfico</a></li>
          <li><a href="#" class="hover:text-secondary transition">SEO & SEM</a></li>
        </ul>
      </div>

      {{-- Contacto & Newsletter --}}
      <div class="space-y-3">
        <h4 class="text-base font-heading font-bold text-light border-b border-primary inline-block pb-1">Contáctanos</h4>
        <div class="font-body space-y-1">
          <p class="flex items-center"><i class="fas fa-map-marker-alt mr-2 text-primary"></i>Estado Mérida, Venezuela</p>
          <p class="flex items-center"><i class="fas fa-phone-alt mr-2 text-secondary"></i>+58 412 642 1603</p>
          <p class="flex items-center"><i class="fas fa-envelope mr-2 text-primary"></i>admin@publienred.com</p>
        </div>
      </div>
    </div>
  </div>

  {{-- Zona inferior: fondo claro para el copyright --}}
  <div class="bg-light text-dark py-3 text-xs">
    <div class="max-w-2xl mx-auto px-6 text-center font-body">
      © {{ date('Y') }} PublienRed. Todos los derechos reservados.
    </div>
  </div>
</footer>
