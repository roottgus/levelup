<section id="technologies" class="relative py-24 bg-gradient-to-b from-white via-light to-white overflow-hidden">
  <div class="max-w-6xl mx-auto px-4 text-center relative z-10">

    {{-- Título animado con icono SVG propio --}}
    <header class="flex flex-col items-center justify-center mb-14">
      <span class="inline-flex items-center animate-fadeInUp">
        <svg class="mr-3 w-9 h-9 text-primary animate-spin-slow" viewBox="0 0 28 28" fill="none">
          <circle cx="14" cy="14" r="12" stroke="currentColor" stroke-width="3" opacity="0.12"/>
          <path d="M14 3a11 11 0 1 1-7.78 18.78" stroke="currentColor" stroke-width="3" stroke-linecap="round"/>
        </svg>
        <h3 class="section-title text-3xl md:text-4xl font-extrabold tracking-tight bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent drop-shadow-lg">
          {!! __('messages.technologies_title') !!}
        </h3>
      </span>
      <p class="text-lg text-dark/70 leading-relaxed mt-5 max-w-2xl mx-auto animate-fadeInUp delay-150">
        {!! __('messages.technologies_subtitle') !!}
      </p>
    </header>

    {{-- Grid de tecnologías --}}
    <div class="grid grid-cols-3 sm:grid-cols-5 md:grid-cols-6 gap-8 items-center justify-items-center">
      @php
        $techs = ['php','laravel','mysql','react','vite','node'];
      @endphp
      @foreach($techs as $i => $tech)
        <div
          class="tech-logo-card group animate-fadeInUp"
          style="animation-delay: {{ $i * 0.15 }}s;"
          tabindex="0"
        >
          <img
            src="{{ asset("images/tech/{$tech}.svg") }}"
            alt="{{ ucfirst($tech) }}"
            class="h-20 w-auto object-contain transition-transform duration-300 group-hover:scale-110 group-hover:-rotate-6 group-hover:drop-shadow-xl group-focus:scale-110"
            draggable="false"
          />
        </div>
      @endforeach
    </div>
  </div>

  {{-- Fondo decorativo SVG sutil (opcional) --}}
  <svg class="absolute left-0 bottom-0 w-full h-32 pointer-events-none opacity-20 select-none" viewBox="0 0 1440 80" fill="none" preserveAspectRatio="none">
    <path fill="#E4EFFF" d="M0,80 C480,0 960,160 1440,80 L1440,0 L0,0 Z"/>
  </svg>
</section>

<style>
@keyframes fadeInUp {
  0% { opacity: 0; transform: translateY(30px);}
  100% { opacity: 1; transform: translateY(0);}
}
@keyframes spin-slow {
  to { transform: rotate(360deg);}
}
.animate-fadeInUp {
  animation: fadeInUp 1.1s cubic-bezier(.38,1.38,.33,1) both;
}
.animate-spin-slow {
  animation: spin-slow 2.5s linear infinite;
}
.tech-logo-card {
  @apply bg-white/60 rounded-2xl shadow-lg border border-primary/10 flex items-center justify-center p-4 md:p-5 transition-all duration-300 backdrop-blur-md;
  will-change: transform, box-shadow;
  box-shadow: 0 4px 24px 0 rgba(66,100,255,0.08), 0 1.5px 6px 0 rgba(0,0,0,0.10);
  cursor: pointer;
}
.tech-logo-card:hover, .tech-logo-card:focus {
  background: linear-gradient(120deg,rgba(90,160,255,0.11) 60%,rgba(250,250,250,0.27));
  box-shadow: 0 8px 32px 0 rgba(40,110,255,0.14), 0 3px 12px 0 rgba(0,0,0,0.10);
  transform: scale(1.06) translateY(-4px) rotate(-2deg);
  border-color: rgba(40,110,255,0.18);
  outline: none;
}
@media (max-width: 640px) {
  .tech-logo-card { padding: 0.5rem; }
}
</style>
