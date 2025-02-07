
<div class="grid  lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-4 m-2 bg-gray-50 rounded-2xl">
    @php
        $images = [
            asset('images/province.jpg'),
            asset('images/company1.jpg'),
            asset('images/province.jpg'),
            asset('images/company1.jpg'),
            asset('images/province.jpg'),
            asset('images/company1.jpg'),
       
        ];
    @endphp
    @foreach ($images as $image)
        <div class="p-4 flex justify-center ">
            <img src="{{  $image }}" alt="Item" class=" rounded-xl w-full h-auto transform transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-lg">
        </div>
    @endforeach
</div>
