<div>
    <form  wire:submit.prevent="store()">
    <div class="flex w-full">
        <div class="mb-6 w-10/12">
            <input type="text" id="name" name="name" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Add Comment" wire:model.lazy='new_comments'>
        @error('new_comments')
        <span class="font-bold text-xs text-red-500">{{ $message }}</span>
        @enderror
        </div>
        <div class="mb-6 ">
            <button type="submit" class="ml-10 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Comments</button>
        </div>


    </div>
</form>

    @foreach($comments as $i)
    <div class="flex flex-row">

    <div class="flex flex-col align-center justify-center mr-5">
        <div><a wire:click='increment({{$i->id}})' class="cursor-pointer"><i class="fa-solid fa-arrow-up"></i></a></div>
        <span class="align-center justify-center text-lg"> {{$i->likes->count()}}</span>
        <div><a wire:click="decrement({{$i->id}})" class="cursor-pointer"><i class="fa-solid fa-arrow-down"></i></a></div>
    </div>
    <div class="flex flex-col bg-white shadow-lg  mb-2 w-full">
        <div class="flex flex-row">
            <span class="m-5 mr-0 font-bold text-md w-12 leading-5">{{auth()->user()->name}}</span>
            <span class="m-5 text-sm">{{$i->created_at->diffForHumans()}}</span>
        </div>
        <div>
            <p class="mt-2 m-5">{{$i->comment}}</p>
        </div>

    </div>
    </div>
    @endforeach

</div>


