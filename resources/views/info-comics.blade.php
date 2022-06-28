@extends('layouts.app')

@section('main_content')
    @foreach ($info as $item)
    <div class="single-cont-top">
        <div class="single-top">
            <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}">
        </div>
    </div>

    <div class="single-cont-center">
        <div class="single-center">
            <div class="left">
                <h2>{{ $item['title'] }}</h2>
                <div class="sale">
                    <div class="price">
                        <p>price: {{ $item['price'] }}</p>
                        <p>available</p>
                    </div>
                    <div class="btn">
                        Check availability
                    </div>
                </div>
                <p>{{ $item['description'] }}</p>
            </div>
            <div class="right">
                <h3>ADVERTISEMENT</h3>
                <img src="{{ $item['thumb'] }}" alt="{{ $item['type'] }}">
            </div>
        </div>
    </div>

    <div class="single-cont-bottom">
        <div class="single-bottom">
            <div class="talent">
                <h3>Talent</h3>
                <div class="art">
                    <p>Art by: </p>
                    <span>
                        @foreach ($item['artists'] as $art)
                            {{ $art }}
                        @endforeach
                    </span>
                </div>
                <div class="written">
                    <p>Written by:</p>
                    <span>
                        @foreach ($item['writers'] as $write)
                            {{ $write }}
                        @endforeach
                    </span>
                </div>
            </div>
            <div class="specs">
                <h3>Specs</h3>
                <div class="series">
                    <p>Series:</p>
                    <p>{{ $item['type'] }}</p>
                </div>
                <div class="price">
                    <p>U.S. Price:</p>
                    <p>{{ $item['price'] }}</p>
                </div>
                <div class="sale-date">
                    <p>On Sale Date:</p>
                    <p>{{ $item['sale_date'] }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection