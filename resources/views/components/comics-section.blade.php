@foreach ($comics_array as $item)
    <div class="card">
        <img src="{{ $item['thumb'] }}" alt="{{ $item['type'] }}">
        <a href="{{ route('info-comics', $item['id']) }}">{{ $item['series'] }}</a>
    </div>
@endforeach