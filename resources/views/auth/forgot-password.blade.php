@extends('authlara')
@section('title-name')
ForgetPassword-Page
@endsection
@section('content')

<!-- <img src="{{(' assets/image/password.gif')}}"> -->
    <div class="container">
        <div class="row">
            <div class="mt-4 col-md-6 mx-auto">
                <div class="text-danger fs-1 bg-dark text-center mb-4">Have You Forgot Password ?</div>
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
         
        
            <!-- Session Status -->
   
            <x-auth-session-status class="mb-4 alert alert-success w-100 mt-2" :status="session('status')" />
         
        
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
        
                <!-- Email Address -->
                <div class="form-group mt-4  mx-auto">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus  class="form-control" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 "/>
                </div>
        
                <div class="flex items-center justify-end mt-4 mx-auto">
                    <x-primary-button class="col-md-6 mx-auto bg-dark text-white w-100">
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</div>
  
@endsection
