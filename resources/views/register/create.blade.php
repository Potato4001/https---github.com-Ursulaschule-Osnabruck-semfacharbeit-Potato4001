<!DOCTYPE html>
<script src="https://cdn.tailwindcss.com"></script>

<style>
    .font-fantasy {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
</style>

<body>
    <x-sidebar heading="Join your Team">
        <div class="flex justify-center my-40">
            <x-panel>

                <div class="flex justify-center text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>

                </div>

                <h1 class="text-center font-bold text-xl font-fantasy">About you!</h1>
                <h2 class="text-center text-lg font-fantasy">How should the team perceive you?</h2>
                <form method="POST" action="register" class="mt-10">
                    @csrf
                    <x-form.input name="name" />

                    <x-form.input name="email" type="email" autocomplete="username" />

                    <x-form.input name="password" type="password" autocomplete="old-password" />

                    <x-form.button>Submit</x-form.button>
                </form>
            </x-panel>
        </div>
    </x-sidebar>
</body>