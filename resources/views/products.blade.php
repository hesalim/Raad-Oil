<x-layout :isHome="true">
 <section class="relative h-[75vh] max-h-[800px] overflow-hidden bg-gray-100 hero">
  <!-- Background Image with slow zoom -->
  <img
    src="/images/3.WebP"
    alt="Raad Products"
    class="absolute inset-0 w-full h-full object-cover  z-0 hero-img"
     style="object-position: 50% 20%;"
    loading="eager"
    fetchpriority="high"
  />

  <!-- Dark Overlay + gentle blur -->
  <div class="absolute inset-0 bg-black/50 backdrop-blur-sm z-10"></div>

  <!-- Hero Text with coordinated fade-up -->
  <div class="relative z-20 flex flex-col justify-center items-center text-center h-full px-4 space-y-2">
    <h1 class="text-4xl md:text-5xl font-extrabold text-white drop-shadow-lg hero-text" style="animation-delay:0.2s">
      Discover Our <span class="text-yellow-500 hero-text-inline" style="animation-delay:0.4s">Products</span>
    </h1>
    <p class="text-lg md:text-xl text-white/90 max-w-2xl hero-text" style="animation-delay:0.6s">
      Lebanese authenticity, preserved in every jar and bottle.
    </p>
  </div>

  <style>
    /* 1. Slow, infinite zoom on the image */
    @keyframes slowZoom {
      from { transform: scale(1.1); }
      to   { transform: scale(1.2); }
    }
    .hero-img {
      transform-origin: center center;
      animation: slowZoom 30s ease-in-out infinite alternate;
      will-change: transform;
    }

    /* 2. Fade-up for all text elements */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(1rem); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .hero-text,
    .hero-text-inline {
      opacity: 0;
      animation: fadeUp 0.8s ease-out forwards;
    }
  </style>
</section>



<section id="shop-by-category" class="pt-16 pb-24 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Heading -->
    <div class="mb-16 text-center">
      <h2 class="text-4xl font-extrabold text-gray-900">
        Explore by <span class="text-yellow-500">Category</span>
      </h2>
      <p class="mt-4 text-lg text-gray-500">
        Discover our curated selection of premium Lebanese products.
      </p>
    </div>

    <!-- Category Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8" data-aos="fade-up" data-aos-delay="100">

      <!-- Category Card Template -->
      <a href="/products/extra-virgin-olive-oil" class="group relative block overflow-hidden rounded-2xl shadow-md hover:shadow-lg transform hover:scale-[1.02] transition duration-300">
        <img src="/images/oilproduct.jpg" alt="Extra Virgin Olive Oil" class="w-full h-80 object-cover transition duration-300 group-hover:brightness-105" loading="lazy" />
        <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent p-4">
          <h3 class="text-white text-lg font-semibold drop-shadow">Extra Virgin Olive Oil</h3>
        </div>
      </a>

      <a href="/products/olives" class="group relative block overflow-hidden rounded-2xl shadow-md hover:shadow-lg transform hover:scale-[1.02] transition duration-300">
        <img src="/images/oliveproduct.jpg" alt="Olives" class="w-full h-80 object-cover transition duration-300 group-hover:brightness-105" loading="lazy" />
        <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent p-4">
          <h3 class="text-white text-lg font-semibold drop-shadow">Olives</h3>
        </div>
      </a>

      <a href="/products/pickles" class="group relative block overflow-hidden rounded-2xl shadow-md hover:shadow-lg transform hover:scale-[1.02] transition duration-300">
        <img src="/images/pickledproduct.jpg" alt="Pickles" class="w-full h-80 object-cover transition duration-300 group-hover:brightness-105" loading="lazy" />
        <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent p-4">
          <h3 class="text-white text-lg font-semibold drop-shadow">Pickles</h3>
        </div>
      </a>

      <a href="/products/starters" class="group relative block overflow-hidden rounded-2xl shadow-md hover:shadow-lg transform hover:scale-[1.02] transition duration-300">
        <img src="/images/startersproduct.jpg" alt="Starters" class="w-full h-80 object-cover transition duration-300 group-hover:brightness-105" loading="lazy" />
        <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent p-4">
          <h3 class="text-white text-lg font-semibold drop-shadow">Starters</h3>
        </div>
      </a>

      <a href="/products/vinegar-syrup-molasses" class="group relative block overflow-hidden rounded-2xl shadow-md hover:shadow-lg transform hover:scale-[1.02] transition duration-300">
        <img src="/images/vinegarproduct.jpg" alt="Vinegar, Syrup, and Molasses" class="w-full h-80 object-cover transition duration-300 group-hover:brightness-105" loading="lazy" />
        <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent p-4">
          <h3 class="text-white text-lg font-semibold drop-shadow">Vinegar, Syrup & Molasses</h3>
        </div>
      </a>

      <a href="/products/lebanese-specialties" class="group relative block overflow-hidden rounded-2xl shadow-md hover:shadow-lg transform hover:scale-[1.02] transition duration-300">
        <img src="/images/applevinegarproduct.jpg" alt="Lebanese Specialties" class="w-full h-80 object-cover transition duration-300 group-hover:brightness-105" loading="lazy" />
        <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent p-4">
          <h3 class="text-white text-lg font-semibold drop-shadow">Lebanese Specialties</h3>
        </div>
      </a>

      <a href="/products/sweets" class="group relative block overflow-hidden rounded-2xl shadow-md hover:shadow-lg transform hover:scale-[1.02] transition duration-300">
        <img src="/images/lemonjuiceproduct.jpg" alt="Sweets" class="w-full h-80 object-cover transition duration-300 group-hover:brightness-105" loading="lazy" />
        <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent p-4">
          <h3 class="text-white text-lg font-semibold drop-shadow">Sweets</h3>
        </div>
      </a>

      <a href="/products/olive-oil-soap" class="group relative block overflow-hidden rounded-2xl shadow-md hover:shadow-lg transform hover:scale-[1.02] transition duration-300">
        <img src="/images/oliveproduct.jpg" alt="Natural Olive Oil Soap" class="w-full h-80 object-cover transition duration-300 group-hover:brightness-105" loading="lazy" />
        <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/60 via-black/30 to-transparent p-4">
          <h3 class="text-white text-lg font-semibold drop-shadow">Natural Olive Oil Soap</h3>
        </div>
      </a>

    </div>

    <!-- CTA Button -->
    <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="200">
      <a href="/allproducts" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-8 py-3 rounded-full shadow transition">
        View All Products
      </a>
    </div>
  </div>
</section>





</x-layout>
