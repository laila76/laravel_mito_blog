<x-layouts.main-layout title='accueil'>

    {{-- @foreach ($posts as $post)
    <div class="pb-5">
      <p class="font-black text-2xl">{{ $post->title }}</p>
      <p>{{ $post->content }}</p>
    </div> --}}


    {{-- @endforeach --}}
    {{-- @foreach ($arrGames as $arrGame)
       <li>{{ $arrGame }}</li>
        
    @endforeach --}}
    <div class="container">
        <p class="text-red-500 text-center text-4xl pt-10 pb-10 font-black">Blog Mito Laravel</p>
        <div class="grid grid-cols-4 gap-3">

            @foreach ($posts as $post)
                <a href="posts/{{ $post->id }}">
                    <x-cards.post-card :content="$post->content" :title="$post->title" :url_img="$post->url_img" />
                </a>
            @endforeach
            @forelse ($posts as $post)
                <a href="posts/ {{ $post->id }}">
                    <x-cards.post-card :content="$post->content" :title="$post->title" :url_img="$post->url_img" />
                </a>

            @empty
                <p class="text-center">pas d'article actuellement</p>
            @endforelse
        </div>
    </div>

</x-layouts.main-layout>
