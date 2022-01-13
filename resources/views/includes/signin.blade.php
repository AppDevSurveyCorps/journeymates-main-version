<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signin - JourneyMates</title>
    <link href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">

  
    <div class="grid min-h-screen place-items-center">
      
      <div class="bg-white shadow-md border border-gray-200 rounded-lg max-w-sm p-4 sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">

        @if(session()->has('success'))
    <div class="alert alert-succes-dismissable fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="CLose"></button>
    </div>
    @endif

    
    
    <h1 class="text-xl font-semibold"><b>JourneyMates </b><br><span class="font-normal">sign-in to unlock the best of JourneyMates</span></h1>

    


    <form action="/login" method="POST" mt-6>
      @csrf

      <label for=" " class="block text-xs font-semibold text-gray-600 uppercase">E-mail</label>
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}


        </div>
        @enderror
      <input id="email" type="email" name="email" placeholder="john.doe@company.com" autocomplete="email"  class=" form-control @error('email') is-invalid @enderror block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required autofocus value="{{ old ('email') }}" />
      
      
      <label for="password" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Password</label>
      <input id="password" type="password" name="password" placeholder="********" autocomplete="current-password" class="block w-full p-3 mt-2 mb-6 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
      @if(session()->has('loginError'))
    <div class="alert alert-danger-dismissable fade show" role="alert">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="CLose"></button>
    </div>
    @endif
      <button type="submit" class="w-full py-3 mt-2 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
        Log in
      </button>
      <p class="flex justify-between inline-block mt-4 text-xs text-gray-500 ">Don't have an account ? <a href="{{ url('register') }}"class="text-black-700 hover:underline dark:text-black-500 cursor-pointer hover:text-black">Create
        account</a> </p>
    </form>
  </div>
</div>
</body>
</html>

		