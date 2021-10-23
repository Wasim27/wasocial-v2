<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wasocial</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  </head>
  <body>
    <header class="pt-10 pb-36 bg-gradient-custom bg-blue-100">
      <div class="container mx-auto px-4 lg:px-0">
        <nav class="w-full flex justify-between">
          <a href="/" class="transform transition duration-500 hover:scale-110">
            <img class="w-20" src="/images/logo.png" alt="Logo">
            <h1 class="text-xl font-bold">Wasocial</h1>
          </a>
          <div class="">
            <a href="/login" class="ml-4 text-2xl lg:text-base mb-6 lg:mb-0 hover:text-green-500 btn">Login</a>
            <a href="/register" class="ml-4 text-2xl lg:text-base mb-6 lg:mb-0 hover:text-green-500">Register</a>
          </div>
        </nav>
        <div class="mt-24 flex items-center ">
          <div class="w-full lg:w-1/2">
            <h1 class="text-4xl lg:text-5xl font-bold">Stay <span class="text-green-600">Connected</span> with Wasocial!</h1>
            <p class="my-4 mb-10">
              A simple way to stay in touch with others. Join the fun now!
            </p>
            <a href="/register" class="p-4 bg-green-600 hover:bg-green-700 btn font-bold">Get started</a>
          </div>
          <div class="hidden lg:flex w-1/2 flex justify-end ">
            <img class="transform transition duration-500 hover:scale-110" src="/images/home-vector-1.png" alt="" class="hidden lg:flex">
          </div>
        </div>
      </div>
    </header>
    
    <section class="bg-green-300 py-24">
      <div class="container mx-auto px-4 lg:px-0">
        <h2 class="text-center font-bold text-2xl lg:text-3xl mb-16">{{ $userCount }} users are signed up to Wasocial</h2>
        <div  class="flex flex-wrap -mx-4">
          <div class="w-full lg:w-1/3 px-4">
            <div class="bg-white my-4 lg:my-0 py-20 px-10 rounded-xl flex flex-col items-center ">
              <img class="rounded-full mb-6" src="/images/working.png" alt="">
              <span class="font-bold text-blue-900 text-lg">User 1</span>
              <small class="text-gray-500">
                Member
              </small>
              <p class="text-center leading-10 mt-6">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                 Sed nec sagittis dolor. Maecenas quam nunc, 
                 tincidunt quis facilisis ut.
              </p>
            </div>
          </div>
          <div class="w-full lg:w-1/3 px-4">
            <div class="bg-white my-4 lg:my-0 py-20 px-10 rounded-xl flex flex-col items-center ">
              <img class="rounded-full mb-6" src="/images/working.png" alt="">
              <span class="font-bold text-blue-900 text-lg">User 2</span>
              <small class="text-gray-500">
                Member
              </small>
              <p class="text-center leading-10 mt-6">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                 Sed nec sagittis dolor. Maecenas quam nunc, 
                 tincidunt quis facilisis ut.
              </p>
            </div>
          </div>
          <div class="w-full lg:w-1/3 px-4">
            <div class="bg-white my-4 lg:my-0 py-20 px-10 rounded-xl flex flex-col items-center ">
              <img class="rounded-full mb-6" src="/images/working.png" alt="">
              <span class="font-bold text-blue-900 text-lg">User 3</span>
              <small class="text-gray-500">
                Member
              </small>
              <p class="text-center leading-10 mt-6">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                 Sed nec sagittis dolor. Maecenas quam nunc, 
                 tincidunt quis facilisis ut.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-20">
      <div class="container mx-auto px-4 lg:px-0">
        <h3 class="font-bold text-center text-2xl lg:text-3xl mb-6">Our Features</h3>
        <div class="flex flex-wrap items-start lg:items-center ">
          <div class="px-0 lg:px-10 w-full lg:w-1/3 flex justify-start lg:justify-center">
            <ul>
              <li class="text-2xl mb-4">
                <i class="las la-check-circle text-blue-500"></i>
                <span>User Privacy</span>
              </li>
              <li class="text-2xl mb-4">
                <i class="las la-check-circle text-blue-500"></i>
                <span>Create posts</span>
              </li>
              <li class="text-2xl mb-4">
                <i class="las la-check-circle text-blue-500"></i>
                <span> Read posts </span>
              </li>
            </ul>
          </div>
          <div class="px-0 lg:px-10 w-full lg:w-1/3 flex justify-start lg:justify-center">
            <ul>
              <li class="text-2xl mb-4">
                <span> Update posts </span>
              </li>
              <li class="text-2xl mb-4">
                <span>Delete Posts</span>
              </li>
              <li class="text-2xl">
                <span> Amazing UI  </span>
              </li>
            </ul>
          </div>
          <div class="px-10 w-1/3 justify-center hidden lg:flex">
            <img class="transform transition duration-500 hover:scale-110" src="/images/chat.png" alt="">
          </div>
        </div>
      </div>
    </section>

    <footer class="py-5 text-gray-400">
      <div class="container mx-auto px-4 lg:px-0">
        <div class="flex flex-wrap -mx-4">
          <div class="pl-0 lg:pl-4 w-full lg:w-1/3">
          </div>
          <div class="w-full lg:w-2/3 flex flex-wrap mt-10 lg:mt-0 pl-0 lg:pl-16 pr-4">
          </div>
        </div>

        <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>

        <a href='https://www.freepik.com/vectors/abstract'>Abstract vector created by vectorjuice - www.freepik.com</a>
        
        <div class="flex flex-col md:flex-row justify-between mt-10">
          <span>
            &copy; All rights reserved
          </span>
          <span>Made with love by Wasim Ramzan</span>
        </div>
      </div>
    </footer>

  </body>
</html>