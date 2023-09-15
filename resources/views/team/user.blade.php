<!doctype html>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    <style>
        .font-fantasy {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
    </style>

</head>

<body>
    <x-sidebar heading="Create new Team">
        <div class="flex justify-center my-40">
            <x-panel>

                <div class="flex justify-center text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>

                </div>

                <div class="flex justify-center mt-2">
                    <h1 class="font-fantasy text-3xl">About You</h1>
                </div>
                <div class="flex justify-center mt-2">
                    <h2 class="font-fantasy text-lg">Introduce yourself to the team!</h2>
                </div>
                <form method="POST" action="step-user" class="mt-10">
                    @csrf

                    <x-form.input name="name" />

                    <x-form.input name="email" type="email" />

                    <x-form.input name="password" type="password" />


                    <div class="flex inline-flex justify-between">
                        <!-- Cardfooter left -->
                        <div class="py-2 px-10 mt-6 bg-gray-100 rounded-full font-semibold text-xs uppercase font-fantasy text-gray-500 hover:bg-gray-200">
                            <a class="" href="./">Back</a>
                        </div>

                        <div>
                            <x-form.button>Create Team</x-form.button>
                        </div>
                    </div>
                </form>
            </x-panel>
        </div>
    </x-sidebar>


</body>