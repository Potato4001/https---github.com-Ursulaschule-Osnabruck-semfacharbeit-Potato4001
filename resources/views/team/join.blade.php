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

                <div class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14 text-blue-500 bg-blue-200 rounded-full">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
                    </svg>
                </div>
                <div class="flex justify-center font-fantasy font-semibold text-lg">
                    <h1>Invitation Link</h1>
                </div>
                <div class="flex justify-center font-fantasy text-lg">
                    <h2>For joining your team you need to have an invitation link from your Coach or Admin</h2>
                </div>

                <form method="POST" action="join" class="mt-10">
                    @csrf


                    <div class="inline-flex items-center border border-gray-200 w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 border-r bg-gray-100 p-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                        </svg>

                        <input class="p-2 w-full rounded" placeholder="Invitation Link" type="link">
                    </div>

                    <!-- button muss noch ausgetauscht werden, weil neue Error überprüfung eingebaut werden muss -->
                    <x-form.button>Join</x-form.button>
                </form>
            </x-panel>
        </div>
    </x-sidebar>
</body>