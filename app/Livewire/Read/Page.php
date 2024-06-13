<?php

namespace App\Livewire\Read;

use Livewire\Component;
use App\Models\News;
class Page extends Component
{
    public $news;
    public function render()
    {
        return view('livewire.read.page');
        {
        $this->news=News::all();
        return view('livewire.read.page');
        }
    }

    public function delete($id){
        News::find($id)->delete();
    }

    public function edit($id){
        return redirect()->route('edit', ['id'=> $id]);
    }
}
