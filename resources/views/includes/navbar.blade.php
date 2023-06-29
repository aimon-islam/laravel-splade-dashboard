<nav class="fixed z-30 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <button @click.prevent="sidebar.opened = !sidebar.opened" class="p-2 text-gray-600 rounded cursor-pointer lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <i class="bi bi-list"></i>
                </button>
                <x-splade-link href="/" class="flex ml-2 md:mr-24">
                    <img src="logo.svg" class="h-8 mr-3" alt="FlowBite Logo" />
                    <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Flowbite</span>
                </x-splade-link>
                <form action="#" method="GET" class="hidden lg:block lg:pl-3.5">
                    <div class="relative mt-1 lg:w-96">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <i class="bi bi-search text-gray-500 text-lg"></i>
                        </div>
                        <input type="text" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search">
                    </div>
                </form>
            </div>

            <div class="flex items-center">

                <button type="button" class="p-2 text-gray-500 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700">
                    <i class="bi bi-bell-fill text-xl"></i>
                </button>

                <x-splade-toggle class="relative">
                    <button type="button" @click="toggle" v-bind:class="{'scale-125': toggled}" class="hidden p-2 text-gray-500 rounded-lg sm:flex hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700">
                        <i class="bi bi-grid-fill text-xl"></i>
                    </button>

                    <x-splade-transition show="toggled" class="absolute right-6 top-16 w-72 overflow-hidden text-base list-none bg-white divide-y divide-gray-100 rounded shadow-2xl dark:bg-gray-700 dark:divide-gray-600">
                        <div class="block px-4 py-2 text-base font-medium text-center text-gray-700 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            Apps
                        </div>
                        <div class="grid grid-cols-3 gap-4 p-4">
                            <x-splade-link class="block p-4 text-center rounded-lg hover:bg-gray-100 dark:hover:bg-gray-600">
                                <i class="bi bi-bag-fill mx-auto mb-1 text-2xl text-gray-500 dark:text-gray-400"></i>
                                <div class="text-sm font-medium text-gray-900 dark:text-white">Sales</div>
                            </x-splade-link>
                        </div>
                    </x-splade-transition>

                </x-splade-toggle>

                <!-- !!Theme changing script injection!! -->

                <button @click="changeTheme()" type="button" class="text-gray-500 dark:text-gray-500 hover:bg-gray-100  dark:hover:text-white dark:hover:bg-gray-700 rounded-lg text-sm p-2 mr-1.5">
                    <i class="bi bi-sun text-xl"></i>
                </button>
                <!-- !!End Change theme!! -->

                <x-splade-toggle class="flex items-center ml-3 relative">
                    <div>
                        <button type="button" @click.prevent="toggle" v-bind:class="{'scale-125': toggled}" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
                            <img class="w-8 h-8 rounded-full" src="/images/user.png" alt="user photo">
                        </button>
                    </div>

                    <x-splade-transition show="toggled" class="absolute top-16 right-6 text-base bg-white divide-y divide-gray-100 rounded shadow-xl dark:bg-gray-700 dark:divide-gray-600">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm text-gray-900 dark:text-white" role="none">
                                {{auth()->user()->first_name}} {{auth()->user()->last_name}}
                            </p>
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                {{auth()->user()->email}}
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <x-splade-link href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</x-splade-link>
                            </li>
                            <li>
                                <x-splade-link :href="route('logout')" method="delete" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem" require-password>Sign out</x-splade-link>
                            </li>
                        </ul>
                    </x-splade-transition>
                </x-splade-toggle>
            </div>
        </div>
    </div>
</nav>