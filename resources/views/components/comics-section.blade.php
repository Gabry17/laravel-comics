@foreach ($comics_array as $item)
    <div class="card">
        <img src="{{ $item['thumb'] }}" alt="{{ $item['type'] }}">
        <p>{{ $item['series'] }}</p>
    </div>
@endforeach