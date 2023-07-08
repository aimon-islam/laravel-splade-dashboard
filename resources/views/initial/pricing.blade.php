@extends('layouts.default')

@section('body')
<h1 class="mb-3 text-3xl font-bold text-gray-900 sm:text-4xl sm:leading-none sm:tracking-tight dark:text-white">
    Our pricing plan made simple</h1>
<p class="mb-6 text-lg font-normal text-gray-500 sm:text-xl dark:text-gray-400">All types of businesses need
    access to development resources, so we give you the option to decide how much you need to use.</p>
<div class="flex items-center">
    <span class="text-base font-medium text-gray-900 dark:text-white">
        Monthly
    </span>
    <!-- Switch Container -->
    <div>
        <label for="toggle-example" class="relative flex items-center mx-4 cursor-pointer">
            <input type="checkbox" id="toggle-example" class="sr-only">
            <div class="h-6 bg-gray-200 border border-gray-200 rounded-full toggle-bg w-11 dark:bg-gray-700 dark:border-gray-600">
            </div>
        </label>
    </div>
    <span class="text-base font-medium text-gray-500 dark:text-gray-400">
        Yearly
    </span>
</div>
<!-- Pricing Cards -->
<section class="grid grid-cols-1 space-y-12 md:space-y-0 md:grid-cols-2 lg:grid-cols-3 md:gap-x-6 md:gap-6 pt-9">
    <!-- Pricing Card -->
    <div class="flex flex-col max-w-lg p-6 mx-auto text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 xl:p-8 dark:bg-gray-800 dark:text-white">
        <h3 class="mb-4 text-2xl font-semibold">Starter</h3>
        <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Best option for personal use & for your next
            project.</p>
        <div class="flex items-baseline my-8">
            <span class="mr-2 text-5xl font-extrabold">$29</span>
            <span class="text-gray-500 dark:text-gray-400">/month</span>
        </div>
        <!-- List -->
        <ul role="list" class="mb-8 space-y-4 text-left">
            <li class="flex items-center space-x-3">
                <!-- Icon -->
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span>Individual configuration</span>
            </li>
            <li class="flex items-center space-x-3">
                <!-- Icon -->
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span>No setup, or hidden fees</span>
            </li>
            <li class="flex items-center space-x-3">
                <!-- Icon -->
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span>Team size: <span class="font-semibold">1 developer</span></span>
            </li>
            <li class="flex items-center space-x-3">
                <!-- Icon -->
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span>Premium support: <span class="font-semibold">6 months</span></span>
            </li>
            <li class="flex items-center space-x-3">
                <!-- Icon -->
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span>Free updates: <span class="font-semibold">6 months</span></span>
            </li>
        </ul>
        <a href="#" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-blue-900">Get
            started</a>
    </div>
    <!-- Pricing Card -->
    <div class="flex flex-col max-w-lg p-6 mx-auto text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 xl:p-8 dark:bg-gray-800 dark:text-white">
        <h3 class="mb-4 text-2xl font-semibold">Company</h3>
        <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Relevant for multiple users, extended &
            premium support.</p>
        <div class="flex items-baseline my-8">
            <span class="mr-2 text-5xl font-extrabold">$99</span>
            <span class="text-gray-500 dark:text-gray-400" dark:text-gray-400>/month</span>
        </div>
        <!-- List -->
        <ul role="list" class="mb-8 space-y-4 text-left">
            <li class="flex items-center space-x-3">
                <!-- Icon -->
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span>Individual configuration</span>
            </li>
            <li class="flex items-center space-x-3">
                <!-- Icon -->
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span>No setup, or hidden fees</span>
            </li>
            <li class="flex items-center space-x-3">
                <!-- Icon -->
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span>Team size: <span class="font-semibold">10 developers</span></span>
            </li>
            <li class="flex items-center space-x-3">
                <!-- Icon -->
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span>Premium support: <span class="font-semibold">24 months</span></span>
            </li>
            <li class="flex items-center space-x-3">
                <!-- Icon -->
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span>Free updates: <span class="font-semibold">24 months</span></span>
            </li>
        </ul>
        <a href="#" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-blue-900">Get
            started</a>
    </div>
    <!-- Pricing Card -->
    <div class="flex flex-col max-w-lg p-6 mx-auto text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 xl:p-8 dark:bg-gray-800 dark:text-white">
        <h3 class="mb-4 text-2xl font-semibold">Enterprise</h3>
        <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Best for large scale uses and extended
            redistribution rights.</p>
        <div class="flex items-baseline my-8">
            <span class="mr-2 text-5xl font-extrabold">$499</span>
            <span class="text-gray-500 dark:text-gray-400">/month</span>
        </div>
        <!-- List -->
        <ul role="list" class="mb-8 space-y-4 text-left">
            <li class="flex items-center space-x-3">
                <!-- Icon -->
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span>Individual configuration</span>
            </li>
            <li class="flex items-center space-x-3">
                <!-- Icon -->
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span>No setup, or hidden fees</span>
            </li>
            <li class="flex items-center space-x-3">
                <!-- Icon -->
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span>Team size: <span class="font-semibold">100+ developers</span></span>
            </li>
            <li class="flex items-center space-x-3">
                <!-- Icon -->
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span>Premium support: <span class="font-semibold">36 months</span></span>
            </li>
            <li class="flex items-center space-x-3">
                <!-- Icon -->
                <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span>Free updates: <span class="font-semibold">36 months</span></span>
            </li>
        </ul>
        <a href="#" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-blue-900">Get
            started</a>
    </div>
