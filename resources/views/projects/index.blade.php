@extends('layouts.app')

@section('content')
        <header class="flex items-center mb-3 py-4">
            <div class="flex justify-between w-full items-end">
                <h2 class="text-gray-500 text-sm font-normal">My Projects</h2>
                <a href="/projects/create" class="button">New Project</a>
            </div>
        </header>

        <main class="lg:flex lg:flex-wrap -mx-3">
            @forelse ($projects as $project)
                <div class="lg:w-1/3 px-3 pb-6">
                    @include('projects.card')
                </div>
            @empty
                <div>No projects yet.</div>
            @endforelse
        </main>

        <modal name="hello-world" classes="p-10 bg-white rounded-lg" height="auto">
            <h1 class="font-normal mb-16 text-center text-2xl">Let's start something new</h1>

            <div class="flex">
                <div class="flex-1 mr-4">
                    <div class="mb-4">
                        <label for="title" class="text-sm block mb-2">Title</label>
                        <input type="text" name="title" class="border border-collapse py-2 px-2 text-xs block w-full">

                    </div>

                    <div class="mb-4">
                        <label for="description" class="text-sm block mb-2">Description</label>
                        <textarea name="description" class="border border-collapse py-2 px-2 text-xs block w-full" rows="7"></textarea>

                    </div>
                </div>
                
                
                <div class="flex-1 ml-4">
                    <div class="mb-4">
                        <label class="text-sm block mb-2">Need Tasks?</label>
                        <input type="text" name="title" class="border border-collapse py-2 px-2 text-xs block w-full">

                    </div>

                    <button class="rounded-full border-black"></button>
                </div>

            </div>
        </modal>


        <a href="" @click.prevent="$modal.show('hello-world')">Show more</a>

@endsection
