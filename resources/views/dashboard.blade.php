<x-app-layout>
		<div class="relative w-full antialiased h-screen overflow-y-none md:flex md:flex-wrap">
			<aside class="bg-gray-200 w-full lg:w-24 p-2 px-4">
				<ul class="flex items-center justify-center lg:h-full lg:flex-col">
					<li class="mb-2">
						<button class="p-3 px-3 bg-green-500 rounded hover:bg-green-200 shadow-md">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                              </svg>
						</button>
					</li>
					<li class="mb-2">
						<button class="p-3 px-3 bg-green-500 rounded hover:bg-green-100 hover:shadow-md">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                              </svg>
						</button>
					</li>
					<li class="mb-2">
						<button class="p-3 px-3 bg-green-500 rounded hover:bg-green-100 hover:shadow-md">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                              </svg>
						</button>
					</li>
					<li class="mb-2">
						<button class="p-3 px-3 bg-green-500 rounded hover:bg-green-100 hover:shadow-md">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
						</button>
					</li>
				</ul>
			</aside>

			<main class="bg-gray-100 h-full flex-1 p-4 shadow-inner mx-auto overflow-y-auto">
				<div class="w-full max-w-4xl mx-auto">
					<section>
						<div class="w-full my-6 flex items-center">
							<h1 class="text-xl font-semibold flex-auto text-black">Feed</h1>
						</div>
						
						<section
							class="p-4 pt-0 sm:p-8 sm:pt-0 rounded-lg bg-indigo-600 md:flex md:flex-wrap items-center shadow-lg">
						</section>

						@foreach ($posts as $post)
						<div class="md:flex mt-4 ">
								<section class="bg-white w-full rounded-lg p-4 sm:p-8">
									<div class="flex flex-col flex-wrap">
										<div>
											<a class="text-green-600" href="profile/{{ $post->user->id }}">{{ $post->user->name }}</a>
										</div>
											<div class="text-left">
												{{ $post->body }}				
										</div>
									</div>
								</section>
						</div>
						@endforeach


					</section>
			</main>


			<aside class="z-30 absolute block bg-white w-12 w-full p-4 px-8 overflow-y-auto inset-0 / lg:relative lg:w-64  // lg:block lg:z-auto ">
				<section>
					<h2 class="my-6 text-gray-500 text-xs tracking-wider font-bold uppercase">Popular Activity</h2>
                    Coming Soon
					{{-- <article class="flex flex-row  items-start flex-wrap mb-8">
						<img class="pointer-events-none h-12 rounded-full w-12"
							src="https://randomuser.me/api/portraits/men/97.jpg" alt="">
						<div class="flex-1 pl-4 text-gray-700 text-sm leading-snug">
							<span class="font-semibold inline text-gray-800">Tom Ross</span> has bought <span
								class="font-semibold text-orange-600">3 standard</span> tickets on your event
							<span class="text-xs pt-4 block w-full">3 mins ago</span>
						</div>

					</article> --}}
				</section>
			</aside>
		</div>
	</div>
</x-app-layout>


