<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Files;
class Search extends Component
{
    public $search;
    
    public function render()
    {
        return view('livewire.search');
    }

    public function getResultsProperty(){
        return Files::where('name','LIKE', '%' . $this->search . '%')->take(11)->get();
    }
}
