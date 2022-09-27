<x-layouts.main-layout title='Home'>
    <p class="text-red-500">Home</p>
    @foreach ($posts as $post )
    <div class="pb-5">
      <p class="font-black text-2xl">{{ $post->title }}</p>
      <p>{{ $post->content }}</p>
    </div>
     
        
    @endforeach
    {{-- @foreach ($arrGames as $arrGame )
       <li>{{ $arrGame }}</li>
        
    @endforeach --}}
</x-layouts.main-layout>