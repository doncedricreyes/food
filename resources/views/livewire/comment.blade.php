<div>
<div class="flex w-full">
    <div class="mb-6 w-10/12">
        <input type="text" id="name" name="name" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Add Comment" wire:model='comment'>
    </div>
    <div class="mb-6 ">
        <button wire:click="increment" class="ml-10 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Comments</button>
    </div>
</div>

<div class="flex flex-col bg-white shadow-lg border-2 mb-2">
    <div class="flex flex-row">
        <span class="m-5 font-bold text-lg w-1 leading-5">{{auth()->user()->name}}</span>
        <span class="m-5 text-sm">1 min ago</span>
    </div>
    <div>
        <p class="mt-2 m-5">{{$comment}}</p>
    </div>
</div>
</div>


