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
			<img src="{{ asset($setting->logo2) }}" class="h-12">
		</a>
		
		<div class="w-full p-3 py-8 md:px-6 md:py-8 bg-white shasdow-md overflow-hidden rounded-2xl">
			<form action="{{ route('store-login') }}" method="POST">
                @csrf
				<div>
					<label for="email" class="block text-sm text-gray-700 ">Username or Email</label>
					<input id="email" name="email" autocomplete="username" type="email" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm mt-1 block w-full rounded-2xl" value="">
				</div>
				<div class="mt-4"><label for="password" class="block text-sm text-gray-700 ">Password</label><input id="password" name="password" autocomplete="current-password" type="password" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm mt-1 block w-full rounded-2xl" value=""></div>
                <div class="block mt-4"><label class="flex items-center"><input name="remember" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 "><span class="ml-2 text-sm text-gray-600">Remember me</span></label></div>
                <div class="flex items-center justify-end mt-4">
                    <a class="text-sm text-blue-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="/forget-password">Forgot your password?</a></div><div class="flex items-center justify-between mt-4">
                    <a class="underline font-medium text-sm text-primary rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="/register">Create new account</a>
                    @if($recaptchaSetting->status==1)
                        <div class="col-xl-12">
                            <div class="wsus__single_com mb-3">
                                <div class="g-recaptcha" data-sitekey="{{ $recaptchaSetting->site_key }}"></div>
                            </div>
                        </div>
                    @endif    
                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 false ml-4 bg-secondary">Log in</button>
                </div>

			</form>
		</div>
	</div>

	<img src="./assets/images/bg1.png" alt="" class="h-[80vh] w-full object-cover fixed top-0 inset-x-0 opacity-80">

	<div class="fixed w-screen h-[20vh] bottom-[20%] bg-gradient-to-b from-transparent to-black inset-x-0"></div>

	<div class="fixed w-screen h-[20vh] bottom-0 bg-black inset-x-0"></div>
</div>


@endsection
