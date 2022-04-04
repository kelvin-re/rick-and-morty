<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;

    public $name;

    public $resultado;

    public function render()
    {

        return view('livewire.home');
    }

    public function salve()
    {
        $this->validate([
            'name' => 'required|min:3'
        ]);

        $response = Http::get('https://rickandmortyapi.com/api/character/?name=' . $this->name);

        $this->resultado =  json_decode($response, true);
    }

}
