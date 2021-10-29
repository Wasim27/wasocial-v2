<?php

namespace App\Http\Livewire;

use App\Models\User;
use LivewireUI\Modal\ModalComponent;

class ProfilePhoto extends ModalComponent
{
    public $profile_photo;
    public $updateMode = false;

    public function update()
    {
        $validate = $this->validate([
            'profile_photo' => 'required',
        ]);

        $curUser = auth()->user();
        // dd($curUser);
        $curUser->update([
            'profile_photo' => $this->profile_photo,
        ]);
        $this->updateMode = false;
        return redirect()->route('profile.index');
    }


    public function render()
    {
        return view('livewire.profile-photo');
    }
}
