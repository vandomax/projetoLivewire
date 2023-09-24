<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Tweet;

class ShowTweets extends Component
{

    public $message = 'Um teste';

    public function render()
    {
        $tweets = Tweet::with('user')->get();

        return view('livewire.show-tweets', [
            'message' => $this->message,
            'tweets' => $tweets
        ]);
    }

}
