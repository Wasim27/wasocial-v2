<?php

namespace App\Http\Livewire;

use App\Models\Post;
use LivewireUI\Modal\ModalComponent;

class DeletePost extends ModalComponent
{
    public $post;

    protected $rules = [
        'post' => 'required',
    ];

    public function mount(Post $post) {
        $this->post = $post;
    }

    public function destroy() {
       $findPost = Post::find($this->post->id);
       $findPost->delete();

       session()->flash('message', 'Post Deleted Successfully!');
       return redirect()->route('profile.index');
    }

    public function render()
    {
        return view('livewire.delete-post');
    }
}
