<h1>Pets</h1>

<ul>
    @foreach ($pets as $pet)
        <li>
            <a href="{{ action('PetsController@show', $pet->id) }}">{{ $pet->name }}</a>
        </li>
    @endforeach
</ul>