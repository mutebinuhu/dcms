@extends('layouts.app')
@section('content')
  
   <div class="wholebody">
   <div class="flex justify-center mb-5 hidden modal relative">
    <div class="w-8/12  bg-white p-6 rounded-lg  absolute top-48">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quibusdam sed repellat mollitia quod sapiente vel nesciunt ducimus quasi est asperiores dolor voluptates, veritatis temporibus rem. Magnam quod a assumenda.
        </div>  
    </div>
   <div>
        <div class="flex justify-center">
        <div class="w-8/12  bg-white p-6 rounded-lg ">
            <div class="md:flex justify-between">
                <div class="w-full border py-2 px-2 rounded md:w-1/2 md:flex justify-between">
                    <div>
                      
                        <img src="{{url('/images/abstract-user-flat-4.svg')}}" alt="Image" class="w-20 h-30"/>
                    </div>
                    <div>
                        <p class="font-bold">Name: <span class="text-blue-500">{{$customer->name}}</span></p>
                        <p class="font-bold">Location: <span class="text-blue-500">{{$customer->area}}</span></p>
                        <p class="font-bold">Tel: <span class="text-blue-500">0{{$customer->phone}}</span></p>
                    </div>
                    <div class="mt-2 add_cloth_button">
                        <button class="py-2 px-3 text-white bg-green-500">Add</button> 
                    </div>
                </div>
                 <div class="ml-2">
                    <p class="text-center">Last Transactions</p>
                 <table>
                      <thead class="block md:table-header-group">
                        <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Item</th>
                            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Status</th>
                            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Date</th>
                        </tr>
                    </thead>
                    <tbody class="block md:table-row-group">
                         <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Item</span>Item</td>
                             <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Item</span>Item</td> <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Item</span>Item</td>
                        </tr>
                    </tbody>
                 </table>
                </div>
            </div>
        </div>
    </div>
        </div>
   </div>
@endsection