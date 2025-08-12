<x-layout :isHome="true">


     <section class="relative h-screen overflow-hidden">
    <!-- Optimized background image -->
    <img
      src="https://raadoilimages.s3.eu-north-1.amazonaws.com/herosection5.WebP"
      alt="Olive background"
      class="absolute inset-0 w-full h-full object-cover z-0"
      loading="eager"
      fetchpriority="high"
    />

    <!-- Dark overlay -->
    <div class="absolute inset-0 bg-black/40 z-10"></div>

    <!-- Content -->
    <div class="relative z-20 flex items-center h-full">
      <div class="max-w-2xl px-6 md:px-12">
        <h1 class="text-5xl font-bold leading-tight text-white">
          <span>Discover the <span class="text-yellow-500">Legacy</span></span><br />
          of Raad Olive Oil
        </h1>

        <!-- Optional underline -->
        <svg class="w-40 h-8 mt-4" viewBox="0 0 200 40" fill="none">
          <path
            class="underline-draw"
            d="M0,20 C50,0 150,40 200,20"
            stroke="#FBBF24"
            stroke-width="6"
            stroke-linecap="round"
          />
        </svg>

        <!-- LCP element -->
        <p class="mt-6 text-white text-lg sm:text-xl leading-relaxed">
          Taste the richness of Lebanese soil and soul, in every drop, spoon, and spread.
        </p>

        <a
          href="/products"
          class="mt-8 inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-8 py-4 rounded-full shadow-lg transition-transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-opacity-50"
        >
          Explore Our Products
        </a>
      </div>
    </div>
  </section>

  <style>
    /* Optional curved underline animation (not LCP-blocking) */
    @keyframes drawUnderline {
      to {
        stroke-dashoffset: 0;
      }
    }
    .underline-draw {
      stroke-dasharray: 300;
      stroke-dashoffset: 300;
      animation: drawUnderline 1s ease-out 0.4s forwards;
    }
  </style>

  <!-- Keep Alpine.js if needed for interactivity -->
  <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

  <!-- AOS Scroll Animation (optional) -->
  <!-- ⚠️ Not applied to any LCP element, safe to leave -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => AOS.init());
  </script>

<!-- Our Story Section -->
<section
  id="our-story"
  class="relative overflow-hidden py-32 px-8 lg:px-16 bg-gradient-to-b from-white to-gray-50"
>
  <!-- Subtle Tiled Pattern Background -->
  <div
    class="absolute inset-0 bg-[url('/images/pattern-light.svg')] opacity-10 pointer-events-none"
  ></div>

  <!-- Top-Left Decorative Accent -->
  <img
    src="https://raadoilimages.s3.eu-north-1.amazonaws.com/DecorativeTopLeft.WebP"
    alt=""
    class="absolute top-0 left-0 w-64 md:w-80 opacity-30 pointer-events-none transform -translate-x-8 -translate-y-8 -rotate-12"
  />

  <div class="relative max-w-8xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
    <!-- Left: Hero Image with Hover Scale -->
    <figure
      data-aos="fade-right"
      class="overflow-hidden rounded-3xl shadow-2xl transform transition-transform duration-500 hover:scale-105 hidden md:block"
    >
      <img
        src="https://raadoilimages.s3.eu-north-1.amazonaws.com/OurStory1.WebP"
        alt="Raad Oil Origins"
        class="w-full h-full object-cover"
      />
      <figcaption class="sr-only">Early olive orchard and press</figcaption>
    </figure>

    <!-- Right: Text Content -->
    <div data-aos="fade-left" class="space-y-8">
      <!-- Decorative Separator + Heading -->
      <div>
        <span class="block h-1 w-20 bg-yellow-500 rounded-full mb-4"></span>
        <h2 class="text-4xl lg:text-5xl font-extrabold text-gray-900 tracking-tight">
          Our <span class="text-yellow-500">Story</span>
        </h2>
      </div>

      <!-- Paragraphs with Drop Cap and Accent Bar -->
      <div class="prose prose-lg prose-gray relative">
        <!-- vertical accent bar -->
       

        <p class="pl-8">
          In 1966, it all started in a small village in North Lebanon called Daher El Ain Al Koura. Georges <span class="italic font-semibold">RAAD</span> aimed to sell high-quality olive oil and create a trademark by utilizing his “old stone” olive press and orchard. Unfortunately, the civil war halted production and his dream.
        </p>
        <p class="pl-8">
          In 1994, his son, Jean <span class="italic font-semibold">RAAD</span>, revived the vision, modernizing the concept and expanding the brand. From a small food business, Jean grew the company, adding products to the <span class="italic font-semibold">RAAD</span> family and reaching national and international markets.
        </p>
        <p class="pl-8">
          Focused on quality, the company earned the ISO 22000 food safety certificate and upgraded to FSSC 22000 in 2019. Today, <span class="italic font-semibold">RAAD</span> products are recognized globally, shipped to Australia, Ecuador, and Suriname.
        </p>
      </div>

    <!-- Open Video Button -->
