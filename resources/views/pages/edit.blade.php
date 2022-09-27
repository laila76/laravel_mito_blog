<x-layouts.main-layout title="update Post">

   
    <div class="container">
        <h1 class=" pt-24 font-bold text-4xl pb-10">update Post</h1>
        <form action="{{ route('posts.update',$post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="">
                {{-- title --}}
                <input type="text" name="title" placeholder="Titre du post" 
                class="block w-full rounded-lg border-gray-400" value="{{ old('title',$post->title) }}">
                <x-error-msg  name="title" />
                {{-- content --}}
                <textarea name="content" cols="30" rows="10" 
                class="mt-5 block w-full rounded-lg border-gray-400
                " placeholder="votre contenu ..">{{ old('content',$post->content) }}</textarea>
                <x-error-msg  name="content" />
                
                {{-- img --}}
                <input type="text" name="url_img" placeholder="Url de votre image" 
                 value="https://source.unsplash.com/640x480/?animals?1">
                <button class=" btn-primary btn mt-6 w-full" type="submit">Envoyer</button>
                
            </div>

        </form>

    </div>
</x-layouts.main-layout>