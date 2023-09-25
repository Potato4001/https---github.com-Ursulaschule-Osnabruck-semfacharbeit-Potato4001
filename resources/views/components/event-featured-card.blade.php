@props(['event'])

<article class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5 lg:flex">

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0 inline-flex justify-between">

                <div class="items-center">
                    <h1 class="text-3xl">
                        <a href="">
                            {{ $event->activity }}
                        </a>
                    </h1>
                </div>

                <div class="items-center flex">
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                </svg>
                            </button>
                        </x-slot>

                        <x-dropdown-item href="/events/{{ $event->id }}/edit" :active="request()->routeIs('events/{{ $event->id }}/edit')">
                            Edit
                        </x-dropdown-item>

                        <x-dropdown-item>
                            <form method="POST" action="/events/{{ $event->id }}">
                                @csrf
                                @method('DELETE')

                                <button>Delete</button>
                            </form>
                        </x-dropdown-item>
                    </x-dropdown>
                </div>
            </header>

            <div class="text-sm mt-2 space-y-4">
                {{ $event->date }}
                {{ $event->time }}
            </div>
        </div>
    </div>
</article>