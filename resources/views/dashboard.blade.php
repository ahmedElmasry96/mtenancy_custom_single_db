<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{auth()->user()->tenant->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $index=>$user)
                        <tr>
                            <th>{{$index + 1}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                        </tr
                    @endforeach
>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
