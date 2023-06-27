<section class="bg-gray-50 lg:py-8">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
            <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
            Capix Technologies
        </a>
        <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                    Sign in to your account
                </h1>
                <x-splade-form class="space-y-4 md:space-y-6" action="">
                    <div>
                        <label for="credential" class="block mb-2 text-sm font-medium text-gray-900">Your email or phone</label>
                        <input type="text" v-model="form.credential" id="credential" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="name@company.com">
                        <div v-if="form.errors.credential" v-text="form.errors.credential" class="mt-2 text-sm text-red-800" role="alert" />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" v-model="form.password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                        <div v-if="form.errors.password" v-text="form.errors.password" class="mt-2 text-sm text-red-800" role="alert" />
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" v-model="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="remember" class="text-gray-500">Remember me</label>
                            </div>
                        </div>
                        <a href="#" class="text-sm font-medium text-primary-600 hover:underline">Forgot password?</a>
                    </div>
                    <x-splade-submit label="Sign In" class="w-full" />
                    <p class="text-sm font-light text-gray-500">
                        Don’t have an account yet? <x-splade-link href="/register" class="font-medium text-primary-600 hover:underline">Sign up</x-splade-link>
                    </p>
                </x-splade-form>
            </div>
        </div>
    </div>
</section>