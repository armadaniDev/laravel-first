{{-- Pop up tambah siswa. Di-include dari index.blade.php --}}
<div id="create-modal" onclick="if (event.target === this) closeModal('create-modal')"
    class="hidden fixed inset-0 z-50 items-center justify-center bg-gray-900/60 p-4 overflow-y-auto">
    <div class="relative w-full max-w-md bg-white rounded-lg shadow dark:bg-gray-700">

        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Add new student</h3>
            <button type="button" onclick="closeModal('create-modal')"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                <svg class="w-3 h-3" fill="none" viewBox="0 0 14 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/></svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>

        <form class="p-4 md:p-5" action="{{ route('admin.student.store') }}" method="POST">
            @csrf

            <div class="grid gap-4 mb-4">
                <div>
                    <label for="nis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIS</label>
                    <input type="text" name="nis" id="nis" placeholder="Enter NIS" required
                        value="{{ old('nis') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    @error('nis') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter student name" required
                        value="{{ old('name') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    @error('name') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="classroom_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Class</label>
                    <select name="classroom_id" id="classroom_id" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                        <option value="">Select class</option>
                        @foreach ($classrooms as $classroom)
                            <option value="{{ $classroom['id'] }}" @selected(old('classroom_id') == $classroom['id'])>
                                {{ $classroom['name'] }}
                            </option>
                        @endforeach
                    </select>
                    @error('classroom_id') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="addres" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                    <textarea name="addres" id="addres" rows="4" placeholder="Enter address" required
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-600 focus:border-blue-600 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">{{ old('addres') }}</textarea>
                    @error('addres') <p class="mt-1 text-sm text-red-600">{{ $message }}</p> @enderror
                </div>
            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Save student
            </button>
        </form>
    </div>
</div>
