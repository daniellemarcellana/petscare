<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Appointment;
class Search extends Component
{
    use WithPagination;
    public $searchTerm;

    public function render()
    {
         $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.search',[
            'appointments' => Appointment::where('name','like', $searchTerm)->paginate(10)
        ]);
    }
}
