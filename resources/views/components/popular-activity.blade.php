<aside class="hidden sm-flex z-30 absolute block bg-woodsmoke-100 w-12 w-full p-4 px-8 overflow-y-auto inset-0 / lg:relative lg:w-64  // lg:block lg:z-auto ">
  <section>
    <h2 class="my-6 text-xs tracking-wider font-bold uppercase">Most Followed Users</h2>
              @foreach ($top_users as $top)
              <div class="flex items-center text-sm mt-5">
                <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                  <img class="object-cover w-full h-full rounded-full" src="{{ $top->profile_photo }}" alt="profile_photo" onerror="this.onerror=null;this.src='./images/default.png';" loading="lazy" />
                  <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                </div>
                <div>
                  <a href="/profile/{{ $top->username }}">
                    <p class="font-semibold text-black">{{ $top->username }}</p>
                  </a>
                </div>
              </div>
            @endforeach
  </section>
</aside>