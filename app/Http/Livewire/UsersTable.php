<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UsersTable extends Component
{
    public $users;

    public function mount(User $users){
        $this->users = $users->where('admin',false)->get()->sortByDesc('winner');
    }

    public function render()
    {
        return view('livewire.users-table');
    }
}
