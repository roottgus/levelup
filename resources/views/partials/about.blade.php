<section id="about" class="relative overflow-hidden py-24 bg-gradient-to-br from-light via-white to-[#eaf1fa]">

  {{-- Esferas decorativas --}}
  <div class="absolute -top-24 -left-24 w-72 h-72 bg-secondary opacity-10 rounded-full blur-2xl pointer-events-none"></div>
  <div class="absolute -bottom-20 -right-20 w-96 h-96 bg-primary opacity-10 rounded-full blur-2xl pointer-events-none"></div>

  {{-- Banda diagonal suave --}}
  <div class="absolute inset-0 pointer-events-none">
    <div class="h-full w-2/3 bg-white opacity-30 rounded-tl-3xl rounded-br-3xl rotate-2"></div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-4 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

    {{-- COLUMNA IZQUIERDA: texto y features --}}
    <div class="space-y-8 reveal-from-left">
      <p class="text-base text-secondary uppercase tracking-widest flex items-center font-semibold">
        <span class="inline-block w-3 h-3 bg-secondary rounded-full mr-2 animate-pulse"></span>
        {{ __('messages.about_small_title') }}
      </p>

      <h2 class="text-4xl md:text-5xl font-heading text-dark font-bold leading-tight tracking-tight mb-2">
        {!! __('messages.about_title') !!}
      </h2>

      <p class="text-lg text-gray-700 max-w-prose font-medium">
        {!! __('messages.about_text') !!}
      </p>

      {{-- Tarjetas features glass con animación --}}
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 max-w-md">
        @php
          $features = [
            ['icon'=>'fas fa-award','title'=>__('messages.feature_1_title'),'desc'=>__('messages.feature_1_desc')],
            ['icon'=>'fas fa-users','title'=>__('messages.feature_2_title'),'desc'=>__('messages.feature_2_desc')],
            ['icon'=>'fas fa-lightbulb','title'=>__('messages.feature_3_title'),'desc'=>__('messages.feature_3_desc')],
            ['icon'=>'fas fa-headset','title'=>__('messages.feature_4_title'),'desc'=>__('messages.feature_4_desc')],
          ];
        @endphp

        @foreach($features as $feat)
          <div class="relative group bg-white/60 backdrop-blur-lg border border-primary/10 rounded-2xl h-36 flex flex-col items-center justify-center
                      shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:scale-105 hover:bg-primary/90 hover:text-white">
            <div class="flex flex-col items-center transition-all duration-300">
              <i class="{{ $feat['icon'] }} text-3xl mb-2 group-hover:text-yellow-300 transition-all"></i>
              <h3 class="text-base font-bold">{{ $feat['title'] }}</h3>
            </div>
            <div class="opacity-0 group-hover:opacity-100 transition-opacity text-xs mt-1 px-2 text-center font-medium">
              {{ $feat['desc'] }}
            </div>
          </div>
        @endforeach
      </div>

      <a
        href="#services"
        class="inline-block mt-8 bg-gradient-to-r from-primary to-secondary text-white font-body px-10 py-3 rounded-full
               hover:from-secondary hover:to-primary transition shadow-xl text-lg font-semibold tracking-wide"
      >
        {{ __('messages.about_cta') }}
      </a>
    </div>

    {{-- COLUMNA DERECHA: ilustración dinámica --}}
    <div class="flex justify-center lg:justify-end reveal-from-right">
      <div class="relative w-full max-w-lg group hover:scale-105 transition-transform duration-500">
        <div class="absolute inset-0 rounded-3xl bg-gradient-to-tr from-secondary via-white/40 to-primary blur-lg opacity-60 scale-105"></div>
        <img
          src="{{ asset('images/aboutus1.png') }}"
          alt="{{ __('messages.about_team_alt') }}"
          class="relative rounded-3xl shadow-2xl object-cover w-full h-auto z-10"
        />
        <div class="absolute top-0 left-0 w-16 h-16 bg-secondary opacity-40 rounded-full transform -translate-x-1/3 -translate-y-1/3"></div>
        <div class="absolute bottom-0 right-0 w-28 h-28 bg-primary opacity-40 rounded-full transform translate-x-1/4 translate-y-1/4"></div>
      </div>
    </div>
  </div>
</section>
