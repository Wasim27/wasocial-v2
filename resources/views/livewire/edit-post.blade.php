<!-- 
    References:
    
    Ancheta, W.A. (2021). Getting Started with Laravel Livewire. sitepoint. https://www.sitepoint.com/laravel-livewire-getting-started/
-->
<x-modal action="">
    <x-slot name="title">
        Edit Post
    </x-slot>

    <x-slot name="content">
        <textarea wire:model="body" name="body" id="body" maxlength="255" placeholder="What's happening?" class="w-full text-xl resize-none outline-none h-32">{{ $post->body }}</textarea>
    </x-slot>

    <x-slot name="buttons">
        <button class="bg-green-300 rounded-lg p-1 hover:bg-green-400" wire:click.prevent="update()" type="submit">Submit</button>
    </x-slot>
</x-modal>