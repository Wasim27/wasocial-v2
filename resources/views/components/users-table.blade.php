<!--
https://tailwindcomponents.com/component/responsive-table-5
-->

<section class="container mx-auto p-6 font-mono">
  <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
    <div class="w-full overflow-x-auto">

      <table class="w-full">
        <thead>
          <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
            <th class="px-4 py-3">Name</th>
            <th class="px-4 py-3">No. Posts</th>
            <th class="px-4 py-3">Category</th>
            <th class="px-4 py-3">Date Joined</th>
          </tr>
        </thead>

        @foreach ($users as $user)
        <tbody class="bg-white">
          <tr class="text-gray-700">
            <td class="px-4 py-3 border">
              <div class="flex items-center text-sm">
                <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                  <img class="object-cover w-full h-full rounded-full" src="{{ $user->profile_photo }}" alt="" loading="lazy" />
                  <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                </div>
                <div>
                  <a href="/profile/{{ $user->username }}">
                    <p class="font-semibold text-black">{{ $user->username }}</p>
                    <p class="text-xs text-gray-600">{{ $user->name }}</p>
                  </a>
                </div>
              </div>
            </td>
            <td class="px-4 py-3 text-ms font-semibold border">{{ $user->posts->count() }}</td>
            <td class="px-4 py-3 text-xs border">
              <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> USER </span>
            </td>
            <td class="px-4 py-3 text-sm border">{{ $user->created_at }}</td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
  <span>
    {{ $users->links() }}
  </span>
</section>