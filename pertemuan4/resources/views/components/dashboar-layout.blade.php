<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Dashboard' }}</title>
    
    
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">

    
    <nav class="bg-white border-b border-gray-200 px-4 py-2.5 fixed left-0 right-0 top-0 z-50">
        <div class="flex flex-wrap justify-between items-center">
            
            
            <div class="flex justify-start items-center">
                <a href="/dashboard" class="flex items-center justify-between mr-4">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-blue-600">MyDashboard</span>
                </a>
            </div>

            
            <div class="flex items-center lg:order-2 gap-4">
                <span class="text-sm text-gray-500">Hi, {{ auth()->user()->name }}</span>

                
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 focus:outline-none">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <main class="p-4 pt-20">
        {{ $slot }}
    </main>

</body>
</html>