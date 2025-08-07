<header 
  x-data="{ mobileMenuOpen: false, scrolled: false, isHome: {{ $isHome ? 'true' : 'false' }} }"
  x-init="
    isHome = {{ $isHome ? 'true' : 'false' }};
    window.addEventListener('scroll', () => { scrolled = window.scrollY > 50 });
  "
  :class="scrolled || !isHome 
          ? 'bg-yellow-500 shadow-md text-white' 
          : 'bg-transparent text-white'"
  class="fixed top-0 left-0 right-0 z-50 transition-all duration-300"
>


  <div class="w-full flex justify-between items-center px-11 py-6 bg-transparent">



    <!-- Logo -->
    <a href="/" class="flex-shrink-0">
      <img src="/images/logo.png" alt="Raad Oil Logo" class="h-10">
    </a>

    <!-- Desktop Nav -->
    <nav class="hidden md:flex items-center space-x-6 text-sm font-medium">
      <a href="/" class="hover:text-yellow-300">Home</a>
      <a href="/products" class="hover:text-yellow-300">Products</a>
      <a href="/contact" class="hover:text-yellow-300">Contact</a>
      <a href="/catalog" class="hover:text-yellow-300">Catalog</a>
    </nav>

    <!-- Mobile toggle -->
    <button class="md:hidden focus:outline-none" @click="mobileMenuOpen = !mobileMenuOpen">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div
    x-show="mobileMenuOpen"
    x-transition
    class="md:hidden bg-black/80 px-6 pb-4 space-y-2"
  >
    <a href="/" class="block py-2 hover:text-yellow-300">Home</a>

  
   <a href="/products" class="block py-2 hover:text-yellow-300">Products</a>

    <a href="/contact" class="block py-2 hover:text-yellow-300">Contact</a>
    <a href="/catalog" class="block py-2 hover:text-yellow-300">Catalog</a>
  </div>
</header>
