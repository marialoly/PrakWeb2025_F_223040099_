<x-dashboard-layout>
    <x-slot:title>Edit Post Dashboard</x-slot:title>

    <div class="max-w-2xl mx-auto p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Edit Post</h1>
        </div>

        <x-posts.form :categories="$categories" :post="$post" />
    </div>
</x-dashboard-layout>