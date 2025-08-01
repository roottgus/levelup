<!DOCTYPE html>
<html lang="{{ session('locale', 'es') }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ __('messages.splash_title') }}</title>
  @vite(['resources/css/app.css'])
</head>
<body class="overflow-hidden">
  {{-- Incluye el partial de splash --}}
  @include('partials.splash')

  {{-- Bundle JS --}}
  @vite(['resources/js/app.js'])

  {{-- Scripts inyectados por el partial --}}
  @stack('scripts')
</body>
</html>
