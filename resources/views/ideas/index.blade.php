<x-layout> 

    @if($ideas -> count())
    <div>
      <h1>Your Ideas</h1>
      @foreach($ideas as $idea)
      <ol>  
        <div class="mt-4 flex justify-between items-center bg-gray-100 rounded-md px-3 py-2">
            <li> {{ $idea -> description }}</li>
            <div class="flex gap-4">
              <a href="/ideas/{{ $idea -> id }}/edit" class="rounded-md bg-gray-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">
                    Edit
              </a>
             <form action="/ideas/{{ $idea->id }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')

                <button type="submit"
                        class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600"
                        onclick="return confirm('Are you sure you want to delete this idea?')">
                    Delete
                </button>
            </form>
            </div>
          </div>
        </ol>
      @endforeach
    </div>
    @else
    <p class="mb-4">You have no ideas yet.</p>
     <a href="/ideas/create" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Create an Idea
      </a>
    @endif

</x-layout> 