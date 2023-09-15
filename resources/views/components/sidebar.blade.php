<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<style>
    .font-cursive {
        font-family: cursive;
    }

    .font-fantasy {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }

    .font-perfect{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
</style>

<div class="relative min-h-screen md:flex" x-data="{ open: false }">
    <!-- Sidebar -->
    <aside :class="open ? '' : 'hidden'" class="z-10 bg-blue-800 text-blue-100 w-64 px-2 py-4 absolute inset-y-0 left-0 md:relative transform md:translate-x-0
                overflow-y-auto transition ease-in-out duration-200 shadow-lg">
        <!--Logo-->
        <div class="flex items-center justify-between px-2">
            <div class="flex items-center space-x-2 mt-2">
                <a href="./" class="border-b pb-2 inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                    </svg>
                    <span class="text-lg ml-2 font-fantasy">TeamAssemble</span>
                </a>
            </div>
            <button type="button" @click="open = ! open" class="ml-2 inline-flex p-2 items-center justify-center rounded-md text-blue-100 hover:bg-blue-700
                focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>

            </button>
        </div>

        <!-- Nav links -->
        <div>

            <ul class="mt-10">
                <li class="mt-3 ml-1 border-b pb-2 inline-flex items-center w-40">
                    <a href="./team" class="inline-flex items-center text-lg font-fantasy">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                        </svg>
                        Create Team
                    </a>
                </li>
                
                <li class="mt-3 ml-1 border-b pb-2 inline-flex items-center w-40">
                    <a href="./join" class="inline-flex items-center text-lg font-fantasy {{ request()->is('join')|request()->is('join/register') ? 'text-blue-400' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Register
                    </a>
                </li>

                <li class="mt-3 ml-1 border-b pb-2 inline-flex items-center w-40">
                    <a href="./login" class="inline-flex items-center text-lg font-fantasy">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Log In
                    </a>
                </li>
                
            </ul>

        </div>
    </aside>

    <!-- Main content -->
    <main class="w-full">
        <nav class="bg-blue-900">
            <div class="mx-auto px-2 sm:px-6 lg:px-8">
                <div class="relative flex justify-between md:justify-end h-16">
                    <div class="absolute inset-y-0 left-0 flex items-center justify-between">
                        <button type="button" @click="open = ! open" @click.away="open = false" class="inline-flex justify-center
                            p-2 rounded-md text-blue-100 hover:bg-blue-700 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                        <h1 class="inline-flex text-white text-xl font-fantasy">{{ $heading }}</h1>
                        <a href="./" class="inline-flex">
                            <img src="{{ url('images/logo.png') }}" alt="logo" width="60" height="16" />
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <div>
            {{ $slot }}
        </div>
    </main>
</div>