<x-layout :isHome="false">
  
  <!-- Contact Form Section -->
  <section class="relative pt-32 pb-28 bg-gradient-to-b from-white to-gray-50 z-10">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Heading -->
      <div class="text-center mb-14 relative z-10">
        <h2 class="text-4xl font-extrabold text-gray-900 leading-tight">
          Let's <span class="text-yellow-500">Connect</span>
        </h2>
        <p class="mt-4 text-lg text-gray-600">
          Whether it's a question or feedback, we’re ready to hear you out.
        </p>
      </div>

      <!-- Contact Form Card -->
      <div class="bg-white relative rounded-2xl shadow-xl p-8 sm:p-10 border border-gray-100 z-10">
        <form action="/contact/submit" method="POST" class="space-y-6">
          @csrf

          <!-- Name Fields -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">First name</label>
              <input type="text" name="first_name" id="first_name" required
                     placeholder="John"
                     class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-yellow-500 focus:outline-none transition placeholder-gray-400" />
            </div>
            <div>
              <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">Last name</label>
              <input type="text" name="last_name" id="last_name" required
                     placeholder="Doe"
                     class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-yellow-500 focus:outline-none transition placeholder-gray-400" />
            </div>
          </div>

          <!-- Email -->
          <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" name="email" id="email" required
                   placeholder="you@example.com"
                   class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-yellow-500 focus:outline-none transition placeholder-gray-400" />
          </div>

          <!-- Phone -->
          <div>
            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
            <input type="tel" name="phone" id="phone"
                   placeholder="123-456-7890"
                   class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-yellow-500 focus:outline-none transition placeholder-gray-400" />
          </div>

          <!-- Message -->
          <div>
            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
            <textarea name="message" id="message" rows="5" required
                      placeholder="Write your message here..."
                      class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-yellow-500 focus:outline-none transition placeholder-gray-400"></textarea>
          </div>

          <!-- Submit Button -->
          <div>
            <button type="submit"
                    class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold text-lg rounded-lg px-6 py-3 shadow-lg hover:shadow-xl transition duration-300">
              Send Message
            </button>
          </div>
        </form>
      </div>
    </div>
  </section>
</x-layout>
