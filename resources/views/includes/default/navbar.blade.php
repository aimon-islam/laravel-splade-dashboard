<x-splade-toggle>
    <nav class="fixed z-30 w-full bg-white border-b border-gray-200 sm:py-2 dark:bg-gray-800 dark:border-gray-700">
        <div class="container py-3 mx-auto">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <x-splade-link :href="route('default:home')" class="flex mr-4">
                        <img src="logo.svg" class="h-8 mx-3 xl:ml-0" alt="Flowbite Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                    </x-splade-link>
                    <div class="hidden sm:flex sm:ml-6">
                        <ul class="flex space-x-8">
                            <li>
                                <x-splade-link :href="route('default:home')" class="text-sm font-medium text-gray-700 hover:text-primary-700 dark:text-gray-400 dark:hover:text-primary-500" aria-current="page">Home</x-splade-link>
                            </li>
                            <li>
                                <x-splade-link href="" class="text-sm font-medium text-gray-700 hover:text-primary-700 dark:text-gray-400 dark:hover:text-primary-500" aria-current="page">Pricing</x-splade-link>
                            </li>
                            <li>
                                <x-splade-link href="" class="text-sm font-medium text-gray-700 hover:text-primary-700 dark:text-gray-400 dark:hover:text-primary-500" aria-current="page">Contact</x-splade-link>
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <!-- !!Theme changing script injection!! -->
                    <button @click="changeTheme()" type="button" class="inline-flex items-center justify-center p-2 text-gray-400 rounded-lg mx-2 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-primary-300 dark:hover:bg-gray-700 dark:hover:text-white">
                        <i class="bi bi-sun"></i>
                    </button>
                    <!-- !!End Change theme!! -->

                    @if(auth()->check())
                    <x-splade-link :href="route('default:dashboard')" class="hidden sm:inline-flex text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <i class="bi bi-person text-lg mr-1"></i> Dashboard
                    </x-splade-link>
                    @else
                    <x-splade-link :href="route('default:auth.' . (request()->routeIs('default:auth.login') ? 'register' : 'login'))" class="hidden sm:inline-flex text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <i class="bi bi-box-arrow-in-left text-lg"></i> Login/Register
                    </x-splade-link>
                    @endif

                    <button @click="toggle" class="inline-flex items-center justify-center p-2  text-gray-400 rounded-lg sm:hidden mr-2 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-primary-300 dark:hover:bg-gray-700 dark:hover:text-white">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
            </div>
        </div>

        <x-splade-transition show="toggled" animation="slide-right">
            <ul class="pt-2">
                <li>
                    <x-splade-link :href="route('default:home')" class="block py-2 pl-3 pr-4 text-base font-normal {{ request()->routeIs('default:home') ? 'text-gray-900 dark:text-white bg-gray-100 dark:bg-gray-700 ':'text-gray-600 dark:text-gray-400' }}">Home</x-splade-link>
                </li>

                <li>
                    <x-splade-link :href="route('default:home')" class="block py-2 pl-3 pr-4 text-base font-normal {{ request()->routeIs('default:pricing') ? 'text-gray-900 dark:text-white bg-gray-100 dark:bg-gray-700 ':'text-gray-600 dark:text-gray-400' }}">Pricing</x-splade-link>
                </li>

                <li>
                    <x-splade-link :href="route('default:home')" class="block py-2 pl-3 pr-4 text-base font-normal {{ request()->routeIs('default:contact') ? 'text-gray-900 dark:text-white bg-gray-100 dark:bg-gray-700 ':'text-gray-600 dark:text-gray-400' }}">Contact</x-splade-link>
                </li>

                <li>
                    @if(auth()->check())
                    <x-splade-link :href="route('default:dashboard')" class="block py-2 pl-3 pr-4 text-base font-normal text-gray-600 dark:text-gray-400">
                        Go to Dashboard
                    </x-splade-link>
                    @else
                    <x-splade-link :href="route('default:auth.' . (request()->routeIs('default:auth.login') ? 'register' : 'login'))" class="inline-flex items-center w-full px-3 py-2 text-base font-normal {{ request()->routeIs('default:auth.*') ? 'text-gray-900 dark:text-white bg-gray-100 dark:bg-gray-700 ':'text-gray-600 dark:text-gray-400' }}">
                        <i class="bi bi-box-arrow-in-left text-lg"></i> Login/Register
                    </x-splade-link>
                    @endif
                </li>
            </ul>
        </x-splade-transition>
    </nav>
</x-splade-toggle>