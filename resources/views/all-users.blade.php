<title>Wasocial ● Search</title>

<x-app-layout>
	<div class="relative w-full antialiased overflow-y-none h-screen md:flex md:flex-wrap">

		  @include('layouts.sidebar')

		<main class="bg-woodsmoke-100 h-full flex-1 p-4 shadow-inner mx-auto overflow-y-auto">
			<div class="w-full max-w-2xl mx-auto">
				<section>
					<div class="w-full my-6 flex items-center">
						<h1 class="text-xl font-semibold flex-auto text-black">User List</h1>
					</div>
					<div>
						<form action="/search" method="GET">
							<div>
									<input class="border-gray-300" type="text" name="search" placeholder="Search Users"/>
									<button type="submit" class="p-2 pl-4 pr-4 bg-gray-500 text-gray-100 text-lg rounded-lg focus:border-4 border-gray-300">Search</button>
							</div>
					</form>
					</div>
          @include('components.users-table')
		</main>
	</div>
</div>
</x-app-layout>


