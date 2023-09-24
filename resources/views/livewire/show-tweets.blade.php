<div>
    Show Tweets

    <div>
        {{ $message }}
    </div>

    <input type="text" name="message" id="message" wire:model="{{$message}}">

    <hr>

    @foreach ($tweets as $tweet)
        {{ $tweet->user->name}} - {{ $tweet->content }} <br>
    @endforeach
</div>
