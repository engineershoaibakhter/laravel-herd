<x-layout>
    <div>
        <h2>Your Idea: {{ $idea->description }}</h2>
    </div>
     <div class="mt-4 flex justify-end gap-4">
            <a href="/ideas/{{ $idea->id }}/edit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Edit
            </a> 
             <a href="/ideas" class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">
                All Ideas
            </a> 
    </div>
</x-layout>