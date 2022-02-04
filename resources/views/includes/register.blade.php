			<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - JourneyMates</title>
    <link href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <div class="grid min-h-screen place-items-center">
      <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm p-4 sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
    <h1 class="text-xl font-semibold"><b>JourneyMates </b><br><span class="font-normal">signup to unlock the best of JourneyMates</span></h1>

    <form action='/register' method="post" accept-charset="UTF-8">
		@csrf
      <label for="Full Name" class="block text-xs font-semibold text-gray-600 uppercase">Full Name</label>
      <input id="fname" type="fname" name="fname" placeholder="john Doe" autocomplete="fname" class="block w-full p-3 mt-2  bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
      <label for="email" class="block text-xs font-semibold text-gray-600 uppercase">E-mail</label>
      <input id="email" type="email" name="email" placeholder="john.doe@company.com" autocomplete="email" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
      <label for="mnumber" class="block text-xs font-semibold text-gray-600 uppercase">Mobile Number</label>
      <input id="mnumber" type="tel" name="mnumber" placeholder="+60 123 4567"  class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
      <label for="password" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Password</label>
      <input id="password" type="password" name="password" placeholder="********" autocomplete="current-password" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required minlength="6"/>
      <input type="submit" value="Register" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
        
      <br><br>
      <p>already have an account?</p>
      <p class="text-gray-500 cursor-pointer hover:text-black"><a href="{{ url('login') }}">Log in</a></p>
    </form>
  </div>
</div>
</body>
</html>

