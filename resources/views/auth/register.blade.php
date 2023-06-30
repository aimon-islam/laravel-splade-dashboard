@extends('layouts.authentication')

@section('form_title', 'Create a Free Account')

@section('form')

<x-splade-form class="mt-8 space-y-6" :action="route('default:auth.do.register')">

    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
            <input type="text" v-model="form.first_name" id="first_name" placeholder="Aimon" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            <p v-text="form.errors.first_name" class="pl-1 mt-1 text-xs text-red-600 dark:text-red-500" />
        </div>

        <div class="w-full md:w-1/2 px-3">
            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
            <input type="text" v-model="form.last_name" id="last_name" placeholder="Islam" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
            <p v-text="form.errors.last_name" class="pl-1 mt-1 text-xs text-red-600 dark:text-red-500" />
        </div>
    </div>

    <div>
        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Phone Number</label>
        <input type="tel" v-model="form.phone" id="phone" placeholder="+290 2xxx" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        <p v-text="form.errors.phone" class="pl-1 mt-1 text-xs text-red-600 dark:text-red-500" />
    </div>

    <div>
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Email</label>
        <input type="email" v-model="form.email" id="email" placeholder="name@company.com" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        <p v-text="form.errors.email" class="pl-1 mt-1 text-xs text-red-600 dark:text-red-500" />
    </div>

    <div>
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Password</label>
        <input type="password" v-model="form.password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
        <p v-text="form.errors.password" class="pl-1 mt-1 text-xs text-red-600 dark:text-red-500" />
    </div>

    <div>
        <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
        <input type="password" v-model="form.password_confirmation" id="password_confirmation" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
    </div>

    <div class="flex items-start">
        <div class="flex items-center h-5">
            <input id="term_and_condition" aria-describedby="term_and_condition" v-model="form.term_and_condition" type="checkbox" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600" required>
        </div>
        <div class="ml-3 text-sm">
            <label for="term_and_condition" class="font-medium text-gray-900 dark:text-white">I accept the <a href="#" class="text-primary-700 hover:underline dark:text-primary-500">Terms and Conditions</a></label>
        </div>
    </div>

    <x-splade-submit label="Create account" class="w-full px-5 py-3 border-0 font-medium text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" />

    <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
        Already have an account? <x-splade-link :href="route('default:auth.login')" class="text-primary-700 hover:underline dark:text-primary-500">Login here</x-splade-link>
    </div>

</x-splade-form>

@endsection