@extends('layoutfront')
@section('title')
    <title>{{__('user.Login')}}</title>
@endsection
@section('meta')
    <meta name="description" content="{{__('user.Login')}}">
@endsection

@section('public-content')


<div class="min-h-screen flex sm:pt-0 bg-black p-5 md:p-24 relative z-0">
	<div class="space-y-8 w-full md:w-4/5 z-10 bg-white p-3 md:p-12 rounded-2xl" style="opacity: 1; transform: none;">
		<a href="./" class="flex items-center space-x-4 w-full">		
			<img src="./assets/images/logo.png" class="h-12">
		</a>
		
		<div class="w-full p-3 py-8 md:px-6 md:py-8 bg-white shasdow-md overflow-hidden rounded-2xl">
			<form action="{{ route('send-forget-password') }}" method="POST">
                @csrf
				<input id="email" name="email" type="email" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 shadow-sm mt-1 block w-full" value="">
                <div class="flex items-center justify-end mt-4">
                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 false ml-4">Email Password Reset Link</button>
                </div>
			
			</form>
		</div>
	</div>

	<img src="./assets/images/bg1.png" alt="" class="h-[80vh] w-full object-cover fixed top-0 inset-x-0 opacity-80">

	<div class="fixed w-screen h-[20vh] bottom-[20%] bg-gradient-to-b from-transparent to-black inset-x-0"></div>

	<div class="fixed w-screen h-[20vh] bottom-0 bg-black inset-x-0"></div>
</div>


@endsection
