  <form action="{{ route('feed.store') }}" method="POST">
    @csrf

    <div class="m-auto rounded-xl bg-white w-full md:w-2/3 lg:w-2/3">
      <div class="flex p-4">
        <div>
          {{-- <img class="rounded-full w-14" src="" /> --}}
        </div>

        <div class="ml-3 flex flex-col w-full">
          <textarea name="body" id="body" maxlength="255" placeholder="What's happening?" class="w-full text-xl resize-none outline-none h-32"></textarea>
        </div>
      </div>

      <div class="flex items-center text-blue-400 justify-between py-3 px-4 border-t">
        <div class="flex text-2xl pl-12">
        </div>

        <div>
          <button class="inline px-4 py-3 rounded-full font-bold text-white bg-green-500 hover:bg-green-600 cursor-pointer" type="submit">Post</button>
        </div>
      </div>
    </div>
</form>