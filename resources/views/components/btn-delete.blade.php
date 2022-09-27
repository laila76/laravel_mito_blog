@props(['post'])
<div class="">
    <form action="{{ route('posts.destroy', $post->id) }}"  method="POST"
         onsubmit="return confirm('Est-tu sur de vouloir delete this?')">
        @csrf
        @method('DELETE')

         <button class="btn btn-error" type="submit">Supprimer</button>

    </form>
   
</div>