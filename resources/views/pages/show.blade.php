<x-layouts.main-layout :title="$post->title">
    <div class="container mb-10">
        <img src="{{ $post->url_img }}" alt="{{ $post->title }}">
        <div class="text-3xl font-bold py-8">
             <p>{{ $post->title }}</p>
             <p>{!! nl2br(e($post->content)) !!}</p>
             <div class="pt-6">
                <x-btn-delete :post="$post"/>
                <a href="{{ $post->id}}/edit " class="btn btn-success">Modifier</a>
             </div>

        </div>
        

    </div>

   

</x-layouts.main-layout>