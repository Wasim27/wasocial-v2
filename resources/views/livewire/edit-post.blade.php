<x-modal action="">
    <x-slot name="title">
        Edit Post
    </x-slot>

    <x-slot name="content">
        <textarea wire:model="body" name="body" id="body" maxlength="255" placeholder="What's happening?" class="w-full text-xl resize-none outline-none h-32">{{ $post->body }}</textarea>
    </x-slot>

    <x-slot name="buttons">
        <button wire:click.prevent="update()" type="submit">Submit</button>
    </x-slot>
</x-modal>