<div data-aos="fade-up" class="mt-8 flex justify-center md:justify-start">
  <button
    id="openVideoBtn"
    type="button"
    class="inline-flex items-center px-6 py-3 bg-yellow-500 text-white font-medium rounded-full shadow-xl hover:bg-yellow-600 transition-shadow duration-300"
  >
    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
      <path d="M4.5 3.5v13l11-6.5-11-6.5z" />
    </svg>
    Watch Our Story
  </button>
</div>



    </div>
  </div>

  <!-- Bottom-Right Decorative Accent -->
  <img
    src="https://raadoilimages.s3.eu-north-1.amazonaws.com/DecorativeOurStory.WebP"
    alt=""
    class="absolute bottom-0 right-0 w-64 md:w-80 opacity-20 pointer-events-none transform translate-x-12 translate-y-12"
  />
 <!-- Video Modal -->
<div id="videoModal" class="fixed inset-0 z-[999] hidden items-center justify-center" aria-hidden="true">
  <!-- Backdrop -->
  <div id="videoBackdrop" class="absolute inset-0 bg-black/70"></div>

  <!-- Dialog  -->
  <div role="dialog" aria-modal="true" aria-labelledby="videoTitle"
       class="relative z-10 mx-4 w-full max-w-4xl rounded-2xl bg-white shadow-2xl overflow-hidden">

    <!-- Video wrapper -->
    <div class="aspect-video w-full bg-black relative">
      <video id="ourStoryVideo" class="h-full w-full" controls playsinline>
        <source src="/media/ourstory.mp4" type="video/mp4" />
        Your browser does not support the video tag.
      </video>

      <!-- Close button -->
      <button
        id="closeVideoBtn"
        type="button"
        class="absolute right-3 top-3 z-20 inline-flex h-10 w-10 items-center justify-center rounded-full bg-black/70 text-white hover:bg-black focus:outline-none"
        aria-label="Close video"
      >
        ✕
      </button>
    </div>

    <h3 id="videoTitle" class="sr-only">Our Story</h3>
  </div>
</div>

<script>
  (function () {
    const openBtn  = document.getElementById('openVideoBtn');
    const modal    = document.getElementById('videoModal');
    const backdrop = document.getElementById('videoBackdrop');
    const closeBtn = document.getElementById('closeVideoBtn');
    const video    = document.getElementById('ourStoryVideo');

    function openModal() {
      modal.classList.remove('hidden');
      modal.classList.add('flex');
      modal.setAttribute('aria-hidden', 'false');
      try { video.currentTime = 0; } catch(e) {}
      video.play().catch(() => {});
      document.body.style.overflow = 'hidden';
    }

    function closeModal() {
      modal.classList.add('hidden');
      modal.classList.remove('flex');
      modal.setAttribute('aria-hidden', 'true');
      video.pause();
      try { video.currentTime = 0; } catch(e) {}
      document.body.style.overflow = '';
    }

    openBtn?.addEventListener('click', openModal);
    closeBtn?.addEventListener('click', closeModal);
    backdrop?.addEventListener('click', closeModal);
    window.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && !modal.classList.contains('hidden')) closeModal();
    });
  })();
