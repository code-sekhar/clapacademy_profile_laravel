<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class NewProject extends Component
{
    public function render()
    {
        return view('livewire.user.new-project')->layout('layouts.userMaster');
    }
}
