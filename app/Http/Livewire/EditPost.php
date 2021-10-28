<?php

namespace App\Http\Livewire;

use App\Models\Post;
use LivewireUI\Modal\ModalComponent;

class EditPost extends ModalComponent
{
    public $body;
    public $updateMode = false;

    public function mount(Post $post) {
        $this->post = $post;
        $this->body = $post->body;
    }

    public function edit($id) {
        //
    }

    public function update()
    {
    $validate = $this->validate([
        'body' => 'required',
    ]);

    if ($this->id) {
        $post = Post::find($this->post->id);
        $post->update([
            'body' => $this->body,
        ]);
        $this->updateMode = false;
        session()->flash('message', 'Users Updated Successfully.');
        return redirect()->route('profile.index');
    }
}

    public function render()
    {
        return view('livewire.edit-post');
    }
}