</script>


</section>


<!--  Partners Section -->
<section class="py-24 bg-white relative overflow-hidden">
  <!-- Decorative Olive Background Accent -->
  <img src="/images/olive-accent.svg" alt="" class="absolute right-0 top-0 w-72 opacity-10 pointer-events-none hidden md:block">

  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
   <div class="mb-16 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-10">
  <!-- Left Heading (Title First) -->
  <div class="lg:w-1/2" data-aos="fade-right">
    <h2 class="text-4xl font-bold text-gray-900 tracking-tight">
      Excellence in Every Drop: <br>
      <span class="text-yellow-500">Why Partners Choose Us</span>
    </h2>
  </div>

  <!-- Right Paragraph -->
  <div class="lg:w-1/2" data-aos="fade-left">
    <p class="text-lg text-gray-500">
      From quality assurance to global logistics, our operations are built for <br class="hidden md:block"> performance and trust.
    </p>
  </div>
</div>


    <!-- Feature Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6" data-aos="fade-up" data-aos-delay="100">
      
      <!-- Card 1 -->
      <div class="group bg-gray-100 hover:bg-yellow-500 rounded-2xl p-6 transition-all duration-500 hover:-translate-y-1 hover:shadow-lg">
        <div class="bg-white ring-1 ring-yellow-400 rounded-full w-14 h-14 flex items-center justify-center mb-5">
          <svg width="28" height="28" viewBox="0 0 30 30" fill="none">
            <circle cx="15" cy="15" r="10" stroke="#D6A700" stroke-width="2" />
            <line x1="5" y1="15" x2="25" y2="15" stroke="#D6A700" stroke-width="2" />
            <path d="M15 5C18 8 18 22 15 25C12 22 12 8 15 5Z" stroke="#D6A700" stroke-width="2" />
          </svg>
        </div>
        <h4 class="text-xl font-semibold text-gray-900 group-hover:text-white">International Shipping</h4>
        <p class="text-sm text-gray-500 leading-5 mt-2 group-hover:text-white">
          We export high-quality oil products to partners and clients across the globe.
        </p>
      </div>

      <!-- Card 2 -->
      <div class="group bg-gray-100 hover:bg-yellow-500 rounded-2xl p-6 transition-all duration-500 hover:-translate-y-1 hover:shadow-lg">
        <div class="bg-white ring-1 ring-yellow-400 rounded-full w-14 h-14 flex items-center justify-center mb-5">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
            <path d="M3 3H16V16H3V3Z" stroke="#D6A700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M16 8H20L23 11V16H16V8Z" stroke="#D6A700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="5.5" cy="20.5" r="1.5" fill="#D6A700"/>
            <circle cx="18.5" cy="20.5" r="1.5" fill="#D6A700"/>
          </svg>
        </div>
        <h4 class="text-xl font-semibold text-gray-900 group-hover:text-white">Premium Quality</h4>
        <p class="text-sm text-gray-500 leading-5 mt-2 group-hover:text-white">
          Our products meet international standards, ensuring purity, performance, and safety.
        </p>
      </div>

      <!-- Card 3 -->
      <div class="group bg-gray-100 hover:bg-yellow-500 rounded-2xl p-6 transition-all duration-500 hover:-translate-y-1 hover:shadow-lg">
        <div class="bg-white ring-1 ring-yellow-400 rounded-full w-14 h-14 flex items-center justify-center mb-5">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
            <path d="M3 21V9L9 13V9L15 13V9L21 13V21H3Z" stroke="#D6A700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M7 21V17" stroke="#D6A700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11 21V17" stroke="#D6A700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M15 21V17" stroke="#D6A700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h4 class="text-xl font-semibold text-gray-900 group-hover:text-white">Modern Facilities</h4>
        <p class="text-sm text-gray-500 leading-5 mt-2 group-hover:text-white">
          Equipped with advanced refining technology for consistent quality and efficiency.
        </p>
      </div>

      <!-- Card 4 -->
      <div class="group bg-gray-100 hover:bg-yellow-500 rounded-2xl p-6 transition-all duration-500 hover:-translate-y-1 hover:shadow-lg">
        <div class="bg-white ring-1 ring-yellow-400 rounded-full w-14 h-14 flex items-center justify-center mb-5">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
            <circle cx="12" cy="12" r="10" stroke="#D6A700" stroke-width="2"/>
            <path d="M12 6V12L16 14" stroke="#D6A700" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h4 class="text-xl font-semibold text-gray-900 group-hover:text-white">On-Time Delivery</h4>
        <p class="text-sm text-gray-500 leading-5 mt-2 group-hover:text-white">
          We maintain reliable logistics to ensure timely shipments and customer satisfaction.
        </p>
      </div>
    </div>

    <!-- CTA Button -->
    <div class="text-center mt-12" data-aos="fade-up" data-aos-delay="200">
      <a href="/contact" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-6 py-3 rounded-full shadow-md transition">
        Become a Partner
      </a>
    </div>
  </div>
