<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return view('livewire.profile');
    }
    public function delete($id){
        $data = User::find($id);
        $data->delete();
    }
}
