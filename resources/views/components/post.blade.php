<!--
  Reference:
 
  JermineJunior Post / Card. [post card with a user image]. https://tailwindcomponents.com/component/post-card
-->

<div class="flex bg-white shadow-lg rounded-lg my-2">
  <div class="flex items-start px-4 py-6 break-all">

     <img class="w-12 h-12 rounded-full object-cover mr-4 shadow" src="{{ $post->user->profile_photo }}" alt="profile_photo" onerror="this.onerror=null;this.src='../images/default.png';">
    
     <div class="">
       <a href="/profile/{{ $post->user->username }}">
        <div class="flex items-center justify-between">
           <h2 class="text-lg font-semibold text-green-600 mt-1">{{ $post->user->username }} </h2>
        </a>
        </div>
        <p class="text-gray-700">{{ $post->created_at->format('d M, Y') }}</p>
        <p class="mt-3 text-gray-700 text-sm">
           {!! nl2br(e($post->body)) !!}
        </p>
        <div class="mt-2 flex items-center">
           @include('components.like-dislike-post')
        </div>
     </div>
  </div>
</div>