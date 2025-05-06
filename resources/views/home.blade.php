@extends('layouts.app')

@section('title','Inicio – PublienRed')
@section('description','Innovación al clic de tu mano.')

@section('content')
  {{-- Hero + degradado abajo --}}
  <div class="relative">
    @include('partials.hero')
    <div class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-b from-transparent to-white pointer-events-none"></div>
  </div>

  {{-- Onda de transición Hero → Sobre Nosotros --}}
  <div class="relative">
    @include('partials.wave', ['flip' => false, 'color' => '#ffffff'])
  </div>

  {{-- Sobre Nosotros --}}
  <div class="relative bg-white">
    @include('partials.wave', ['flip' => true,  'color' => '#ffffff'])
    @include('partials.about')
    @include('partials.wave', ['flip' => false, 'color' => '#f7fafc'])
  </div>

  {{-- Servicios --}}
  <div class="relative bg-light">
    @include('partials.wave', ['flip' => true,  'color' => '#f7fafc'])
    @include('partials.services')
    @include('partials.wave', ['flip' => false, 'color' => '#ffffff'])
  </div>

  {{-- Tecnologías + Portafolio --}}
  <div class="relative bg-white">
    @include('partials.wave', ['flip' => true,  'color' => '#ffffff'])
    @include('partials.technologies')
    @include('partials.portfolio')
    @include('partials.wave', ['flip' => false, 'color' => '#f7fafc'])
  </div>

  {{-- FAQ --}}
  <div class="relative bg-light">
    @include('partials.wave', ['flip' => true,  'color' => '#f7fafc'])
    @include('partials.faq')
    @include('partials.wave', ['flip' => false, 'color' => '#ffffff'])
  </div>

  {{-- Contacto --}}
  <div class="relative bg-white">
    @include('partials.wave', ['flip' => true, 'color' => '#ffffff'])
    @include('partials.contact')
  </div>
@endsection