</section>



<!-- Products Section (Aligned with Previous Section Style) -->
<section id="products" class="bg-white py-24 px-6">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Title and Paragraph Row -->
    <div class="mb-16 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-10">
      <!-- Left: Heading -->
      <div class="lg:w-1/2" data-aos="fade-right">
        <h2 class="text-4xl font-extrabold text-gray-900">
          Our Finest Olive Oil: <br />
          <span class="text-yellow-500">Crafted with Care</span>
        </h2>
      </div>
      <!-- Right: Description -->
      <div class="lg:w-1/2" data-aos="fade-left">
        <p class="text-lg text-gray-500">
          Discover premium olive oil made from Lebanese olives, harvested with tradition and pressed for purity and taste.
        </p>
      </div>
    </div>

    <!-- Product Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8" data-aos="fade-up" data-aos-delay="100">
      
      <!-- Product Card -->
      <div class="bg-gray-50 rounded-2xl p-6 text-center shadow-sm hover:shadow-md transition-all">
        <img src="/images/products/PickledCucumber.WebP" alt="Extra Virgin" class="w-20 h-28 object-contain mx-auto mb-4" />
        <h3 class="text-lg font-semibold text-gray-900">Pickled Cucumber</h3>
        <p class="text-sm text-gray-500 mt-2 mb-4">600 g / 1Kg / 2.8 Kg / 10 Kg </p>
        <a href="/products" class="inline-block text-yellow-500 text-sm font-medium border border-yellow-600 rounded-full px-4 py-1.5 hover:bg-yellow-600 hover:text-white transition">
          Check Product
        </a>
      </div>

      <!-- Product Card -->
      <div class="bg-gray-50 rounded-2xl p-6 text-center shadow-sm hover:shadow-md transition-all">
        <img src="/images/products/PickledGreenOlives.WebP" alt="Organic Oil" class="w-20 h-28 object-contain mx-auto mb-4" />
        <h3 class="text-lg font-semibold text-gray-900">Green Olives</h3>
        <p class="text-sm text-gray-500 mt-2 mb-4">600 g / 1Kg / 2.8 Kg / 10 Kg</p>
        <a href="/products" class="inline-block text-yellow-500 text-sm font-medium border border-yellow-600 rounded-full px-4 py-1.5 hover:bg-yellow-600 hover:text-white transition">
          Check Product
        </a>
      </div>

      <!-- Product Card -->
      <div class="bg-gray-50 rounded-2xl p-6 text-center shadow-sm hover:shadow-md transition-all">
        <img src="/images/products/PickledSlicedTurnip.WebP" alt="Garlic Infused" class="w-20 h-28 object-contain mx-auto mb-4" />
        <h3 class="text-lg font-semibold text-gray-900">Pickled Turnip</h3>
        <p class="text-sm text-gray-500 mt-2 mb-4">600 g / 1Kg / 2.8 Kg / 10 Kg</p>
        <a href="/products" class="inline-block text-yellow-500 text-sm font-medium border border-yellow-600 rounded-full px-4 py-1.5 hover:bg-yellow-600 hover:text-white transition">
          Check Product
        </a>
      </div>

      <!-- Product Card -->
      <div class="bg-gray-50 rounded-2xl p-6 text-center shadow-sm hover:shadow-md transition-all">
        <img src="/images/products/PickledVineLeaves.WebP" alt="Signature Blend" class="w-20 h-28 object-contain mx-auto mb-4" />
        <h3 class="text-lg font-semibold text-gray-900">Pickled Vine Leaves</h3>
        <p class="text-sm text-gray-500 mt-2 mb-4">880 g / 2.3 Kg / 9 Kg</p>
        <a href="/products" class="inline-block text-yellow-500 text-sm font-medium border border-yellow-600 rounded-full px-4 py-1.5 hover:bg-yellow-600 hover:text-white transition">
          Check Product
        </a>
      </div>
    </div>

    <!-- CTA Button -->
    <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="200">
      <a href="/products" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-8 py-3 rounded-full shadow transition">
        View All Products
      </a>
    </div>
  </div>
