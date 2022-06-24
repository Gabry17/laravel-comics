@extends('layouts.app')

@section('main_content')
<div class="content">
    <div class="top">
        @include('components.comics-section', [
        'comics_array' => $comics,
        ])
    </div>
</div>
<div class="center">
    ICON
</div>
@endsection