</section>
<!-- Comparison Table -->
<section class="flex flex-col pt-10 md:pt-20">
    <div class="overflow-x-auto rounded-lg">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden shadow sm:rounded-lg">
                <table class="min-w-full">
                    <thead class="bg-gray-50 dark:bg-gray-900">
                        <tr>
                            <th scope="col" class="p-4 text-left">
                            </th>
                            <th scope="col" class="p-4 text-base font-semibold tracking-wider text-right text-gray-900 dark:text-white">
                                Freelancer
                            </th>
                            <th scope="col" class="p-4 text-base font-semibold tracking-wider text-right text-gray-900 dark:text-white">
                                Company
                            </th>
                            <th scope="col" class="p-4 text-base font-semibold tracking-wider text-right text-gray-900 dark:text-white">
                                Enterprise
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-800">
                        <tr>
                            <td class="p-4 text-base font-normal text-gray-500 rounded-l-lg whitespace-nowrap dark:text-gray-400">
                                Seperate business/personal
                            </td>
                            <td class="p-4">
                                <svg class="w-5 h-5 ml-auto text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="p-4">
                                <svg class="w-5 h-5 ml-auto text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="p-4 rounded-r-lg">
                                <svg class="w-5 h-5 ml-auto text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                        </tr>
                        <tr class="bg-gray-50 dark:bg-gray-900">
                            <td class="p-4 text-base font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                Estimate tax payments
                            </td>
                            <td class="p-4">
                                <svg class="w-5 h-5 ml-auto text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="p-4">
                                <svg class="w-5 h-5 ml-auto text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="p-4 rounded-r-lg">
                                <svg class="w-5 h-5 ml-auto text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-4 text-base font-normal text-gray-500 rounded-l-lg whitespace-nowrap dark:text-gray-400">
                                Stock control
                            </td>
                            <td class="p-4">
                                <svg class="w-5 h-5 ml-auto text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="p-4">
                                <svg class="w-5 h-5 ml-auto text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="p-4 rounded-r-lg">
                                <svg class="w-5 h-5 ml-auto text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                        </tr>
                        <tr class="bg-gray-50 dark:bg-gray-900">
                            <td class="p-4 text-base font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                Create invoices & estimates
                            </td>
                            <td class="p-4">
                                <svg class="w-5 h-5 ml-auto text-red-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="p-4">
                                <svg class="w-5 h-5 ml-auto text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="p-4 rounded-r-lg">
                                <svg class="w-5 h-5 ml-auto text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-4 text-base font-normal text-gray-500 rounded-l-lg whitespace-nowrap dark:text-gray-400">
                                Manage bills & payments
                            </td>
                            <td class="p-4">
                                <svg class="w-5 h-5 ml-auto text-red-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="p-4">
                                <svg class="w-5 h-5 ml-auto text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="p-4 rounded-r-lg">
                                <svg class="w-5 h-5 ml-auto text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                        </tr>
                        <tr class="bg-gray-50 dark:bg-gray-900">
                            <td class="p-4 text-base font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                Run payroll
                            </td>
                            <td class="p-4">
                                <svg class="w-5 h-5 ml-auto text-red-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="p-4">
                                <svg class="w-5 h-5 ml-auto text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="p-4 rounded-r-lg">
                                <svg class="w-5 h-5 ml-auto text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-4 text-base font-normal text-gray-500 rounded-l-lg whitespace-nowrap dark:text-gray-400">
                                Handle multiple currencies
                            </td>
                            <td class="p-4">
                                <svg class="w-5 h-5 ml-auto text-red-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="p-4">
                                <svg class="w-5 h-5 ml-auto text-red-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="p-4 rounded-r-lg">
                                <svg class="w-5 h-5 ml-auto text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                        </tr>
                        <tr class="bg-gray-50 dark:bg-gray-900">
                            <td class="p-4 text-base font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                Number of Users
                            </td>
                            <td class="p-4">
                                <div class="flex items-center justify-end space-x-1">
                                    <svg class="flex-shrink-0 w-5 h-5 text-gray-900 dark:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="flex-shrink-0 text-xs font-medium text-gray-900 sm:text-sm md:text-base dark:text-white">1
                                        User</span>
                                </div>
                            </td>
                            <td class="p-4">
                                <div class="flex items-center justify-end space-x-1">
                                    <svg class="flex-shrink-0 w-5 h-5 text-gray-900 dark:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                                        </path>
                                    </svg>
                                    <span class="flex-shrink-0 text-xs font-medium text-gray-900 sm:text-sm md:text-base dark:text-white">5-10
                                        Users</span>
                                </div>
                            </td>
                            <td class="p-4 rounded-r-lg">
                                <div class="flex items-center justify-end space-x-1">
                                    <svg class="flex-shrink-0 w-5 h-5 text-gray-900 dark:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                                        </path>
                                    </svg>
                                    <span class="flex-shrink-0 text-xs font-medium text-gray-900 sm:text-sm md:text-base dark:text-white">20+
                                        Users</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-4 text-base font-normal text-gray-500 rounded-l-lg whitespace-nowrap dark:text-gray-400">
                                Track deductible mileage
                            </td>
                            <td class="p-4">
                                <svg class="w-5 h-5 ml-auto text-red-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="p-4">
                                <svg class="w-5 h-5 ml-auto text-red-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="p-4 rounded-r-lg">
                                <svg class="w-5 h-5 ml-auto text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                        </tr>
                        <tr class="bg-gray-50 dark:bg-gray-900">
                            <td class="p-4 text-base font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                Track employee time
                            </td>
                            <td class="p-4">
                                <svg class="w-5 h-5 ml-auto text-red-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="p-4">
                                <svg class="w-5 h-5 ml-auto text-red-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="p-4 rounded-r-lg">
                                <svg class="w-5 h-5 ml-auto text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                        </tr>
                        <tr>
                            <td class="p-4 text-base font-normal text-gray-500 rounded-l-lg whitespace-nowrap dark:text-gray-400">
                                Multi-device
                            </td>
                            <td class="p-4">
                                <svg class="w-5 h-5 ml-auto text-red-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="p-4">
                                <svg class="w-5 h-5 ml-auto text-red-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                            <td class="p-4 rounded-r-lg">
                                <svg class="w-5 h-5 ml-auto text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<div class="h-[2.5rem]"/>
@endsection