
<x-layout>
      <div class="pt-20 sm:pt-24">
    <section x-data="productList()" class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8 py-10">
          
      <!-- Heading -->
      <div class="text-center mb-14 relative z-10">
        <h2 class="text-4xl font-extrabold text-gray-900 leading-tight">
          Our <span class="text-yellow-500">Products</span>
        </h2>
        <p class="mt-4 text-lg text-gray-600">
         Everything from extra virgin olive oil to pickles, sweets, and more.
        </p>
      </div>



      
        <!-- Controls -->
        <div class="mb-8 grid grid-cols-1 gap-3 sm:grid-cols-3">
            <input x-model="query" type="text" placeholder="Search products…"
                   class="w-full rounded-xl border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400">

            <select x-model="category"
                    class="w-full rounded-xl border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                <option value="all">All categories</option>
                <template x-for="c in categories" :key="c">
                    <option :value="c" x-text="c"></option>
                </template>
            </select>

            <select x-model="sort"
                    class="w-full rounded-xl border border-gray-300 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                <option value="az">Sort: A → Z</option>
                <option value="za">Sort: Z → A</option>
            </select>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 md:grid-cols-4 xl:grid-cols-5">
            <template x-for="p in filtered" :key="p.id">
               <div class="bg-gray-50 rounded-2xl p-6 text-center shadow-sm hover:shadow-md transition">
  <img :src="p.image" :alt="p.name" class="w-20 h-28 object-contain mx-auto mb-4" />
  <!-- Optional tiny category label; remove if you don't want it -->
  <p class="text-[10px] font-semibold tracking-wide text-yellow-700 uppercase mb-1" x-text="p.category"></p>
  <h3 class="text-lg font-semibold text-gray-900" x-text="p.name"></h3>
  <p class="text-sm text-gray-500 mt-2 mb-4" x-text="p.size"></p>
  <button
  @click="openProduct(p)"
  class="inline-block text-yellow-600 text-sm font-medium border border-yellow-600 rounded-full px-4 py-1.5 hover:bg-yellow-600 hover:text-white transition">
  Check Product
</button>

</div>

            </template>
        </div>

        <!-- Empty state -->
        <div x-show="filtered.length === 0" class="mt-12 text-center text-gray-600">
            No products match your filters.
        </div>
<!-- Minimal Product Modal (compact) -->
<div x-show="open" x-transition.opacity style="display:none"
     class="fixed inset-0 z-50 bg-black/50 flex items-start sm:items-center justify-center p-4"
     @keydown.escape.window="closeProduct()" @click.self="closeProduct()">

  <div x-show="open" x-transition
       class="w-full max-w-3xl md:max-w-2xl bg-white rounded-2xl shadow-xl overflow-hidden">

    <!-- Header -->
<div class="px-4 sm:px-5 py-3 border-b flex items-center justify-between">
  <h2 class="text-base sm:text-lg font-semibold" x-text="selected?.name"></h2>
  <button @click="closeProduct()" class="p-2 rounded hover:bg-gray-100">✕</button>
</div>

    

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4 sm:p-5">
      <!-- Left: gallery (smaller) -->
      <div>
        <div class="w-full rounded-xl overflow-hidden bg-gray-50">
          <img
            :src="selected?.images?.[activeImgIndex] || selected?.image"
            :alt="selected?.name"
            class="mx-auto h-64 md:h-72 object-contain"
          />
        </div>

        <!-- smaller thumbs -->
        <div class="mt-3 grid grid-cols-3 gap-2" x-show="(selected?.images?.length || 0) > 1">
          <template x-for="(img,i) in (selected?.images || []).slice(0,3)" :key="i">
            <button @click="activeImgIndex = i"
                    class="aspect-square rounded-lg overflow-hidden border"
                    :class="i===activeImgIndex ? 'ring-2 ring-yellow-500 border-transparent' : 'border-gray-200'">
              <img :src="img" class="h-full w-full object-cover" :alt="`thumb ${i+1}`" />
            </button>
          </template>
        </div>
      </div>

      <!-- Right: details (tighter text sizes) -->
      <div class="space-y-4">
        <div>
          <h3 class="text-xl font-semibold" x-text="selected?.name"></h3>
          <p class="text-xs text-gray-500" x-text="selected?.size"></p>
        </div>

        <div>
          <h4 class="font-semibold text-sm mb-1">Description</h4>
          <p class="text-sm text-gray-700 leading-6" x-text="selected?.description || '—'"></p>
        </div>

        <div>
          <h4 class="font-semibold text-sm mb-2">Care</h4>
          <ul class="list-disc pl-5 space-y-1 text-sm text-gray-700">
            <template x-for="rule in (selected?.care || [])" :key="rule">
              <li x-text="rule"></li>
            </template>
            <li x-show="!selected?.care || selected?.care.length===0" class="text-gray-400">—</li>
          </ul>
        </div>

      
      </div>
    </div>
  </div>
