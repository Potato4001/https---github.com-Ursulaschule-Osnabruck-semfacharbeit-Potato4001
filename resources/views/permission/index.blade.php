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
        <div class="flex flex-col mx-4 mt-8">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($users as $user)
                                <form action="/permissions/{{ $user->id }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <tr>

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="text-lg font-medium text-gray-900 font-fantasy">
                                                    <a href="">
                                                        {{ $user->name }}
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-lg leading-5 font-semibold text-green-600 font-fantasy">
                                                <x-form.field>
                                                    <x-form.label name="role" />

                                                    <select name="role_id" id="role_id">
                                                        @php
                                                        $roles = Spatie\Permission\Models\Role::all();
                                                        @endphp

                                                        @foreach ($roles as $role)
                                                        <option value="{{ $role->id }}" {{ old('role_id', $user->role_id) == $role->id ? 'selected' : '' }}>{{ ucwords($role->name)}}</option>
                                                        @endforeach
                                                    </select>

                                                    <x-form.error name="role" />
                                                </x-form.field>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-lg leading-5 font-semibold text-green-600 font-fantasy">
                                                <x-form.field>
                                                    <x-form.label name="role2" />

                                                    <select name="role_id2" id="role_id2">
                                                        @php
                                                        $roles = Spatie\Permission\Models\Role::all();
                                                        @endphp

                                                        @foreach ($roles as $role)
                                                        <option value="{{ $role->id }}" {{ old('role_id', $user->role_id) == $role->id ? 'selected' : '' }}>{{ ucwords($role->name)}}</option>
                                                        @endforeach
                                                    </select>

                                                    <x-form.error name="role2" />
                                                </x-form.field>
                                            </span>
                                        </td>
                                        <td>
                                            <button class="py-2 px-4 bg-blue-700 rounded-full text-white text-lg font-fantasy" action="submit">Save</button>
                                        </td>
                                    </tr>
                                </form>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-hoversidebar-featuring>
</body>