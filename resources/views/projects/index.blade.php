@extends('layouts.app')

@section('content')
        <div class="flex items-center mb-4">
            <a href="/projects/create">New Project</a>
        </div>

        <div class="flex">
            @forelse ($projects as $project)
                    <div class="bg-white mr-4 rounded shadow w-1/3 p-5" style="height: 200px;" >
                    <h3 class="font-normal text-xl py-4 mb-6">{{ $project->title }}</h3>

                    <div class="text-gray-500">{{  Str::limit($project->description, 100) }}</div>
                </div>
            @empty
                <div>No projects yet.</div>
            @endforelse
        </div>

@endsection
