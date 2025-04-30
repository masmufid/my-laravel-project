<x-layout>
    <x-slot:heading>
        Secretariat
    </x-slot:heading>
    <div class="container mx-auto p-6">
        <div class="flex bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="w-1/3">
                <img src="{{ $sec['urlImage'] }}" alt="Image" class="object-cover w-full h-full">
            </div>
            <div class="w-2/3 p-6">
                <h2 class="text-2xl font-bold mb-4">{{ $sec['name'] }}</h2>
                <p class="text-gray-700 mb-4">
                    This is where the information goes. You can add more details about the secretariat here.
                </p>
                <a href="#" class="text-blue-500 hover:underline">Contact me</a>
            </div>
        </div>
    </div>
</x-layout>