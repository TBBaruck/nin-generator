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
    <x-header class="z-50 "/>
    <body class="h-screen flex flex-col bg-gray-50">
        <main class="flex-grow space-y-10 mx-10 pt-20">

            <section>
           <x-hero/>
            </section>

            <section class="lg:mb-0 md:mb-0 sm:mt-10">
                <x-company-profile/>
            </section>
            <section class="">
                <x-featured-one/>
            </section>
            <section class="">
                <x-contact-us-plain/>
            </section>
            
        </main>
    
        <x-footer/>
    </body>

</html>

