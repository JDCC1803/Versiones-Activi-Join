<?php

namespace App\Http\Livewire;
use App\Models\Hijo;
use App\Models\User;
use Livewire\WithPagination;

use Livewire\Component;

class ViewHijo extends Component
{
    use WithPagination;
    public function render()
    {
        $nuevo=User::all()->where('type','S');
        return view('livewire.view-hijo',['new'=>$nuevo]);
    }
}
