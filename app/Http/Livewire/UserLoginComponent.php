<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserLoginComponent extends Component
{
    public function render()
    {
        return view('livewire.user-login-component')->layout("layouts.userMaster");
    }
}
