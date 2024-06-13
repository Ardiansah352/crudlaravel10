<?php

namespace App\Livewire\Create;

use Livewire\Component;
use App\Models\News;
class Page extends Component
{
    public $messege;
    public $newsId;
    public function render()
    {
        return view('livewire.edit.page');
    }
    public function mount($newsId){
        $this->newsId=$newsId;
        $news=News::find($newsId);
        $this->messege=$news->messege;
    }
    public function update(){
        News::find($this->newsId)->update([
            'messege'=>$this->messege,
        ]);
        $this->messege=null;
    }
}
