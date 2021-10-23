<x-app-layout>
		<div class="relative w-full antialiased h-screen overflow-y-none md:flex md:flex-wrap">
			<aside class="w-full lg:w-24 p-2 px-4">
				<ul class="flex items-center justify-center lg:h-full lg:flex-col">
					<li class="mb-2">
						<button class="p-5 px-6 bg-green-300 rounded hover:bg-green-200 shadow-md">
							<i class="fas fa-list text-gray-700">
								<span class="sr-only">Feed</span>
							</i>
						</button>
					</li>
					<li class="mb-2">
						<button class="p-5 px-6 bg-green-300 rounded hover:bg-green-100 hover:shadow-md">
							<i class="fas fa-user text-black-700">
								<span class="sr-only">My Profile</span>
							</i>
						</button>
					</li>
					<li class="mb-2">
						<button class="p-5 px-6 bg-green-300 rounded hover:bg-green-100 hover:shadow-md">
							<i class="fas fa-calendar text-gray-700">
								<span class="sr-only">Member List</span>
							</i>
						</button>
					</li>
					<li class="mb-2">
						<button class="p-5 px-6 bg-green-300 rounded hover:bg-green-100 hover:shadow-md">
							<i class="fas fa-trophy text-gray-700">
								<span class="sr-only">Optional</span>
							</i>
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
						<div class="md:flex mt-4 ">
							<section class="h-full md:w-1/2 md:mr-4 rounded-lg">
								<h2 class="my-6 text-gray-500 text-xs tracking-wider font-bold uppercase ">
								</h2>
								<section class="bg-white w-full rounded-lg p-4 sm:p-8">
									<div class="flex flex-wrap">
											<div class="text-center">
										</div>
									</div>
								</section>
							</section>
						</div>
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


