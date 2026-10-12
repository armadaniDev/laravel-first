<x-admin.layout>
    <div class="mb-4">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">{{ $title }}</h1>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">NIS</th>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Class</th>
                    <th scope="col" class="px-6 py-3">Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $index => $student)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">{{ $index + 1 }}</td>
                        <td class="px-6 py-4">{{ $student['nis'] }}</td>
                        <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $student['name'] }}</td>
                        <td class="px-6 py-4">{{ $student['classroom'] }}</td>
                        <td class="px-6 py-4">{{ $student['addres'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin.layout>
