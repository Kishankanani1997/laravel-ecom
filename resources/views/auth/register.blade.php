@extends('authlara')
@section('title-name')
Register-Page
@endsection
@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf

  
        <!-- Name -->
        <div class="form-group mt-4 col-md-6 mx-auto">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="form-control"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="form-group mt-4 col-md-6 mx-auto">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" class="form-control"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" alert alert-success/>
        </div>

        <!-- Password -->
        <div class="form-group mt-4 col-md-6 mx-auto">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" class="form-control"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="form-group mt-4 col-md-6 mx-auto">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" class="form-control"/>

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="form-group mt-4 col-md-6 mx-auto">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="btn-success text-white p-2 mx-2">
                {{ __('Register') }}
            </x-primary-button>
            <img src="{{(' assets/image/register.gif')}}" class="mx-5 mt-4"> 
        </div>        
    </form>
    @endsection

