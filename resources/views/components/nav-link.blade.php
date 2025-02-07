
@props(['active' => false])
<a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-900' }} relative  list-none lg:mt-auto md:mt-4
    transition-all duration-700 ease-in-out  
    md:before:absolute before:bottom-0 before:left-0 before:w-full before:h-0.5 before:bg-orange-600
    md:before:transform before:scale-x-0 before:transition-transform before:duration-500 before:ease-in-out 
    hover:before:scale-x-100 font-bold"

    aria-current="{{ $active ? 'page' : 'false' }}"
    {{$attributes}}><li>   {{$slot}}</li>
 
</a>

