@extends('layouts.app')

@section('content')
   <div class="flex justify-center">
        <div class="w-8/12  bg-white p-6 rounded-lg ">
            <div class="flex justify-between mb-5 border-b py-5">
            	<div>
            		<h2>Add Customers</h2>
            	</div>
            	<div>
            		<a class="bg-blue-400 py-2 px-6 text-white" href="{{route('dashboard')}}">Back</a>
            	</div>
            </div>
            <form class="w-full " action="{{route('customers.store')}}" method="POST">
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
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                   Phone
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('phone') border-red-500 @enderror" id="phone" type="text" placeholder="phone" name="phone" value="{{old('phone')}}">
                    @error('phone')
                    <p class="text-red-600 text-xs italic">{{$message}}</p>
                @enderror
                </div>

            </div>
         
            <div class="flex flex-wrap -mx-3 mb-3">
                <div class="w-full px-3">

                <label class="block text-left w-full" style="">
                  <span class="text-gray-700 block uppercase tracking-wide text-gray-700 text-xs font-bold">Area</span>
                  <select class="form-select block w-full  appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 mt-2" name="area">
                    <option></option>
                    <option value="bunamwaya">Bunamwaya</option>
                    <option value="ngobe">Ngobe</option>
                    <option value="kisigula">Kisigula</option>
                    <option value="'nyanama">Nyanama</option>
                    <option value="other">Other</option>
                  </select>
                </label>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-3">
                <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                    Email
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-2 px-4 mb-2 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('email') border-red-500 @enderror" id="email" type="email" placeholder="email" name="email" >
           
                </div>

            </div>
            <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
  Submit
</button>
          
</form>
    </div>
@endsection