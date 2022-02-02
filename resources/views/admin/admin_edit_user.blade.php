<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit User - JourneyMates</title>
    <link href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.min.css" rel="stylesheet">
</head>
<!-- component -->
<div class="grid min-h-screen place-items-center">
    <div class="w-11/12 p-12 bg-white sm:w-8/12 md:w-1/2 lg:w-5/12">
      
      @foreach ($user as $a) 
      <form action="{{ url('admin_update_user') }}" method="POST">
        @csrf
       
        <input type="hidden" name="id" value="{{ $a->user_id }}"> <br/>
        <h1 class="text-xl font-semibold">Edit User</h1>
        <label for="Full Name" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Full Name</label>
        <input id="fname" type="fname" name="fname" value="{{ $a->fname }}"autocomplete="fname" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner"required />
        <label for="email" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">E-mail</label>
        <input id="email" type="email" name="email" value="{{ $a->email }}" autocomplete="email" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
        <label for="mnumber" class="block text-xs font-semibold text-gray-600 uppercase">Mobile Number</label>
        <input id="mnumber" type="tel" name="mnumber" value="{{ $a->mnumber }}" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required />
        

        @if ($a -> user_id == ucwords(auth()->user()->user_id) )
        <label for="password" class="block text-xs font-semibold text-gray-600 uppercase">Password</label>
        <input id="password" placeholder="Password " type="password" name="password" class="block w-full p-3 mt-2 text-gray-700 bg-gray-200 appearance-none focus:outline-none focus:bg-gray-300 focus:shadow-inner" required /> 

        @endif

        
        @if(Auth::user()->role == 'ADMIN')
        <label for="role" class="block mt-2 text-xs font-semibold text-gray-600 uppercase">Role</label>
        <select id="role" name="role">
          <option value="ADMIN">ADMIN</option>
          <option value="USER">USER</option>
        </select>
        @endif
        

        
       
        <button type="submit" value="" class="w-full py-3 mt-6 font-medium tracking-widest text-white uppercase bg-black shadow-lg focus:outline-none hover:bg-gray-900 hover:shadow-none">
          Update User Information
        </button>
      </form>
      @endforeach
    </div>
  </div>