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
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16 bg-blue-200 rounded-full">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                    </svg>
                </div>

                <div class="flex justify-center mt-2">
                    <h1 class="font-fantasy text-3xl">Your Team</h1>
                </div>
                <div class="flex justify-center mt-2">
                    <h2 class="font-fantasy text-lg">Describe your team activity!</h2>
                </div>
                <form method="POST" action="team" class="mt-10">
                    @csrf

                    <x-form.input name="team_name"/>

                    <x-form.input name="sport_type"/>

                    <x-form.field>
                        <x-form.label name="team_type"/>

                        <select name="team_type" id="team_type">
                            @php
                            $teamTypes = \App\Models\TeamType::all();
                            @endphp

                            @foreach ($teamTypes as $teamType)
                            <option>{{ ucwords($teamType->name)}}</option>
                            @endforeach
                        </select>

                        <x-form.error name="team_type" />
                    </x-form.field>


                    <div class="inline-flex justify-between">
                        <!-- Cardfooter left -->
                        <div class="py-2 px-10 mt-6 bg-gray-100 rounded-full font-semibold text-xs uppercase font-fantasy text-gray-500 hover:bg-gray-200">
                            <a class="" href="./">Back</a>
                        </div>
                        <!-- Cardfooter mid (pagination)-->

                        <div>
                            <!-- Eingeben eines Namens wie man in dem Team heißen will-->
                            <x-form.button>Continue</x-form.button>
                        </div>
                    </div>
                </form>
            </x-panel>
        </div>
    </x-sidebar>


</body>