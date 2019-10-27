<nav class="absolute top-0 inset-x-0">
    <div class="container mx-auto px-4 flex items-center flex-wrap">
        <h1 class="font-semibold text-white text-2xl leading-none tracking-wider py-4 flex-grow flex items-center">
            <a href="{{ url('/') }}">
                <icon icon="fa-user-astronaut" icon-size="text-4xl mr-2" />
                <span class="py-2">Astrotomic</span>
            </a>
        </h1>

        @foreach($links as $link)
            <a href="{{ $link['href'] }}" class="btn ml-4">
                <icon :icon-style="$link['style']" :icon="$link['icon']" />
                {{ $link['label'] }}
            </a>
        @endforeach
    </div>
</nav>