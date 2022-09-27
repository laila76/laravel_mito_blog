<x-layouts.main-layout :title="$post->title">
    <div class="container mb-10">
        <img src="{{ $post->url_img }}" alt="{{ $post->title }}">
        <div class="text-3xl font-bold py-8">
             <p>{{ $post->title }}</p>
             <p>{{ $post->content }}</p>
             <div class="pt-6">
                <x-btn-delete :post="$post"/>
             </div>

        </div>
        

    </div>

   

</x-layouts.main-layout>