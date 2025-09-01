<div class="container px-4 mx-auto">
    <nav class="relative flex items-center justify-between py-8">
        <a href="/">
            <img src="/images/PositionPathwayLogo.png" alt="PP Logo" class="h-8">
        </a>

        <div class="lg:hidden">
            <button x-on:click="mobileNavOpen = !mobileNavOpen"
                class="block transition-colors duration-200 hover:text-white text-neutral-300 focus:outline-none">
                <svg class="w-6 h-6" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>
        <ul class="flex space-x-6">
            <li><a href="{{ route('jobs') }}">Jobs</a></li>
            <li><a href="{{ route('careers') }}">Careers</a></li>
            <li><a href="{{ route('salaries') }}">Salaries</a></li>
            <li><a href="{{ route('companies') }}">Companies</a></li>
        </ul>
    </nav>
</div>
