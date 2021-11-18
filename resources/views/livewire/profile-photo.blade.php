<!-- 
    References:
    
    Ancheta, W.A. (2021). Getting Started with Laravel Livewire. sitepoint. https://www.sitepoint.com/laravel-livewire-getting-started/
-->

<x-modal action="">
    <x-slot name="title">
        Upload Profile Photo
    </x-slot>

    <x-slot name="content">
        <textarea wire:model="profile_photo" name="profile_photo" id="profile_photo" maxlength="255" placeholder="URL" class="w-full text-xl resize-none outline-none h-32"></textarea>
    </x-slot>

    <x-slot name="buttons">
        <button wire:click.prevent="update()" class="bg-green-300 rounded-lg p-1 hover:bg-green-400" type="submit">Submit</button>
    </x-slot>
</x-modal>