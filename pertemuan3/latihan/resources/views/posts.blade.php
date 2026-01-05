<x-layout>
    <x-slot:title>
        Posts
    </x-slot:title>
    <h1 class="text-3xl flex justify-center">Daftar Posts</h1>

    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 px-4 py-2">No</th>
                <th class="border border-gray-300 px-4 py-2">Judul</th>
                <th class="border border-gray-300 px-4 py-2">Excerpt</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        {{ $loop->iteration }}
                    </td>

                    <td class="border border-gray-300 px-4 py-2">
                        <a href="/posts/{{ $post->slug }}" class="text-blue-600 hover:underline">
                            {{ $post->title }}
                        </a>
                    </td>

                    <td class="border border-gray-300 px-4 py-2">
                        {{ $post->excerpt }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-layout>