</div>


</section>
</div>
    <script>
        function productList() {
            return {
                query: '',
               category: new URLSearchParams(window.location.search).get('category') || 'all',
// modal state
open: false,
selected: null,
activeImgIndex: 0,

openProduct(p) {
  // if product has only a single image, make it the gallery
  if (!p.images || p.images.length === 0) p.images = [p.image];
  this.selected = p;
  this.activeImgIndex = 0;
  this.open = true;
},
closeProduct() {
  this.open = false;
  this.selected = null;
},

                sort: 'az',
                categories: [
                    'Extra Virgin Olive Oil',
                    'Olives',
                    'Pickles',
                    'Starters',
                    'Vinegar, Syrup & Molasses',
                    'Lebanese Specialties',
                    'Sweets',
                    'Natural Olive Oil Soap'
                ],
                // Replace image paths with your assets and add as many as you want
                products: [
                    { id: 1,  name: 'Extra Virgin Olive Oil', size: '250 ml',  category: 'Extra Virgin Olive Oil', image: '{{ asset("images/products/OliveOil.WebP") }}', url: '#' },
                    

                    { id: 2,  name: 'Pickled Green Olives', size: '600 g',  category: 'Olives', image: '{{ asset("images/products/PickledGreenOlives.WebP") }}', url: '#' },
                    { id: 3,  name: 'Black Olives', size: '600 g',  category: 'Olives', image: '{{ asset("images/products/olives-black-600.jpg") }}', url: '#' },
                    { id: 4,  name: 'Pickled Olives Stuffed With Pepper', size: '500 ml', category: 'Olives', image: '{{ asset("images/products/OlivesStuffedWithPepper.WebP") }}', url: '#' },
                    { id: 5,  name: 'Sliced Black Olives', size: '1 L', category: 'Olives', image: '{{ asset("images/products/evoo-1l.jpg") }}', url: '#' },
                    { id: 6,  name: 'Sliced Green Olives', size: '1 L', category: 'Olives', image: '{{ asset("images/products/evoo-1l.jpg") }}', url: '#' },
                    
                    { id: 7,  name: 'Pickled Cucumber', size: '720 g',category: 'Pickles', image: '{{ asset("images/products/PickledCucumber.WebP") }}', url: '#' },
                    { id: 8,  name: 'Pickled Mekti',  size: '720 g',  category: 'Pickles', image: '{{ asset("images/products/PickledMekti.WebP") }}', url: '#' },
                    { id: 9,  name: 'Pickled Vine Leaves', size: '720 g',category: 'Pickles', image: '{{ asset("images/products/PickledVinesLeaves.WebP") }}', url: '#' },
                    { id: 10,  name: 'Pressed Vine Leaves', size: '720 g',category: 'Pickles', image: '{{ asset("images/products/pickles-baby-720.jpg") }}', url: '#' },
                    { id: 11,  name: 'Pickled Hot Green Pepper', size: '720 g',  category: 'Pickles', image: '{{ asset("images/products/PickledHotGreenPepper.WebP") }}', url: '#' },
                    { id: 12,  name: 'Pickled Sliced Turnip', size: '720 g',category: 'Pickles', image: '{{ asset("images/products/PickledSlicedTurnip.WebP") }}', url: '#' },
                    
                    { id: 13,  name: 'Mixed Pickles', size: '600 g', category: 'Starters', image: '{{ asset("images/products/MixedPickles.WebP") }}', url: '#' },
                    { id: 14,  name: 'Pickled Cornichon', size: '600 g', category: 'Starters', image: '{{ asset("images/products/starters-makdous.jpg") }}', url: '#' },
                    { id: 15,  name: 'Pickled Cabbage', size: '600 g', category: 'Starters', image: '{{ asset("images/products/PickledCabbage.WebP") }}', url: '#' },
                    { id: 16,  name: 'Eggplant Makdous', size: '600 g', category: 'Starters', image: '{{ asset("images/products/eggplantmakdous.WebP") }}', url: '#' },
                    { id: 17,  name: 'Lupin Beans', size: '600 g', category: 'Starters', image: '{{ asset("images/products/LupinBeans.WebP") }}', url: '#' },

                    { id: 18,  name: 'Promegranate', size: '1 L',category: 'Vinegar, Syrup & Molasses', image: '{{ asset("images/products/vinegar-apple-1l.jpg") }}', url: '#' },
                    { id: 19, name: 'Lemon Juice Substitute', size: '400 g',category: 'Vinegar, Syrup & Molasses', image: '{{ asset("images/products/molasses-grape.jpg") }}', url: '#' },
                    { id: 20, name: 'Mulberry', size: '400 g',category: 'Vinegar, Syrup & Molasses', image: '{{ asset("images/products/molasses-grape.jpg") }}', url: '#' },
                    { id: 21, name: 'Red Vinegar', size: '400 g',category: 'Vinegar, Syrup & Molasses', image: '{{ asset("images/products/molasses-grape.jpg") }}', url: '#' },
                    { id: 22, name: 'White Vinegar', size: '400 g',category: 'Vinegar, Syrup & Molasses', image: '{{ asset("images/products/molasses-grape.jpg") }}', url: '#' },
                    { id: 23, name: 'Rose', size: '400 g',category: 'Vinegar, Syrup & Molasses', image: '{{ asset("images/products/molasses-grape.jpg") }}', url: '#' },
                    { id: 24, name: 'Jallab Syrup', size: '400 g',category: 'Vinegar, Syrup & Molasses', image: '{{ asset("images/products/molasses-grape.jpg") }}', url: '#' },
                    { id: 25, name: 'Apple Vinegar', size: '400 g',category: 'Vinegar, Syrup & Molasses', image: '{{ asset("images/products/molasses-grape.jpg") }}', url: '#' },


                    {
  id: 26,
  name: 'Chili Paste',
  size: '350 ml',
  category: 'Lebanese Specialties',
  image: '{{ asset("images/products/ChiliPaste.WebP") }}', // main card image
  // NEW: detail fields
  images: [
    '{{ asset("images/products/ChiliPaste2.jpg") }}',
    '{{ asset("images/products/ChiliPaste-2.WebP") }}',
    '{{ asset("images/products/ChiliPaste-3.WebP") }}',
  ],
  description: 'Bright Lebanese-style chili paste made with sun-ripened peppers. Great for marinades, sandwiches, and dips.',
  care: [
    'Store in a cool, dry place',
    'Refrigerate after opening',
    'Use a clean spoon to avoid contamination'
  ],
  url: '#'
},

                    { id: 27, name: 'Tahina', size: '350 ml', category: 'Lebanese Specialties', image: '{{ asset("images/products/Tahina.WebP") }}', url: '#' },
                    { id: 28, name: 'Dried Moghrabieh', size: '350 ml', category: 'Lebanese Specialties', image: '{{ asset("images/products/pom-syrup-350.jpg") }}', url: '#' },

                    { id: 29, name: 'Whole Fig Jam', size: '1 L',  category: 'Sweets', image: '{{ asset("images/products/WholeFigJam.WebP") }}', url: '#' },
                    { id: 30, name: 'Fig Jam', size: '1 L',  category: 'Sweets', image: '{{ asset("images/products/FigJam.WebP") }}', url: '#' },
                    { id: 31, name: 'Appricot Jam',  size: '1 L',  category: 'Sweets', image: '{{ asset("images/products/lemon-juice-1l.jpg") }}', url: '#' },
                    { id: 32, name: 'Carob Molasses', size: '1 L',  category: 'Sweets', image: '{{ asset("images/products/lemon-juice-1l.jpg") }}', url: '#' },
                    { id: 33, name: 'Orange Blossom Water', size: '1 L',  category: 'Sweets', image: '{{ asset("images/products/OrangeBlossomWater.WebP") }}', url: '#' },
                    { id: 34, name: 'Rose Water', size: '1 L',  category: 'Sweets', image: '{{ asset("images/products/lemon-juice-1l.jpg") }}', url: '#' },


                    { id: 35, name: 'Natural Olive Oil Soap',  size: '150 g', category: 'Natural Olive Oil Soap', image: '{{ asset("images/products/olive-soap.jpg") }}', url: '#' },
                ],
                get filtered() {
                    let out = this.products
                        .filter(p => (this.category === 'all' || p.category === this.category))
                        .filter(p => p.name.toLowerCase().includes(this.query.trim().toLowerCase()));
                    if (this.sort === 'az') out.sort((a, b) => a.name.localeCompare(b.name));
                    if (this.sort === 'za') out.sort((a, b) => b.name.localeCompare(a.name));
                    return out;
                }
            }
        }
    </script>
</x-layout>
