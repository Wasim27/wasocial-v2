<x-app-layout>
	<div class="relative w-full antialiased h-screen overflow-y-none md:flex md:flex-wrap">
	
		@include('layouts.sidebar')

		<main class="bg-woodsmoke-200 h-full flex-1 p-4 shadow-inner mx-auto overflow-y-auto">
			<div class="w-full max-w-4xl mx-auto">
				<section>
					<div class="w-full my-6 flex items-center">
						<h1 class="text-xl font-semibold flex-auto text-black">Feed</h1>
					</div>
					
					@include('components.create-post')

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
								{{-- <div class="absolute inset-y-20 right-5">
								  <button class="px-4 py-2 rounded-md text-sm font-medium border shadow focus:outline-none focus:ring transition text-green-600 bg-green-50 border-green-200 hover:bg-green-100 active:bg-green-200 focus:ring-green-300" type="submit">LIKE</button>
							  </div> --}}

							</section>
					</div>
					@endforeach
				</section>
		</main>


		<aside class="z-30 absolute block bg-white w-12 w-full p-4 px-8 overflow-y-auto inset-0 / lg:relative lg:w-64  // lg:block lg:z-auto ">
			<section>
				<h2 class="my-6 text-xs tracking-wider font-bold uppercase">Popular Activity</h2>
									Coming Soon
			</section>
		</aside>
	</div>
</div>
</x-app-layout>


