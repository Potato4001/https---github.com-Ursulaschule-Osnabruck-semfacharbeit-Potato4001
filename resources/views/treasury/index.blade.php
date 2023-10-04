<!doctype html>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">

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
    <x-hoversidebar-featuring>
        <section class="px-6 py-8 flex justify-end">
        @can('manage treasury')
        <button class="py-2 px-4 bg-gradient-to-r from-cyan-500 to-blue-500 rounded 
            hover:from-green-500 hover:to-blue-400 text-lg text-white font-semibold">
            <a href="{{ url('/team/'. auth()->user()->team_id .'/treasury/create') }}">New Entry</a>
        </button>
        @endcan
        </section>

        <div class="flex flex-col mx-4">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                                <!-- Idee If-Klausel um sicherzustellen, dass nur die Transactions von jeweiligen Team angezeigt werden-->
                                
                                @foreach ($treasuries as $treasury)
                                <tr>
                                    @if(auth()->user()->can('manage treasury'))
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="text-lg font-medium text-gray-900">
                                                    {{ $treasury->name }}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-lg leading-5 font-semibold text-green-600">
                                            {{ $treasury->betrag }} €
                                        </span>
                                    </td>
                                    
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-semibold">
                                        <a href="/treasury/{{ $treasury->id }}/edit" class="inline-flex text-blue-500 hover:text-blue-800 rounded-full bg-blue-100 px-2">
                                            Edit
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <!--<a href="" class="text-red-500 hover:text-red-800">Delete</a>-->
                                        <form method="POST" action="/treasury/{{ $treasury->id }}">
                                            @csrf
                                            @method('DELETE')

                                            <button class="text-sm font-semibold inline-flex px-2 rounded-full bg-red-200 text-red-800 hover:text-red-800">Delete</button>
                                        </form>
                                    </td>
                                    @else
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="text-lg font-medium text-gray-900">
                                                <a href="">
                                                    {{ $treasury->name }}
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 flex text-lg leading-5 font-semibold text-green-600 justify-end">
                                            {{ $treasury->betrag }} €
                                        </span>
                                    </td>
                                   @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-hoversidebar-featuring>
</body>