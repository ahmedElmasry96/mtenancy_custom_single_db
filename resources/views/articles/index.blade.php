<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{auth()->user()->tenant->name}}
        </h2>
        <a href="{{route('articles.create')}}" class="btn btn-primary">New Article</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Body</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $index=>$article)
                        <tr>
                            <th>{{$index + 1}}</th>
                            <td>{{$article->title}}</td>
                            <td>{{$article->body}}</td>
                        </tr
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
