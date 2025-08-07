
<x-layout>
      <div class="pt-20 sm:pt-24">
    <section x-data="productList()" class="mx-auto w-full max-w-7xl px-4 sm:px-6 lg:px-8 py-10">
        <!-- Header -->
        <div class="mb-6 flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <h1 class="text-3xl font-bold">All Products</h1>
                <p class="text-gray-600">Everything from extra virgin olive oil to pickles, sweets, and more.</p>
            </div>
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
                <div
                    class="group overflow-hidden rounded-2xl border bg-white shadow-sm transition hover:shadow-md">
                    <div class="aspect-[4/5] w-full bg-gray-100">
                        <img :src="p.image" :alt="p.name" class="h-full w-full object-cover">
                    </div>
                    <div class="p-4">
                        <p class="text-xs font-semibold uppercase tracking-wide text-yellow-700" x-text="p.category"></p>
                        <h3 class="mt-1 line-clamp-2 font-semibold" x-text="p.name"></h3>
                        <p class="text-sm text-gray-600" x-text="p.size"></p>

                        <div class="mt-3 flex items-center justify-between">
                            <span class="text-sm font-medium text-gray-900" x-text="p.price"></span>
                            <a :href="p.url"
                               class="rounded-full bg-yellow-400 px-3 py-1.5 text-sm font-semibold text-gray-900 hover:shadow">
                                View
                            </a>
                        </div>
                    </div>
                </div>
            </template>
        </div>

        <!-- Empty state -->
        <div x-show="filtered.length === 0" class="mt-12 text-center text-gray-600">
            No products match your filters.
        </div>
    </section>
</div>
    <script>
        function productList() {
            return {
                query: '',
                category: 'all',
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
                    { id: 1,  name: 'Extra Virgin Olive Oil 250ml', size: '250 ml', price: '$—', category: 'Extra Virgin Olive Oil', image: '{{ asset("images/products/evoo-250.jpg") }}', url: '#' },
                    { id: 2,  name: 'Extra Virgin Olive Oil 500ml', size: '500 ml', price: '$—', category: 'Extra Virgin Olive Oil', image: '{{ asset("images/products/evoo-500.jpg") }}', url: '#' },
                    { id: 3,  name: 'Extra Virgin Olive Oil 1L',    size: '1 L',    price: '$—', category: 'Extra Virgin Olive Oil', image: '{{ asset("images/products/evoo-1l.jpg") }}', url: '#' },

                    { id: 4,  name: 'Green Olives Jar',            size: '600 g',  price: '$—', category: 'Olives', image: '{{ asset("images/products/olives-green-600.jpg") }}', url: '#' },
                    { id: 5,  name: 'Black Olives Jar',            size: '600 g',  price: '$—', category: 'Olives', image: '{{ asset("images/products/olives-black-600.jpg") }}', url: '#' },

                    { id: 6,  name: 'Baby Cucumber Pickles',       size: '720 g',  price: '$—', category: 'Pickles', image: '{{ asset("images/products/pickles-baby-720.jpg") }}', url: '#' },
                    { id: 7,  name: 'Mixed Pickles',               size: '720 g',  price: '$—', category: 'Pickles', image: '{{ asset("images/products/pickles-mixed-720.jpg") }}', url: '#' },

                    { id: 8,  name: 'Makdous (Stuffed Eggplant)',  size: '600 g',  price: '$—', category: 'Starters', image: '{{ asset("images/products/starters-makdous.jpg") }}', url: '#' },

                    { id: 9,  name: 'Apple Vinegar',               size: '1 L',    price: '$—', category: 'Vinegar, Syrup & Molasses', image: '{{ asset("images/products/vinegar-apple-1l.jpg") }}', url: '#' },
                    { id: 10, name: 'Grape Molasses',              size: '400 g',  price: '$—', category: 'Vinegar, Syrup & Molasses', image: '{{ asset("images/products/molasses-grape.jpg") }}', url: '#' },

                    { id: 11, name: 'Pomegranate Syrup',           size: '350 ml', price: '$—', category: 'Lebanese Specialties', image: '{{ asset("images/products/pom-syrup-350.jpg") }}', url: '#' },

                    { id: 12, name: 'Lemon Juice',                 size: '1 L',    price: '$—', category: 'Sweets', image: '{{ asset("images/products/lemon-juice-1l.jpg") }}', url: '#' },

                    { id: 13, name: 'Natural Olive Oil Soap',      size: '150 g',  price: '$—', category: 'Natural Olive Oil Soap', image: '{{ asset("images/products/olive-soap.jpg") }}', url: '#' },
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
