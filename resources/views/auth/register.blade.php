@extends('layouts.app')
@section('content')
   <div class="flex justify-center ">
        <div class="w-4/12  bg-white rounded-lg p-4">
        <form class="w-full max-w-lg" action="{{route('register')}}" method="POST">
        <div class="flex flex-wrap -mx-3 mb-3">
            @csrf
                <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                   Name
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('name') border-red-500 @enderror" id="name" type="text" placeholder="name" name="name" value="{{old('name')}}">
                    @error('name')
                    <p class="text-red-600 text-xs italic">{{$message}}</p>
                @enderror
                </div>

            </div>
              <div class="flex flex-wrap -mx-3 mb-3">
                <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="username">
                   UserName
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('username') border-red-500 @enderror" id="username" type="text" placeholder="username" name="username" value="{{old('username')}}">
                 @error('username')
                    <p class="text-red-600 text-xs italic">{{$message}}</p>
                @enderror
                </div>
                
            </div>
               <div class="flex flex-wrap -mx-3 mb-3">
                <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                   Email
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('email') border-red-500 @enderror" id="email" type="email" placeholder="email" name="email" value="{{old('email')}}">
                    @error('email')
                    <p class="text-red-600 text-xs italic">{{$message}}</p>
                @enderror
                </div>

            </div>
         
            <div class="flex flex-wrap -mx-3 mb-3">
                <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Password
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('email') border-red-500 @enderror" id="password" type="password" placeholder="******************" name="password">
                <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
                       @error('password')
                    <p class="text-red-600 text-xs italic">{{$message}}</p>
                @enderror
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-3">
                <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password_confirmation">
                    Confirm Password
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('password') border-red-500 @enderror" id="password_confirmation" type="password" placeholder="******************" name="password_confirmation" >
           
                </div>

            </div>
            <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
  Submit
</button>
          
</form>
        </div>
   </div>
@endsection