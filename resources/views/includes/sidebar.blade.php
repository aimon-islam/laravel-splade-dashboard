<aside class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 w-64 h-full pt-16 duration-75 font-normal lg:flex transition-width" aria-label="Sidebar" v-bind:class="{ hidden: !sidebar.opened }">
    <div class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                <ul class="pb-2 space-y-2">
                    <li>
                        <x-splade-form action="#" method="GET" class="lg:hidden">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <i class="bi bi-search text-gray-500 text-xl"></i>
                                </div>
                                <input type="text" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-200 dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search">
                            </div>
                        </x-splade-form>
                    </li>

                    <x-sidebar-item label="Dashboard" :active="request()->routeIs('dashboard','home')">
                        <x-slot name="prefix">
                            <i class="bi bi-pie-chart-fill text-lg"></i>
                        </x-slot>
                    </x-sidebar-item>
                </ul>
            </div>
        </div>
        <div class="absolute bottom-0 flex left-0 justify-evenly w-full p-4 space-x-4 bg-white dark:bg-gray-800" sidebar-bottom-menu>
            <x-splade-link class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                <i class="bi bi-sliders2-vertical text-xl"></i>
            </x-splade-link>

            <x-splade-link class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                <i class="bi bi-gear-fill text-xl"></i>
            </x-splade-link>

            <x-splade-link class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                <i class="bi bi-person-fill text-xl"></i>
            </x-splade-link>
        </div>
    </div>
</aside>

<div class="fixed inset-0 z-10 bg-gray-900/50 dark:bg-gray-900/90" @click.prevent="sidebar.opened = !sidebar.opened" v-show="sidebar.opened"></div>