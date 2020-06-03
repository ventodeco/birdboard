@extends('layouts.app')

@section('content')
        <header class="flex items-center mb-4 py-4">
            <div class="flex justify-between w-full items-center">
                <h2 class="text-gray-500 text-sm font-normal">My Projects</h2>
                <a href="/projects/create" class="button">New Project</a>
            </div>
        </header>

        <main class="lg:flex lg:flex-wrap -mx-3">
            @forelse ($projects as $project)
                <div class="lg:w-1/3 px-3 pb-6">
                        <div class="bg-white mr-4 rounded shadow p-5" style="height: 200px;" >
                        <h3 class="font-normal text-xl py-4 mb-6 -ml-5 border-l-4 border-blue-300 pl-4 mb-3">
                            <a href="{{ $project->path() }}" class="text-black no-underline">{{ $project->title }}</a></h3>

                        <div class="text-gray-500">{{  Str::limit($project->description, 100) }}</div>
                    </div>
                </div>
                @empty
                    <div>No projects yet.</div>
                @endforelse
        </main>

@endsection
