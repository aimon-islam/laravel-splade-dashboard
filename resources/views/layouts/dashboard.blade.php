@include('includes.dashboard.navbar')

<x-splade-data store="sidebar" default="{ opened: false }" remember="sidebar" />

<div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
    @include('includes.sidebar')
    <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
        <main>
            @yield("main")
        </main>
        @include('includes.dashboard.footer')
    </div>
</div>