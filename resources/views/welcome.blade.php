<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <title>NIN Generator</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    </head>
    <header class="flex justify-between  border-border pr-5  bg-gray-400 h-16 items-center">

        <div class="flex justify-between gap-10">
            <div>
                <img src="{{ asset('images/')}}" alt="LOGO">
            </div>
            <ul class="flex justify-center gap-5 ml-4">
                <a href="" class="border-blue-200 hover:border-b-4 transition ease-out"><li> Generate-NIN</li></a>
                <a href="" class="border-blue-200 hover:border-b-4 transition ease-out"><li>About</li></a>
                <a href="" class="border-blue-200 hover:border-b-4 transition ease-out"><li>Contact</li></a>
                       </ul>
        </div>
        <div class="flex justify-around mr-10 gap-5">
            <a href="" class="px-2 py-2 text-sm rounded-md border-border bg-red-500 text-white hover:bg-gray-800 transition-colors">Get Started</a>
            <a href="" class="px-2 py-2 text-sm rounded-md bg-white text-red-500 hover:bg-gray-800 transition-colors"> Contact Us</a>
    </header>

    <body class="bg-background h-full">
       
    </body>
    <footer class="flex flex-col px-10">
        <div >
            <p class="bold  font-bold text-4xl text-center mb-16">Mustard <strong class="text-sm -ml-2">HQ</strong></p>
        </div>
        <div class="flex justify-center mb-10 ">
            <ul class="flex gap-10">
            <a href=""><li>About Us</li></a>
            <a href=""><li>Contact Us</li></a>
            <a href=""><li>FAQs </li></a>
            <a href=""><li>Privacy Policy</li></a>
            <a href=""><li>Terms and Conditions</li></a>
        </ul>
        </div>
        <div class="border-b-2 border-gray-800 "></div>
        <div class="flex justify-between">
            <p class=" mt-4">@copyright </p>
            <div class="flex gap-4 mb-10  mt-4">
                <p>Privacy Policy</p>
                <p>Terms and Condition </p>
                <p>Cookies Policy</p>
            </div>
            
        </div>
    
    </footer>
</html>
