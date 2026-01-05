<x-layout>
    <x-slot:title>
        Category
    </x-slot:title>
    <h1 class="text-3xl flex justify-center">Daftar Category</h1>

    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 px-4 py-2">No</th>
                <th class="border border-gray-300 px-4 py-2">Judul</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        {{ $loop->iteration }}
                    </td>

                    <td class="border border-gray-300 px-4 py-2">
                        {{ $category->name }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>
