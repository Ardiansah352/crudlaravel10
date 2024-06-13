<?php

namespace App\Livewire\Create;

use Livewire\Component;
use App\Models\News;
class Page extends Component
{
    public $messege;
    public function render()
    {
        return view('livewire.create.page');
    }
    public function send(){
        // dd($this->title, $this->short, $this->long);
        News::create ([
            'messege'=>$this->messege,
        ]);
        $this->messege=null;
    }
}
