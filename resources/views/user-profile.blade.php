<x-app-layout>
	<div class="relative w-full antialiased h-screen overflow-y-none md:flex md:flex-wrap">
	
		@include('layouts.sidebar')

		<main class="bg-woodsmoke-100 h-full flex-1 p-4 shadow-inner mx-auto overflow-y-auto">
			<div class="w-full max-w-4xl mx-auto">
				<section>
					<div class="flex">
						<img class="rounded-full mb-6 w-20" src="{{ $profile_photo }}" alt="profile_photo" onerror="this.onerror=null;this.src='../images/default.png';">
					<div class="w-full my-6 ml-4 flex items-center">
						<h1 class="text-xl font-semibold flex-auto text-black">{{ $profileName }}'s Profile</h1>
					</div>

					<form method="POST" action="/profile/{{ $user->name }}/follow">
						@csrf
						<div class="mt-3">
							{!! $current_user->following($user) ? '<button type="submit" class="p-2 pl-5 pr-5 bg-gray-500 text-gray-100 text-lg rounded-lg focus:border-4 border-gray-300">Unfollow</button>' : '<button type="submit" class="p-2 pl-5 pr-5 bg-gray-500 text-gray-100 text-lg rounded-lg focus:border-4 border-gray-300">Follow</button>' !!}
						</div>
				  </form>
				</div>
					
					<section
						class="p-4 pt-0 sm:p-8 sm:pt-0 rounded-lg bg-indigo-600 md:flex md:flex-wrap items-center shadow-lg">
					</section>

					@foreach ($posts as $post)
					<div class="md:flex mt-4 transform transition duration-500 hover:scale-110">
							<section class="w-full rounded-lg p-2 sm:p-0">
								<div class="flex flex-col flex-wrap">
									@include('components.post')
								</div>
							</section>
					</div>
					@endforeach
				</section>
		</main>
	</div>
</div>
</x-app-layout>


