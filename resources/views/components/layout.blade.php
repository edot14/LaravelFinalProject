<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

    <body class="bg-black text-white font-roboto pb-20">
        <div class="px-10">

            @if(session('success'))
                <div
                    x-data="{ show: true }"
                    x-init="setTimeout(() => show = false, 3000)"
                    x-show="show"
                    x-transition
                    class="bg-green-500 text-white p-4 rounded mb-6 text-center"
                >
                    {{ session('success') }}
                </div>
            @endif


            <nav class="flex justify-between items-center py-4 border-b border-white/10">
                <div>
                    <a href="/">
                        <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                    </a>
                </div>

                <div class="space-x-6 font-bold">
                    <a href="#">Jobs</a>
                    <a href="#">Careers</a>
                    <a href="#">Salaries</a>
                    <a href="#">Companies</a>
                </div>

                @auth
                    <div class="space-x-6 font-bold flex">
                        <a href="/jobs/create">Post a Job</a>

                        <form method="POST" action="/logout">
                            @csrf
                            <button type="submit">Log Out</button>
                        </form>
                    </div>
                @endauth

                @guest
                    <div class="space-x-6 font-bold">
                        <a href="/register">Sign Up</a>
                        <a href="/login">Log In</a>
                    </div>
                @endguest
            </nav>

            <main class="mt-10 max-w-[986px] mx-auto">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>