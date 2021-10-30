<x-modal action="">
    <x-slot name="title">
        Delete Post
    </x-slot>
  
    <x-slot name="content">
        <h2>Are you sure you wish to delete this post. It will be gone forever!</h2>
    </x-slot>
  
    <x-slot name="buttons">
        <button wire:click.prevent="destroy()" class="bg-red-300 rounded-lg p-1 hover:bg-red-400" type="submit">Delete Post</button>
    </x-slot>
  </x-modal>