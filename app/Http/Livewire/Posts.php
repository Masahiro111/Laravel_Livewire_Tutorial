<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Posts extends Component
{
    public $title;
    public $content;

    public function hydrate()
    {
        $this->validate([
            'title' => 'required|min:10|max:20',
            'content' => 'required'
        ]);
    }


    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
    ];


    public function save()
    {
        // $this->title = "This is the changed text when you click the save button.";

        $data = [
            'title' => $this->title,
            'content' => $this->content,
            'user_id' => auth()->user()->id,
        ];

        Post::create($data);
        $this->cleanVars();
    }

    private function cleanVars()
    {
        $this->title = null;
        $this->content = null;
    }

    public function render()
    {
        return view('livewire.posts');
    }
}
