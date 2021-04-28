<?php

namespace App\Http\Livewire;

use App\Models\UserWhiteList;
use Livewire\Component;

class WhitelistTable extends Component
{
    public $users;

    public function mount(UserWhiteList $whitelists)
    {
        $this->users = $whitelists->all()->sortBy('name');
    }

    public function render()
    {
        return view('livewire.whitelist-table');
    }
}
