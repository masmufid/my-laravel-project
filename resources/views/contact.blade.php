<x-layout>
    <x-slot:heading>
        Contact Us
    </x-slot:heading>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-semibold text-gray-700 mb-4">Contact Us</h1>
        <p class="text-gray-600 mb-6">We would love to hear from you! Please fill out the form below to get in touch with us.</p>

        <form action="/contact" method="POST" class="bg-white shadow-md rounded-lg p-6">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                <input type="text" id="name" name="name" required class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring focus:ring-green-500">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                <input type="email" id="email" name="email" required class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring focus:ring-green-500">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700 font-semibold mb-2">Message</label>
                <textarea id="message" name="message" rows="4" required class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring focus:ring-green-500"></textarea>
            </div>
            <button type="submit" class="bg-green-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-green-700 transition duration-200">Send Message</button>
        </form>
    </div>
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Our Location</h2>
        <p class="text-gray-600 mb-6">123 Coconut Lane, Coconut City, CO 12345</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.1234567890123!2d-122.4194156846815!3d37.7749292797599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808c8c8c8c8c%3A0x8c8c8c8c8c8c8c8c!2sCoconut%20Community%20International%20Center!5e0!3m2!1sen!2sus!4v1634567890123" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <p class="text-gray-600 mt-4">Phone: (123) 456-7890</p>
        <p class="text-gray-600">
            <a href="mailto:icc@coconutcommunity.org" class="text-blue-500 hover:underline">
                Email Us</a>
        </p>
        <p class="text-gray-600">
            <a href="https://www.coconutcommunity.org" class="text-blue-500 hover:underline">
                Visit our website</a>
        </p>

</x-layout>