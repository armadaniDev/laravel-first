<x-admin.layout>
    <div class="mb-4 flex items-center justify-between">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">{{ $title }}</h1>

        {{-- Tombol tambah --}}
        <button type="button" onclick="openModal('create-modal')"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            + Add teacher
        </button>
    </div>

    @if (session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400">
            {{ session('success') }}
        </div>
    @endif

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">ID</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">NIY</th>
                    <th scope="col" class="px-6 py-3">Subjects</th>
                    <th scope="col" class="px-6 py-3">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">{{ $teacher['id'] }}</td>
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $teacher['name'] }}</td>
                        <td class="px-6 py-4">{{ $teacher['niy'] }}</td>
                        <td class="px-6 py-4">{{ $teacher->subject->name }}</td>
                        <td class="px-6 py-4">{{ $teacher['start_date'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Pop up tambah data (file terpisah: create.blade.php) --}}
    @include('admin.teacher.create')

    <script>
        function openModal(id) {
            const modal = document.getElementById(id);
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeModal(id) {
            const modal = document.getElementById(id);
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        // Tutup modal dengan tombol Esc
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeModal('create-modal');
        });

        // Kalau validasi gagal, buka lagi modalnya
        @if ($errors->any())
            openModal('create-modal');
        @endif
    </script>
</x-admin.layout>
