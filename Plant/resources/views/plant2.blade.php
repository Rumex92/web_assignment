<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>plant2</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>

    </head>

    <body style="background-color: beige;">
    <header class="absolute inset-x-0 top-0 z-50">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <h3>ThePlantGallery<h3>
        </a>
      </div>
      <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
      <a href="/welcome" class="text-sm font-semibold leading-6 text-gray-900">Home</a>
        <a href="/plant1" class="text-sm font-semibold leading-6 text-gray-900">Gallery</a>
        <a href="/plant2" class="text-sm font-semibold leading-6 text-gray-900">Plant Lists</a>
       
      </div>
     
    </nav>
    <div class="container mx-auto flex flex-col items-center justify-center h-screen">
    <h3 class="text-center mb-4">Indoor House Plants</h3>
    <ul role="list" class="divide-y divide-gray-100 w-full max-w-md">
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex items-center">
                <img class="h-20 w-20 flex-none rounded-full bg-gray-50" src="https://www.plantandflowerinfo.com/images/english-ivy-houseplant-potted.jpg" alt="">
                <div class="ml-4">
                    <p class="text-sm font-semibold leading-6 text-gray-900">
                     English Ivy
                    </p>
                    <p class="mt-1 text-xs leading-5 text-gray-500 max-w-xs">English Ivy is used as a house plant. I find English Ivy is much easier to grow outdoors but with good light you can successfully grow English Ivy at home, indoors.</p>
                </div>
            </div>
        </li>
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex items-center">
                <img class="h-20 w-20 flex-none rounded-full bg-gray-50" src="https://www.plantandflowerinfo.com/images/nephthytis-houseplant.jpg" alt="">
                <div class="ml-4">
                    <p class="text-sm font-semibold leading-6 text-gray-900">Nephthytis</p>
                    <p class="mt-1 text-xs leading-5 text-gray-500 max-w-xs">Nephthytis is an easy house plant to care for and grow. Will do best with bright, indirect light. Will tolerate lower light levels.</p>
                </div>
            </div>
        </li>
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex items-center">
                <img class="h-20 w-20 flex-none rounded-full bg-gray-50" src="https://www.plantandflowerinfo.com/images/fittonia-house-plants.jpg" alt="">
                <div class="ml-4">
                    <p class="text-sm font-semibold leading-6 text-gray-900">Fittonia</p>
                    <p class="mt-1 text-xs leading-5 text-gray-500 max-w-xs">Fittonia house plant is a creeping plant with leaves of white, red or pink veins and small white flowers. A pretty little house plant that will add color to your home.</p>
                </div>
            </div>
        </li>
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex items-center">
                <img class="h-20 w-20 flex-none rounded-full bg-gray-50" src="https://www.plantandflowerinfo.com/images/aglaonema-houseplant-red.jpg" alt="">
                <div class="ml-4">
                    <p class="text-sm font-semibold leading-6 text-gray-900">Aglaonema</p>
                    <p class="mt-1 text-xs leading-5 text-gray-500 max-w-xs">Aglaonema house plants are easy care. There are many varieties and Aglaonema house plant will grow in medium to bright indirect light.</p>
                </div>
            </div>
        </li>
        <li class="flex justify-between gap-x-6 py-5">
            <div class="flex items-center">
                <img class="h-20 w-20 flex-none rounded-full bg-gray-50" src="https://www.plantandflowerinfo.com/images/pothos-houseplant.jpg" alt="">
                <div class="ml-4">
                    <p class="text-sm font-semibold leading-6 text-gray-900">Golden Pothos
</p>
                    <p class="mt-1 text-xs leading-5 text-gray-500 max-w-xs">Golden Pothos, a popular plant for the home, is a trailing or climbing plant. Medium to bright light is best, can be kept in lower light. Easy care house plant.</p>
                </div>
            </div>
        </li>
    </ul>
</div>




</body>
</html>