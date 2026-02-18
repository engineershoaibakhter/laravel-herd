<x-layout> 

   <form action="/ideas" method="POST">
    @csrf

   <div class="col-span-full">
          <label for="description" class="block text-sm/6 font-medium text-gray-900">Idea</label>
          <div class="mt-2">
            <textarea id="description" name="description" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
          </div>
          <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences about your idea.</p>
          <div class="mt-4 flex justify-end gap-4">
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button> 
          </div>
    </div>
    
    </form>

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
    @endif

</x-layout> 