{{--<x-guest-layout>--}}
{{--    <form method="POST" action="{{ route('register') }}">--}}
{{--        @csrf--}}

{{--        <!-- Name -->--}}
{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Name')" />--}}
{{--            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--            <x-input-error :messages="$errors->get('name')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Email Address -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Confirm Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--            <x-text-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password_confirmation" required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">--}}
{{--                {{ __('Already registered?') }}--}}
{{--            </a>--}}

{{--            <x-primary-button class="ms-4">--}}
{{--                {{ __('Register') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
@extends('frontend.layouts.master')
@section('content')


<!--=========================
    SIGN UP START
==========================-->
<section class="fp__signup" style="background: url({{ asset('frontend/images/login_bg.jpg') }});">
    <div class="fp__signup_overlay pt_125 xs_pt_95 pb_100 xs_pb_70">
        <div class=" container">
            <div class="row wow fadeInUp" data-wow-duration="1s">
                <div class="col-xxl-5 col-xl-6 col-md-9 col-lg-7 m-auto">
                    <div class="fp__login_area mt-5">
                        <h2>Welcome back!</h2>
                        <p>sign up to continue</p>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="fp__login_imput">
                                        <label>name</label>
                                        <input type="text" placeholder="Name" required autofocus name="name" value="{{ old('name') }}">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="fp__login_imput">
                                        <label>email</label>
                                        <input type="email" placeholder="Email" name="email" required value="{{old('email')}}">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="fp__login_imput">
                                        <label>password</label>
                                        <input type="password" placeholder="Password" required name="password">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="fp__login_imput">
                                        <label>confirm password</label>
                                        <input type="password" placeholder="Confirm Password" name="password_confirmation" required>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="fp__login_imput">
                                        <button type="submit" class="common_btn">Create Account</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="or"><span>or</span></p>
                        <p class="create_account">Already have an account ? <a href="{{ route('login') }}">login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========================
    SIGN UP END
==========================-->
@endsection
