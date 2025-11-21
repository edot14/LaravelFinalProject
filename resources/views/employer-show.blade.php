<x-layout>
    <section class="py-20 bg-gradient-to-r from-neutral-950 via-neutral-900 to-neutral-950">
        <div class="container px-4 mx-auto">
            <div class="max-w-2xl mx-auto">
                <div class="relative mb-12">
                    <div
                        class="absolute inset-0 opacity-20 bg-gradient-to-r from-purple-800 to-purple-950 rounded-2xl filter blur-3xl">
                    </div>
                    <h2
                        class="text-3xl font-medium leading-tight text-transparent md:text-4xl lg:text-5xl bg-clip-text bg-gradient-to-r from-gray-100 via-gray-200 to-gray-300">
                        {{ $employer->name }}
                    </h2>
                </div>
                <div class="flex items-center mb-8">
                    <x-employer-logo :width="100" />
                    <div class="ml-6">
                        <p class="text-lg text-gray-300">{{ $employer->location ?? 'Location not specified' }}</p>
                        <p class="text-gray-400">{{ $employer->website ?? 'Website not available' }}</p>
                    </div>
                </div>
                <div class="prose prose-invert text-gray-300">
                    <p>{{ $employer->description ?? 'No description available.' }}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container px-4 mx-auto">
            <x-section-heading>Jobs at {{ $employer->name }}</x-section-heading>
            <div class="grid gap-8 mt-6 lg:grid-cols-3">
                @foreach ($employer->jobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </div>
    </section>
</x-layout>