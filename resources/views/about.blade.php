<x-layout>
<x-slot:heading>
        About
    </x-slot:heading>
    <div class="container mx-auto px-4 py-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Vision Section -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Our Vision</h2>
                <p class="text-gray-600">
                    To be a leading organization that inspires innovation and excellence in everything we do.
                </p>
            </div>
            <!-- Mission Section -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Our Mission</h2>
                <p class="text-gray-600">
                    To deliver high-quality solutions that empower individuals and businesses to achieve their goals.
                </p>
            </div>
        </div>
        <!-- Secretariat Section -->
       
        <div class="mt-12">
            <h2 class="text-3xl font-semibold text-gray-700 mb-6">Secretariat</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($secretariat as $member)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img class="w-full h-auto" src="{{ $member['urlImage'] }}" alt="{{ $member['name'] }}">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">{{ $member['name'] }}</h3>
                    <p class="text-gray-600">{{ $member['position'] }}</p>
                    <p class="text-gray-500 text-sm mt-2">{{ $member['country'] }}</p>
                    <a href="/secretariat/{{ $member['id'] }}" class="mt-4 inline-block bg-blue-500 text-white text-sm font-semibold py-2 px-4 rounded hover:bg-blue-600">View Details</a>
                </div>
               
                </div>
            @endforeach
            </div>
        </div>
    </div>
</x-layout>