@extends('layouts.app')

@section('content')
   <div class="flex justify-center">
        <div class="w-8/12  bg-white p-6 rounded-lg ">
            <div class="flex justify-between">
            	<div>
            		<h2>Customers List</h2>
            	</div>
            	<div>
            		<a class="bg-blue-400 py-2 px-6 text-white" href="{{route('customers.create')}}">Add Customer</a>
            	</div>
            </div>
            
    </div>
@endsection