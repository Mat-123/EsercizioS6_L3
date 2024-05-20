<h1>Books list</h1>

{{-- @if ($titles)
    <ul>
        @foreach ($titles as $title)
            <li @style([
                'background-color: gray' => $loop->even,
                'background-color: lightgray' => $loop->odd,
            ])>{{ $loop->iteration }} - remaining {{ $loop->remaining }} - {{ $title }}</li>
            @dump($loop)
        @endforeach
    </ul>
@else
    <h2>Non ci sono libri</h2>
@endif --}}



@forelse ($books as $book)
    <div>{{ $book->title }}</div>
@empty
    <h2>Non ci sono libri</h2>
@endforelse