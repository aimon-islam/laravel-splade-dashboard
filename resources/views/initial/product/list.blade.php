<!-- @extends('layouts.default') -->

@section('body')
<form class="w-1/2 mx-auto pb-10">
    <div class="flex">
        <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
        <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">All categories <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg></button>
        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
                </li>
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button>
                </li>
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
                </li>
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
                </li>
            </ul>
        </div>
        <div class="relative w-full">
            <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search Mockups, Logos, Design Templates..." required>
            <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </div>
    </div>
</form>

<div class="container mx-auto my-5 px-2 sm:px-8">
    <div class="grid grid-cols-12 gap-5">
        <div class="col-span-12">
            <div class="flex flex-wrap items-center justify-between gap-2">
                <span class="text-lg dark:text-white">Results of '<span class="text-primary-600">notebook</span>'</span>
            </div>
        </div>
        <div class="col-span-12 md:col-span-4 lg:col-span-4 xl:col-span-3">
            <x-splade-form class="flex flex-col rounded-lg dark:bg-gray-800 bg-white p-5" action="#">
                <div class="mb-5 flex items-center gap-2">
                    <i class="bi bi-funnel flex text-sm text-primary-600"></i>
                    <h1 class="text-xl font-bold uppercase dark:text-white">Search Filter</h1>
                </div>
                <div class="mb-5 border-t-2 pt-5">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <i class="bi bi-search text-white"></i>
                        </div>
                        <input type="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
                    </div>
                </div>

                <div class="border-t-2 pt-5">
                    <span class="mb-2 flex font-semibold dark:text-white">Price range</span>

                    <x-splade-submit label="Filter" class="mt-2 w-full border-0 rounded-lg bg-primary-600 p-2 font-bold uppercase text-white"/>
                       
                </div>
            </x-splade-form>
        </div>
        <div class="col-span-12 md:col-span-8 lg:col-span-8 xl:col-span-9">
            <div class="grid grid-cols-12 gap-5">
                <!-- @for($i = 0; $i < 10; $i++) -->
                <div class="col-span-12 h-auto sm:col-span-6 lg:col-span-4">
                    <div class="flex flex-col bg-white rounded-lg shadow-md dark:bg-gray-800 relative hover:scale-105 transition overflow-hidden">
                        <div class="absolute top-[10px] right-[10px]">
                            <div class="p-[2px]">
                                <a class="flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] rounded-lg gap-2 cursor-pointer">
                                    <i class="bi bi-heart text-white flex pointer-events-none"></i>
                                </a>
                            </div>
                            <div class="p-[2px]">
                                <a class="flex justify-center items-center h-9 w-9 bg-[rgba(0,0,0,.3)] rounded-lg cursor-pointer">
                                    <i class="bi bi-eye text-xl text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="absolute top-0 left-0 h-[35px] w-[90px] bg-primary-500 rounded-br-lg flex justify-center items-center">
                            <span class="text-white text-md text-center font-semibold uppercase">25% Off</span>
                        </div>
                        <div class="h-[190px] overflow-hidden rounded-lg">
                            <x-splade-link href="">
                                <img class="w-full h-full" src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" alt="product" />
                            </x-splade-link>
                        </div>
                        <div class="p-5">
                            <div class="my-2 flex justify-between items-center">
                                <div class="flex">
                                    <i class="bi bi-star-fill text-base text-amber-500 flex"></i>
                                    <i class="bi bi-star-fill text-base text-amber-500 flex"></i>
                                    <i class="bi bi-star-fill text-base text-amber-500 flex"></i>
                                    <i class="bi bi-star-fill text-base text-amber-500 flex"></i>
                                    <i class="bi bi-star-fill text-base flex text-gray-200"></i>
                                </div>
                                <div>
                                    <span class="text-xs uppercase font-bold text-white bg-green-300 py-1 px-2 rounded-md">instock</span>
                                </div>
                            </div>
                            <div class="my-1 font-medium clamp dark:text-white">Apple Macbook Aire 13</div>

                            <div class="flex gap-2 my-2 dark:text-white text-sm">
                                <span class="font-bold">Specification:</span>
                                <span>5 mg</span>
                            </div>

                            <div class="my-1">
                                <p class="text-sm clamp-2 text-gray-400">
                                    tablet, Square Pharmaceuticals
                                </p>
                            </div>

                            <div class="my-1 flex items-center gap-2 dark:text-white">
                                <span class="text-sm text-primary-color line-through">MRP: ৳50.00</span>
                                <span class="text-lg font-bold">Now: ৳37.00</span>
                            </div>
                            <div class="mt-auto">
                                <x-splade-link class="btn-effect flex justify-center items-center font-bold uppercase text-white w-full p-2 bg-primary-700 rounded-lg transition-all-300">
                                    Add to Cart
                                </x-splade-link>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- @endfor -->
            </div>
        </div>
    </div>
</div>

<!-- Previous Button -->
<div class="flex w-40 m-auto between pb-8">
    <x-splade-link :href="route('default:product.list',['page'=>request()->page > 0 ? request()->page - 1:0])" class="inline-flex items-center px-4 py-2 mr-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" preserve-scroll>
        <i class="bi bi-arrow-left text-lg mr-1"></i> Previous
    </x-splade-link>
    <x-splade-link :href="route('default:product.list',['page'=>request()->page + 1])" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" preserve-scroll>
        Next<i class="bi bi-arrow-right text-lg ml-1"></i>
    </x-splade-link>
</div>
@endsection