<x-app-layout>

	<div class="relative w-full antialiased h-screen overflow-y-none md:flex md:flex-wrap">
		@include('layouts.sidebar')
		<main class="bg-woodsmoke-100 h-full flex-1 p-4 shadow-inner mx-auto overflow-y-auto">
			<div class="w-full max-w-2xl mx-auto">
				<section>
					<div class="w-full my-6 flex items-center">
						<h1 class="text-xl font-semibold flex-auto text-black">{{ $userName }}'s Profile (YOU)</h1>
					</div>

					@if (session()->has('message'))
					<section>
						<h1 class="text-xl text-green-700">
						{{ session('message') }}
						</h1>
					</section>
			   @endif

					

					@foreach ($posts as $post)
					<div class="md:flex mt-4 transform transition duration-500 hover:scale-105">
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

								<form action="{{ route('feed.destroy', $post->id) }}" 
									method="POST">

									<a onclick='Livewire.emit("openModal", "edit-post", {{ json_encode(["post" => $post->id]) }})' class="absolute inset-y-8 right-5 cursor-pointer">
										<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
											<path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
											<path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
										</svg>
									</a>

									@csrf
									@method('DELETE')
									<div class="absolute inset-y-16 right-5">
										<button type="submit" class="cursor-pointer" onclick="return confirm('Are you sure you wish to delete this post?')">
											<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="red">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
											</svg>
										</button>
									</div>
								</form>

							</section>
					</div>
					@endforeach
				</section>
		</main>

		@include('components.popular-activity')

	</div>
</div>
</x-app-layout>