</section>

<!-- Certifications Section -->
<section id="certifications" class="py-24 bg-white relative overflow-hidden">
  <!-- Decorative Olive Background Accent -->
  <img src="/images/olive-accent.svg" alt="" class="absolute right-0 top-0 w-72 opacity-10 pointer-events-none hidden md:block">

  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <!-- Title & Intro Row -->
    <div class="mb-16 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-10">
      <!-- Heading -->
      <div class="lg:w-1/2" data-aos="fade-right">
        <h2 class="text-4xl font-extrabold text-gray-900">
          Our Commitment to Quality:<br>
          <span class="text-yellow-500">Certifications</span>
        </h2>
      </div>
      <!-- Intro Text -->
      <div class="lg:w-1/2" data-aos="fade-left">
        <p class="text-lg text-gray-500">
          We adhere to the strictest food-safety and quality management standards, 
          validated through internationally recognized certifications.
        </p>
      </div>
    </div>

    <!-- Certification Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6" data-aos="fade-up" data-aos-delay="100">
      <!-- ISO 22000 Card -->
      <div class="group bg-gray-100 hover:bg-yellow-500 rounded-2xl p-6 transition-all duration-500 hover:-translate-y-1 hover:shadow-lg">
        <div class="bg-white ring-1 ring-yellow-400 rounded-full w-14 h-14 flex items-center justify-center mb-5">
          <!-- Replace with your ISO icon -->
          <svg width="28" height="28" viewBox="0 0 30 30" fill="none">
            
            <text x="50%" y="54%" text-anchor="middle" font-size=" twelve" fill="#D6A700">Logo</text>
          </svg>
        </div>
        <h4 class="text-xl font-semibold text-gray-900 group-hover:text-white">ISO 22000:2018</h4>
        <p class="text-sm text-gray-500 leading-5 mt-2 group-hover:text-white">
          Certified food-safety management system.
        </p>
      </div>
      <!-- FSSC 22000 Card -->
      <div class="group bg-gray-100 hover:bg-yellow-500 rounded-2xl p-6 transition-all duration-500 hover:-translate-y-1 hover:shadow-lg">
        <div class="bg-white ring-1 ring-yellow-400 rounded-full w-14 h-14 flex items-center justify-center mb-5">
          <!-- Replace with your FSSC icon -->
          <svg width="28" height="28" viewBox="0 0 30 30" fill="none">
            
            <text x="50%" y="54%" text-anchor="middle" font-size=" ten" fill="#D6A700">Logo</text>
          </svg>
        </div>
        <h4 class="text-xl font-semibold text-gray-900 group-hover:text-white">FSSC 22000</h4>
        <p class="text-sm text-gray-500 leading-5 mt-2 group-hover:text-white">
          Food-safety system certification scheme.
        </p>
      </div>
    </div>

    <!-- Download CTA -->
    <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="200">
      <a href="/downloads/certificates" 
         class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-8 py-3 rounded-full shadow transition">
        Download All Certificates
      </a>
    </div>
  </div>
</section>




</x-layout>
