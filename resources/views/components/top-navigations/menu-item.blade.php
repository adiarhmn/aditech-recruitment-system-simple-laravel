 @props(['route', 'label', 'active' => null])

 @php
     $isActive = $active ?? request()->routeIs($route);

     $baseClass = 'px-3 py-2 rounded-md text-sm font-medium transition';
     $activeClass = 'text-white bg-blue-800';
     $inactiveClass = 'text-blue-100 hover:text-white hover:bg-blue-800';
 @endphp

 <a href="{{ route($route) }}"
     {{ $attributes->merge([
         'class' => $baseClass . ' ' . ($isActive ? $activeClass : $inactiveClass),
     ]) }}>
     {{ $label }}
 </a>
