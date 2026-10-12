<x-admin.layout>
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-white">{{ $title }}</h1>
        <p class="text-gray-300">Nama: {{ $name }}</p>
        <p class="text-gray-500">
            GitHub: <a href="{{ $link }}" class="text-blue-400 hover:underline">{{ $github }}</a>
        </p>
    </div>
</x-admin.layout>
