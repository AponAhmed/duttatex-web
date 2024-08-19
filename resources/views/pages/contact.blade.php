@extends('layouts.master')
@section('title', 'Contact')
@section('content')

<!-- Contact Start-->
<div class="lg:flex lg:flex-row py-16 font-sans px-16 lg:px-12">
    <div class="lg:basis-1/3 p-8">
        <div class="pb-8">
            <h1 class="text-3xl lg:text-2xl font-semibold tracking-wider">Locate Our Presence</h1>
        </div>
        <div class="pb-7">
            <h3 class="text-lg font-semibold tracking-wider pb-3 tracking-widest">Head Office</h3>
            <p class="pb-3 text-sm tracking-wider leading-6">House# 21, Flat# 102 Road# 06, Block-D, Niketon,
                Gulshan-1, Dhaka-1212, Bangladesh.</p>
            <ul class="text-sm">
                <li class="pt-2.5"><ion-icon name="call-outline"
                        class="p-px rounded bg-sky-600 text-white size-3.5"></ion-icon><a href="" class="pl-3">
                        Urgent Call: +88 01715 819 086</a></li>
                <li class="pt-2.5"><ion-icon name="call-outline"
                        class="p-px rounded bg-sky-600 text-white size-3.5"></ion-icon><a href="" class="pl-3">
                        +8801329692671</a></li>
                <li class="pt-2.5"><ion-icon name="logo-whatsapp"
                        class="p-px rounded bg-sky-600 text-white size-3.5"></ion-icon><a href="" class="pl-3">
                        whatsapp: +88 01715 819 086</a></li>
                <li class="pt-2.5"><ion-icon name="mail-outline"
                        class="p-px rounded bg-sky-600 text-white size-3.5"></ion-icon><a href="" class="pl-3">
                        E-mail: prabir@duttatex.com</a></li>
            </ul>
        </div>
        <div>
            <h3 class="text-lg font-semibold tracking-wider pb-3 tracking-widest">Italy Office</h3>
            <p class="pb-3 text-sm tracking-wider leading-6">Via Ferdinando Magellano, 820863 Concorezzo (MB) Italia
            </p>
            <ul class="text-sm">
                <li class="pt-2.5"><ion-icon name="call-outline"
                        class="p-px rounded bg-sky-600 text-white size-3.5"></ion-icon><a href="" class="pl-3">
                        Mobile: +39 329 193 4197</a> </li>
                <li class="pt-2.5"><ion-icon name="logo-whatsapp"
                        class="p-px rounded bg-sky-600 text-white size-3.5"></ion-icon><a href="" class="pl-3">
                        whatsapp: +39 329 193 4197</a> </li>
                <li class="pt-2.5"><ion-icon name="mail-outline"
                        class="p-px rounded bg-sky-600 text-white size-3.5"></ion-icon><a href="" class="pl-3">
                        E-mail: info@duttatex.com</a> </li>
            </ul>
        </div>
    </div>
    <div class="lg:basis-2/3 p-10 mx-auto">
        <h1 class="text-3xl lg:text-2xl font-semibold tracking-wider">Send Us Your Requirement</h1>
        <div class="bg-white rounded-lg">
            <div class="py-6">
                <form action="{{route('contact.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-1">
                        <input name="name" type="text" placeholder="Name" class="h-12 px-3 mb-4 bg-gray-50 w-full border-gray-300 border rounded focus:outline-none focus:border-cyan-50">
                        @error('name')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-1">
                        <input name="email" type="email" placeholder="Email"
                            class="h-12 px-3 mb-4 bg-gray-50 w-full border-gray-300 border rounded focus:outline-none focus:border-cyan-50">
                        @error('email')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-1">
                        <input name="phone" type="text" placeholder="Phone Number" class="h-12 px-3 mb-4 bg-gray-50 w-full border-gray-300 border rounded focus:outline-none focus:border-cyan-50">
                        @error('phone')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>


                    <div class="mb-1">
                        <textarea name="message" type="text" placeholder="Message"
                        class="h-24 py-1 px-3 mb-4 bg-gray-50 w-full border border-gray-300 rounded focus:outline-none focus:border-cyan-50"></textarea>
                        @error('message')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-1">
                        <input type="file"
                            class="h-10 px-3 mb-4 bg-gray-50 w-full border border-gray-300 rounded focus:outline-none focus:border-cyan-50">
                        @error('file')
                            <p class="text-red-500">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="h-12 w-28 bg-sky-600 rounded text-white hover:bg-sky-700">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End-->

  <!-- scroll on top button Start-->
  <a id="button" class="inline-block bg-blue-600 w-9 h-9 text-center rounded fixed bottom-5 right-5 opacity-0 invisible z-[1000] after:content-['\f077'] font-['FontAwesome'] text-2xl text-white hover:cursor-pointer hover:bg-gray-500 active:bg-sky-400"></a>
  <!-- scroll on top button End-->

<script type="text/javascript" src="{{asset('js/frontend/menu.js')}}"></script>
<script type="text/javascript" src="{{asset('js/frontend/scrollbutton.js')}}"></script>
@endsection
