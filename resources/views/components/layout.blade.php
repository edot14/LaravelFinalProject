<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white">
    <div class="px-10">
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

            <div>
                <a href="">Post a Job</a>
            </div>
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            <div class="p-4 bg-inherit">
                <h2 class="text-xl font-bold mb-4">Featured Jobs</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!--
                        Below i manually added the Job Cards as i couldn't $slot content
                        to work without messing up the stylesheet. I will fix this in the next
                     -->
                    <div class="bg-gray-900 p-4 rounded-lg shadow">
                        <h3 class="text-lg font-semibold">PHP Developer</h3>
                        <p class="text-gray-400">Front End - Full Time - £60,000</p>
                        <div class="mt-2 flex gap-2">
                            <span class="bg-gray-700 px-2 py-1 text-sm rounded cursor-pointer hover:bg-blue-500 transition">Laravel</span>
                            <span class="bg-gray-700 px-2 py-1 text-sm rounded cursor-pointer hover:bg-blue-500 transition">MySQL</span>
                            <span class="bg-gray-700 px-2 py-1 text-sm rounded cursor-pointer hover:bg-blue-500 transition">Remote</span>
                        </div>
                    </div>

                    <div class="bg-gray-900 p-4 rounded-lg shadow">
                        <h3 class="text-lg font-semibold">JavaScript Developer</h3>
                        <p class="text-gray-400">Back End - Full Time - £70,000</p>
                        <div class="mt-2 flex gap-2">
                            <span class="bg-gray-700 px-2 py-1 text-sm rounded cursor-pointer hover:bg-blue-500 transition">Node.js</span>
                            <span class="bg-gray-700 px-2 py-1 text-sm rounded cursor-pointer hover:bg-blue-500 transition">Express</span>
                            <span class="bg-gray-700 px-2 py-1 text-sm rounded cursor-pointer hover:bg-blue-500 transition">Hybrid</span>
                        </div>
                    </div>

                    <div class="bg-gray-900 p-4 rounded-lg shadow">
                        <h3 class="text-lg font-semibold">React Developer</h3>
                        <p class="text-gray-400">Full Stack - Contract - £50,000</p>
                        <div class="mt-2 flex gap-2">
                            <span class="bg-gray-700 px-2 py-1 text-sm rounded cursor-pointer hover:bg-blue-500 transition">React.js</span>
                            <span class="bg-gray-700 px-2 py-1 text-sm rounded cursor-pointer hover:bg-blue-500 transition">TypeScript</span>
                            <span class="bg-gray-700 px-2 py-1 text-sm rounded cursor-pointer hover:bg-blue-500 transition">Freelance</span>
                        </div>
                    </div>

                    <div class="bg-gray-900 p-4 rounded-lg shadow">
                        <h3 class="text-lg font-semibold">UI/UX Designer</h3>
                        <p class="text-gray-400">Design - Full Time - £55,000</p>
                        <div class="mt-2 flex gap-2">
                            <span class="bg-gray-700 px-2 py-1 text-sm rounded cursor-pointer hover:bg-blue-500 transition">Figma</span>
                            <span class="bg-gray-700 px-2 py-1 text-sm rounded cursor-pointer hover:bg-blue-500 transition">Adobe XD</span>
                            <span class="bg-gray-700 px-2 py-1 text-sm rounded cursor-pointer hover:bg-blue-500 transition">Hybrid</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
 </body>
</html>