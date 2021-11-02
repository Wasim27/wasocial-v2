<div class="flex mb-2 mr-2">
  <img class="w-10" src="{{ $post->user->profile_photo }}" alt="profile_picture">
  <a class="text-green-600" href="/profile/{{ $post->user->username }}">{{ $post->user->username }}
  </a>
</div>

<p class="mb-1 text-gray-500 text-xs">{{ $post->posted_at->format('d M, Y') }}</p>
  <div class="text-left">
    {{ $post->body }}				
  </div>