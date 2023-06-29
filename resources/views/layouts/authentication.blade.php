@extends('layouts.default')

@section('body')
<div class="flex flex-col items-center justify-center pb-11 md:pb-10 mx-auto md:pb-32 lg:px-0 mx-auto dark:bg-gray-900">
    <!-- Card -->
    <div class="w-full max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow dark:bg-gray-800">
        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">
            @yield('form_title')
        </h2>
        @yield('form')
    </div>
</div>
@endsection