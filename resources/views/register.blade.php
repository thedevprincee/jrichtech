@extends('layout')
@section('title')
    <title>{{__('user.Login')}}</title>
@endsection
@section('meta')
    <meta name="description" content="{{__('user.Login')}}">
@endsection

@section('public-content')

@php
	$setting = App\Models\Setting::first();
@endphp


<div class="min-h-screen flex sm:pt-0 bg-black p-5 md:p-24 relative z-0">
	<div class="space-y-8 w-full md:w-4/5 z-10 bg-white p-3 md:p-12 rounded-2xl" style="opacity: 1; transform: none;">
		<a href="./" class="flex items-center space-x-4 w-full">		
			<img src="{{ asset($setting->logo) }}" class="h-12">
		</a>
		
		<div class="w-full p-3 py-8 md:px-6 md:py-8 bg-white shasdow-md overflow-hidden rounded-2xl">
			<form action="/store-registers" method="post">
                @csrf
				<div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8">
                    <div>
                        here - {{ Session::get('messege') }}
                        <br />
                        <label for="name" class="block text-sm text-gray-700 ">Name</label>
                        <input id="name" name="name" autocomplete="name" required="" type="text" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm mt-1 block w-full rounded-2xl" value="">
                    </div>
                    <div>
                        <label for="username" class="block text-sm text-gray-700 ">Username</label>
                        <input id="username" name="username" autocomplete="username" required="" type="text" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm mt-1 block w-full rounded-2xl" value="">
                    </div>
                    <div class="">
                        <label for="email" class="block text-sm text-gray-700 ">Email</label>
                        <input id="email" name="email" autocomplete="username" required="" type="email" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm mt-1 block w-full rounded-2xl" value="">
                    </div>
                    <div class="">
                        <label for="phone" class="block text-sm text-gray-700 ">Phone Number</label>
                        <input id="phone" name="phone" required="" type="number" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm mt-1 block w-full rounded-2xl" value="">
                    </div>
                    <div class="hidden md:block md:col-span-2"><hr></div>
                    <div class="">
                        <label for="password" class="block text-sm text-gray-700 ">Password</label>
                        <input id="password" name="password" autocomplete="new-password" required="" type="password" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm mt-1 block w-full rounded-2xl" value="">
                    </div>
                    <div class="">
                        <label for="password_confirmation" class="block text-sm text-gray-700 ">Confirm Password</label>
                        <input id="password_confirmation" name="password_confirmation" autocomplete="new-password" required="" type="password" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm mt-1 block w-full rounded-2xl" value="">
                    </div>
                    <div class="block mt-4"><label class="flex items-center"><input name="agree" required type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 "><span class="ml-2 text-sm text-gray-600">Terms and Condition</span></label></div>

                </div>
                <div class="flex items-center justify-between mt-4">
                    <a class="underline text-sm text-blue-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="./login">Already registered?  Login</a>
                    <input type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 false ml-4 bg-primary/90 hover:bg-primary rounded-2xl" value="Create Account">
                </div>
			</form>
		</div>
	</div>

	<img src="./assets/images/bg1.png" alt="" class="h-[80vh] w-full object-cover fixed top-0 inset-x-0 opacity-80">

	<div class="fixed w-screen h-[20vh] bottom-[20%] bg-gradient-to-b from-transparent to-black inset-x-0"></div>

	<div class="fixed w-screen h-[20vh] bottom-0 bg-black inset-x-0"></div>
</div>


@endsection
