<x-dashboar-layout>
    <x-slot:title>Dashboard Posts</x-slot:title>

    <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
        
        {{-- Header: Search & Add Post --}}
        <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center gap-4 bg-gray-50">
            
            {{-- Search Bar --}}
            <form method="GET" action="{{ route('dashboard.index') }}" class="flex-1 max-w-md">
                <label for="search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" name="search" id="search" value="{{ request('search') }}"
                        class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Search posts...">
                </div>
            </form>

            {{-- Tombol Add Post --}}
            <a href="{{ route('dashboard.create') }}"
               class="inline-flex items-center px-4 py-2 bg-blue-700 hover:bg-blue-800 text-white font-medium rounded-lg text-sm shadow-sm transition-colors duration-200">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                Create New Post
            </a>
        </div>

        {{-- Tabel Postingan --}}
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b">
                <tr>
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">Title</th>
                    <th scope="col" class="px-6 py-3">Category</th>
                    <th scope="col" class="px-6 py-3">Date</th>
                    <th scope="col" class="px-6 py-3 text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4">
                        {{ $posts->firstItem() + $loop->index }}
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $post->title }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $post->category->name ?? 'Uncategorized' }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $post->created_at->format('d M Y') }}
                    </td>
                    <td class="px-6 py-4 text-right flex justify-end gap-2">
                        {{-- View --}}
                        <a href="{{ route('dashboard.show', $post->slug) }}" class="font-medium text-blue-600 hover:underline">View</a>
                        
                        {{-- Edit --}}
                        <a href="{{ route('dashboard.edit', $post->slug) }}" class="font-medium text-yellow-600 hover:underline">Edit</a>

                        {{-- Delete --}}
                        <form action="{{ route('dashboard.destroy', $post->slug) }}" method="POST" class="inline-block">
                            @csrf
                            @method('delete')
                            <button type="submit" class="font-medium text-red-600 hover:underline border-0 bg-transparent cursor-pointer" onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-12 text-center text-gray-500">
                        No posts found.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

        {{-- Pagination --}}
        <div class="p-4">
            {{ $posts->links() }}
        </div>
    </div>
</x-dashboar-layout>