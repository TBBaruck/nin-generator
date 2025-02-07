
<header class=" flex justify-between border-border pr-5  md:bg-white h-auto shadow-lg  py-5 relative z-50 items-center">

    <div class="flex justify-between gap-10">
        <div class="ml-5 m-2">
            <img src="{{ asset('images/province.jpg')}}" alt="LOGO" class="max-w-[60px] h-auto rounded-3xl">
        </div>
        <div class="hidden md:flex justify-between gap-10 ml-4 cursor-pointer lg:mb-2 ">
          <x-nav-link href="/generate-nin" :active="request()->is('generate-nin')">Generate-NIN</x-nav-link> 
          <x-nav-link href="/about-us" :active="request()->is('about us')">About Us</x-nav-link> 
          <x-nav-link href="/contact-us" :active="request()->is('contact us')">Contact Us</x-nav-link > 
        </div>
    </div>  

     <!-- Mobile Menu Button -->
     <button id="menu-toggle" class="md:hidden focus:outline-none">
        <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
        <svg id="close-icon" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

     <!-- Mobile Navigation -->
     <nav id="mobile-menu" class=" bg-white h-[300px] hidden md:hidden absolute top-[104px] right-0 mr-1  p-5 w-48  text-orange-600  ">
        <ul class="flex flex-col space-y-2 nav__items  absolute  rounded-2xl ">
            <li><x-nav-link href="/generate-nin" :active="request()->is('generate-nin') " >Generate-NIN</x-nav-link></li>
            <li><x-nav-link href="/about-us" :active="request()->is('about us')" >About Us</x-nav-link></li>
            <li><x-nav-link href="/contact-us" :active="request()->is('contact us')" >Contact Us</x-nav-link></li>
            <li><x-nav-link href="/contact-us" :active="request()->is('contact us')" >Contact Us</x-nav-link></li>
            <li><x-nav-link href="/contact-us" :active="request()->is('contact us')" >Contact Us</x-nav-link></li>
            <li><x-nav-link href="/contact-us" :active="request()->is('contact us')" >Contact Us</x-nav-link></li>
        </ul>
    </nav>

    <div class="hidden md:flex justify-around mr-10 gap-5">
        <a href="" class="px-2 py-2 text-sm rounded-md border-border bg-orange-600 text-white font-bold hover:bg-gray-800 transition-colors duration-500">Get Started</a>
        <a href="" class="px-3 py-2 text-sm rounded-md border border-orange-600 bg-white text-orange-600 font-bold hover:bg-gray-800 transition-colors duration-500"> Sign In</a>
</header>



<style>

.nav__items{
    position: absolute; 
 
}
    .nav__items {
    width: 100%; 
    height: auto;
    display: flex; 
    align-items: center; 
    box-shadow: -2rem 3rem 7rem rgba(0, 0, 0, 0.07);
    border-top: 1px solid var(--color-bg); 
    animation: animateDropdown 3s 0s ease forwards; 
    opacity: 0; 
    transform-origin:top;
}

.nav__items li:nth-child(2){
    animation-delay: 200ms;
}
.nav__items li:nth-child(3){
    animation-delay: 400ms;
}
.nav__items li:nth-child(4){
    animation-delay: 600ms;
}
.nav__items li:nth-child(5){
    animation-delay: 800ms;
}

    @keyframes animateDropdown {
    0%{
        transform: rotateX(90deg); 
    }
    100% {
        transform: rotateX(0deg); 
        opacity: 1;
    }
}
</style>

     
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const menuToggle = document.getElementById("menu-toggle");
        const mobileMenu = document.getElementById("mobile-menu");
        const menuIcon = document.getElementById("menu-icon");
        const closeIcon = document.getElementById("close-icon");

        menuToggle.addEventListener("click", function () {
            mobileMenu.classList.toggle("hidden");  // Show/hide menu
            menuIcon.classList.toggle("hidden");   // Show/hide hamburger icon
            closeIcon.classList.toggle("hidden");  // Show/hide close icon
        });
    });
</script>


