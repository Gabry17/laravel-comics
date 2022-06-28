<header>
    <div class="top">HEADER TOP</div>
    <div class="bottom">
        <ul>
            @foreach ($menu_info as $item)
                <li class="{{ Request::route()->getName() === $item['name'] ? 'active' : '' }}">
                    <a href="">{{ $item['name'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="banner"></div>
</header>