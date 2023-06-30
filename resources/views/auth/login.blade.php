@extends('layouts.authentication')

@section('form_title', 'login to your account')

@section('form')
<x-splade-form class="mt-8 space-y-6" :action="route('default:auth.do.login')">
    <div>
        <label for="credential" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Email or Phone</label>
        <input type="text" v-model="form.credential" id="credential" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="+290 2xxx or name@company.com">
        <p v-text="form.errors.credential" class="pl-1 mt-1 text-xs text-red-600 dark:text-red-500" />
    </div>
    <div>
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Password</label>
        <input type="password" v-model="form.password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        <p v-text="form.errors.password" class="pl-1 mt-1 text-xs text-red-600 dark:text-red-500" />
    </div>
    <div class="flex items-start">
        <div class="flex items-center h-5">
            <input id="remember" aria-describedby="remember" v-model="form.remember" type="checkbox" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
        </div>
        <div class="ml-3 text-sm">
            <label for="remember" class="font-medium text-gray-900 dark:text-white">Remember me</label>
        </div>
        <a href="#" class="ml-auto text-sm text-primary-700 hover:underline dark:text-primary-500">Lost Password?</a>
    </div>

    <x-splade-submit label="Login to your account" class="w-full px-5 py-3 border-0 font-medium text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" />

    <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
        Not registered? <x-splade-link :href="route('default:auth.register')" class="text-primary-700 hover:underline dark:text-primary-500">Create account</x-splade-link>
    </div>
</x-splade-form>
@endsection