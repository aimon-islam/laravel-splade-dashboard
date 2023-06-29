@include('includes.default.navbar')

<main class="bg-gray-50 dark:bg-gray-900">
    <div class="container px-4 pt-24 mx-auto md:pt-32 lg:px-0 dark:bg-gray-900">
        @yield('body')
    </div>
</main>

@include('includes.default.footer')