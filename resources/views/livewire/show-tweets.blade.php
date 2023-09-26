<div>
    Show Tweets

    <div>
        {{ $content }}
    </div>
    
    <form action="" method="post" wire:submit.prevent="create">
        <input type="text" name="content" id="content" wire:model='content'>
        @error('content') {{-- retornar mensagem de error da rules 'content' --}}
            {{ $message }}
        @enderror
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
