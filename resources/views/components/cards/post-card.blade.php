@props([
    'url_img',
    'title',
    'content',
])


<div class="mx-w-md shadow-xl">
    <img src="{{ $url_img }}" alt="{{ $url_img }}">
    <div class="min-h-[280px] p-4">
        <p class="font-bold text-2xl pb-4">{{ $title }}</p>
        <p>{{ Str::substr($content,0,90)  }}</p>
    </div>
</div>