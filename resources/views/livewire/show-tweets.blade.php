<div>
    Show Tweets

    <div>
        {{ $message }}
    </div>
    
    <form action="" method="post" wire:submit.prevent="create">
        <input type="text" name="message" id="message" wire:model='message'>
        <button type="submit">Criar Tweet</button>
    </form>

    <hr>

    @foreach ($tweets as $tweet)
    <table>
        <tr>
            <th>Nome</th>
            <th>Tweet</th>
        </tr>
        <tr>
            <td>{{ $tweet->user->name}}</td>
            <td>{{ $tweet->content }}</td>
        </tr>
    </table>

    @endforeach
</div>
