@props(['flip' => false, 'color' => 'white'])

@php
  // Si 'flip' es true, rotamos 180º
  $rotation = $flip ? 'rotate-180' : '';
  // El color de relleno puede controlarse con Tailwind utility bg-{color}
  // pero aquí lo fijamos al color de fondo de tu sección anterior.
@endphp

<div class="absolute {{ $rotation }} left-0 w-full overflow-hidden leading-none" style="height: 4rem;">
  <svg
    class="relative block w-full h-full"
    xmlns="http://www.w3.org/2000/svg"
    preserveAspectRatio="none"
    viewBox="0 0 1200 120"
  >
    <path
      d="M0 0L1200 0 0 120"
      fill="{{ $color === 'white' ? '#ffffff' : $color }}"
    />
  </svg>
</div>
