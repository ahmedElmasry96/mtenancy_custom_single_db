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
                <form action="{{route('articles.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Body</label>
                        <input type="text" class="form-control" id="body" name="body" value="{{old('body')}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
