<!--
  Reference:
 
  JermineJunior Post / Card. [post card with a user image]. https://tailwindcomponents.com/component/post-card
-->

<div class="flex bg-white shadow-lg rounded-lg mx-4 md:mx-auto my-2 max-w-md md:max-w-2xl w-full">
  <div class="flex items-start px-4 py-6">

     <img class="w-12 h-12 rounded-full object-cover mr-4 shadow" src="{{ $post->user->profile_photo }}" alt="profile_photo" onerror="this.onerror=null;this.src='../images/default.png';">
    
     <div class="">
       <a href="/profile/{{ $post->user->username }}">
        <div class="flex items-center justify-between">
           <h2 class="text-lg font-semibold text-green-600 -mt-1">{{ $post->user->username }} </h2>
        </a>
        </div>
        <p class="text-gray-700">{{ $post->posted_at->format('d M, Y') }}</p>
        <p class="mt-3 text-gray-700 text-sm">
           {{ $post->body }}
        </p>
        <div class="mt-2 flex items-center">
           @include('components.like-dislike-post')
        </div>
     </div>
  </div>
</div>