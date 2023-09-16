@props(['event'])

<article
    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5 lg:flex">

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">

                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="">
                            {{ $event->name }}
                        </a>
                    </h1>
                </div>
            </header>

            <div class="text-sm mt-2 space-y-4">
                {{ $event->time }}
            </div>
        </div>
    </div>
</article>