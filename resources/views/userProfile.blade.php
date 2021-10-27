<x-app-layout>
	<div class="relative w-full antialiased h-screen overflow-y-none md:flex md:flex-wrap">
	
		@include('layouts.sidebar')

		<main class="bg-woodsmoke-200 h-full flex-1 p-4 shadow-inner mx-auto overflow-y-auto">
			<div class="w-full max-w-4xl mx-auto">
				<section>
					<div class="w-full my-6 flex items-center">
						<h1 class="text-xl font-semibold flex-auto text-black">{{ $profileName }}'s Profile</h1>
					</div>
					
					<section
						class="p-4 pt-0 sm:p-8 sm:pt-0 rounded-lg bg-indigo-600 md:flex md:flex-wrap items-center shadow-lg">
					</section>

					@foreach ($posts as $post)
					<div class="md:flex mt-4 transform transition duration-500 hover:scale-110">
							<section class="bg-white w-full rounded-lg p-4 sm:p-8">
								<div class="flex flex-col flex-wrap">
									<div>
										<a class="text-green-600" href="/profile/{{ $post->user->username }}">{{ $post->user->username }}</a>
									</div>
									<p class="mb-1 text-gray-500 text-xs">{{ $post->posted_at->format('d M, Y') }}</p>
										<div class="text-left">
											{{ $post->body }}				
									</div>
								</div>
								
							</section>
					</div>
					@endforeach
				</section>
		</main>


		
	</div>
</div>
</x-app-layout>


