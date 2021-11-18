<x-app-layout>
	<div class="relative w-full antialiased overflow-y-none h-screen md:flex md:flex-wrap">

		  @include('layouts.sidebar')

		<main class="bg-woodsmoke-100 h-full flex-1 p-4 shadow-inner mx-auto overflow-y-auto">

			<div class="w-full max-w-2xl mx-auto">
				<section>
					<div class="w-full my-6 flex items-center">
						<h1 class="text-xl font-semibold flex-auto text-black">Feed</h1>
					</div>

					@if (session()->has('message'))
					<section x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
						<h1 class="text-xl mb-5 text-green-700">
						{{ session('message') }}
						</h1>
					</section>
			   @endif
					
					@include('components.create-post')

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

		@include('components.popular-activity')
	</div>
</div>
</x-app-layout>


