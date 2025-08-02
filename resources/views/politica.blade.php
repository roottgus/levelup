@extends('layouts.app')
@section('title', __('legal.privacy.title').' - LevelUp+')

@section('content')
<div class="relative bg-gradient-to-b from-[#eaf3fd] via-[#f6fbff] to-white py-12 min-h-screen overflow-hidden">

  

  {{-- Onda inferior --}}
  <svg class="absolute left-0 bottom-0 w-full h-24 opacity-15 pointer-events-none z-0" viewBox="0 0 1440 320">
    <defs>
      <linearGradient id="blueGradient2" x1="0" x2="1" y1="0" y2="1">
        <stop offset="0%" stop-color="#30a1f1"/>
        <stop offset="100%" stop-color="#0f66af"/>
      </linearGradient>
    </defs>
    <path fill="url(#blueGradient2)" fill-opacity="0.14" d="M0,224L60,197.3C120,171,240,117,360,117.3C480,117,600,171,720,197.3C840,224,960,224,1080,186.7C1200,149,1320,75,1380,37.3L1440,0L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
  </svg>

  <div class="relative max-w-5xl mx-auto px-3 sm:px-10 z-10">
    <div class="relative bg-white/90 rounded-3xl shadow-xl border border-[#30a1f1]/20 p-6 md:p-12 backdrop-blur-sm overflow-hidden">

      {{-- IMAGEN: decorativa, visible, esquina inferior derecha --}}
      <img 
        src="{{ asset('images/legal-privacy.png') }}" 
        alt="Ilustración legal" 
        class="hidden md:block absolute right-8 bottom-12 w-44 lg:w-80 z-30 opacity-95 drop-shadow-2xl transition duration-500"
        draggable="false"
        style="pointer-events:none;"
      >

      {{-- Encabezado --}}
      <div class="text-center mb-8 relative z-20">
        <h1 class="text-lg md:text-2xl font-extrabold font-heading text-gray-900 tracking-tight mb-2 drop-shadow-sm uppercase">
          {{ __('legal.privacy.title') }}
        </h1>
        <span class="block mx-auto h-[3px] w-16 md:w-24 rounded-full bg-gradient-to-r from-[#0f66af] via-[#30a1f1] to-[#0f66af] opacity-70 mb-2"></span>
        <p class="text-xs text-gray-400 tracking-wide">{{ __('legal.privacy.last_update') }}</p>
      </div>

      {{-- Contenido Legal --}}
      <div class="space-y-6 text-sm md:text-base leading-relaxed text-gray-800 relative z-10">

        {{-- Sección 1 --}}
        <section class="bg-white/95 p-4 rounded-2xl shadow border border-[#0f66af1a] transition duration-300 hover:shadow-2xl hover:-translate-y-1 animate-fade-in">
          <h2 class="font-bold text-base md:text-lg text-[#0f66af] mb-2">
            {{ __('legal.privacy.sections.who.title') }}
          </h2>
          <p>{!! __('legal.privacy.sections.who.text') !!}</p>
        </section>

        {{-- Sección 2 --}}
        <section class="bg-[#eaf3fd]/60 p-4 rounded-2xl shadow-sm border border-[#30a1f1]/10 transition duration-300 hover:shadow-xl hover:-translate-y-1 animate-fade-in">
          <h2 class="font-bold text-base md:text-lg text-[#0f66af] mb-2">
            {{ __('legal.privacy.sections.collect.title') }}
          </h2>
          <ul class="list-disc pl-7 space-y-1">
            @foreach(__('legal.privacy.sections.collect.list') as $item)
              <li>{{ $item }}</li>
            @endforeach
          </ul>
        </section>

        {{-- Sección 3 --}}
        <section class="bg-white/95 p-4 rounded-2xl shadow border border-[#0f66af1a] transition duration-300 hover:shadow-2xl hover:-translate-y-1 animate-fade-in">
          <h2 class="font-bold text-base md:text-lg text-[#0f66af] mb-2">
            {{ __('legal.privacy.sections.use.title') }}
          </h2>
          <ul class="list-disc pl-7 space-y-1">
            @foreach(__('legal.privacy.sections.use.list') as $item)
              <li>{{ $item }}</li>
            @endforeach
          </ul>
        </section>

        {{-- Sección 4 --}}
        <section class="bg-[#eaf3fd]/60 p-4 rounded-2xl shadow-sm border border-[#30a1f1]/10 transition duration-300 hover:shadow-xl hover:-translate-y-1 animate-fade-in">
          <h2 class="font-bold text-base md:text-lg text-[#0f66af] mb-2">
            {{ __('legal.privacy.sections.cookies.title') }}
          </h2>
          <ul class="list-disc pl-7 space-y-1">
            @foreach(__('legal.privacy.sections.cookies.list') as $item)
              <li>{{ $item }}</li>
            @endforeach
          </ul>
          <p class="mt-2">{{ __('legal.privacy.sections.cookies.note') }}</p>
        </section>

        {{-- Sección 5 --}}
        <section class="bg-white/95 p-4 rounded-2xl shadow border border-[#0f66af1a] transition duration-300 hover:shadow-2xl hover:-translate-y-1 animate-fade-in">
          <h2 class="font-bold text-base md:text-lg text-[#0f66af] mb-2">
            {{ __('legal.privacy.sections.share.title') }}
          </h2>
          <ul class="list-disc pl-7 space-y-1">
            @foreach(__('legal.privacy.sections.share.list') as $item)
              <li>{{ $item }}</li>
            @endforeach
          </ul>
        </section>

        {{-- Sección 6 --}}
        <section class="bg-[#eaf3fd]/60 p-4 rounded-2xl shadow-sm border border-[#30a1f1]/10 transition duration-300 hover:shadow-xl hover:-translate-y-1 animate-fade-in">
          <h2 class="font-bold text-base md:text-lg text-[#0f66af] mb-2">
            {{ __('legal.privacy.sections.security.title') }}
          </h2>
          <p>{{ __('legal.privacy.sections.security.text') }}</p>
        </section>

        {{-- Sección 7 --}}
        <section class="bg-white/95 p-4 rounded-2xl shadow border border-[#0f66af1a] transition duration-300 hover:shadow-2xl hover:-translate-y-1 animate-fade-in">
          <h2 class="font-bold text-base md:text-lg text-[#0f66af] mb-2">
            {{ __('legal.privacy.sections.rights.title') }}
          </h2>
          <ul class="list-disc pl-7 space-y-1">
            @foreach(__('legal.privacy.sections.rights.list') as $item)
              <li>{{ $item }}</li>
            @endforeach
          </ul>
          <p class="mt-2">{!! __('legal.privacy.sections.rights.note') !!}</p>
        </section>

        {{-- Sección 8 --}}
        <section class="bg-[#eaf3fd]/60 p-4 rounded-2xl shadow-sm border border-[#30a1f1]/10 transition duration-300 hover:shadow-xl hover:-translate-y-1 animate-fade-in">
          <h2 class="font-bold text-base md:text-lg text-[#0f66af] mb-2">
            {{ __('legal.privacy.sections.links.title') }}
          </h2>
          <p>{{ __('legal.privacy.sections.links.text') }}</p>
        </section>

        {{-- Sección 9 --}}
        <section class="bg-white/95 p-4 rounded-2xl shadow border border-[#0f66af1a] transition duration-300 hover:shadow-2xl hover:-translate-y-1 animate-fade-in">
          <h2 class="font-bold text-base md:text-lg text-[#0f66af] mb-2">
            {{ __('legal.privacy.sections.changes.title') }}
          </h2>
          <p>{!! __('legal.privacy.sections.changes.text') !!}</p>
        </section>

        {{-- Sección 10 --}}
        <section class="bg-[#eaf3fd]/60 p-4 rounded-2xl shadow-sm border border-[#30a1f1]/10 transition duration-300 hover:shadow-xl hover:-translate-y-1 animate-fade-in">
          <h2 class="font-bold text-base md:text-lg text-[#0f66af] mb-2">
            {{ __('legal.privacy.sections.contact.title') }}
          </h2>
          <p>{!! __('legal.privacy.sections.contact.text') !!}</p>
        </section>

      </div>
    </div>
  </div>
</div>
@endsection
