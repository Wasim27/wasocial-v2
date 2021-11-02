<x-app-layout>

	<div class="relative w-full antialiased overflow-y-none md:flex md:flex-wrap h-screen">
		@include('layouts.sidebar')
		<main class="bg-woodsmoke-100 h-full flex-1 p-4 shadow-inner mx-auto overflow-y-auto">
			<div class="w-full max-w-2xl mx-auto">
				<section>

					<div class="flex">
						<img class="rounded-full mb-6 w-20" src="{{ $profile_photo }}" alt="">

					<div>
							<a onclick='Livewire.emit("openModal", "profile-photo")'>
								<svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
								</svg>
							</a>
					</div>
			
					<div class="w-full my-6 ml-2 items-center">
						<h1 class="text-xl font-semibold flex-auto text-black">{{ $userName }}'s Profile (YOU)</h1>
					</div>
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
					<div class="md:flex mt-4 transform transition duration-500 hover:scale-105">
							<section class="w-full rounded-lg p-2 sm:p-0">
								@include('components.post')
								@include('components.edit-delete')
							</section>
					</div>
					@endforeach
				</section>
		</main>

		@include('components.popular-activity')

	</div>
</div>
</x-app-layout>


