@props(['active' => false])
<a {{ $attributes }} class="{{ $active ? 'nav-link active bg-success fw-bold' 
    : 'nav-link fw-normal text-dark'}} dropdown-item border-bottom" >{{ $slot }}</a>