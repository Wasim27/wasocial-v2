<div class="flex mt-3">
  <form method="POST" action="/posts/{{ $post->id }}/like">
    @csrf
  <div class="{{ $post->isLikedBy($current_user) ? 'text-blue-500' : 'text-gray-500' }} mr-4">
    <button type="submit">
    <svg xmlns="http://www.w3.org/2000/svg" class=" h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
    </svg>
    <span type="submit">{{ $post->likes ?: 0 }}</span>
  </button>
  </form>
  </div>

  <form method="POST" action="/posts/{{ $post->id }}/like">
    @csrf
    @method('DELETE')
  <div class="{{ $post->isDislikedBy($current_user) ? 'text-blue-500' : 'text-gray-500' }}">

    <button type="submit">
    <svg xmlns="http://www.w3.org/2000/svg" class=" h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14H5.236a2 2 0 01-1.789-2.894l3.5-7A2 2 0 018.736 3h4.018a2 2 0 01.485.06l3.76.94m-7 10v5a2 2 0 002 2h.096c.5 0 .905-.405.905-.904 0-.715.211-1.413.608-2.008L17 13V4m-7 10h2m5-10h2a2 2 0 012 2v6a2 2 0 01-2 2h-2.5" />
    </svg>
    <span>{{ $post->dislikes ?: 0 }}</span>
  </button>
  </div>
 </form>
</div>