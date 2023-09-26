<?php

namespace App\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class ShowTweets extends Component
{

    public $content = 'Um teste';

    protected $rules = [ //regras de validação
        'content' => 'required|min:3|max:255'
    ];

    public function render()
    {
        $tweets = Tweet::with('user')->get();

        return view('livewire.show-tweets', [
            'tweets' => $tweets
        ]);
    }

    public function create(){

        $this->validate();    
    
        Tweet::create([
            'content' => $this->content,
            'user_id'=> 1,
        ]);
        $this->content = '';
    }


}
