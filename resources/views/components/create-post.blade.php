  <form action="{{ route('user.store') }}" method="POST">
    <div class="m-auto rounded-xl bg-white w-full md:w-2/3 lg:w-2/3">
      <div class="px-5 py-3 flex items-center justify-between text-blue-400 border-b">
      </div>
      <div class="flex p-4">
        <div>
          <img class="rounded-full w-14" src="https://pbs.twimg.com/profile_images/1367267802940375042/H4JDd6aC_400x400.jpg" />
        </div>

        <div class="ml-3 flex flex-col w-full">
          <textarea placeholder="What's happening?" class="w-full text-xl resize-none outline-none h-32"></textarea>
        </div>
      </div>

      <div class="flex items-center text-blue-400 justify-between py-6 px-4 border-t">
        <div class="flex text-2xl pl-12">
        </div>

        <div>
          <p class="inline px-4 py-3 rounded-full font-bold text-white bg-green-500 hover:bg-green-600 cursor-pointer">Post</p>
        </div>
      </div>
    </div>
</form>