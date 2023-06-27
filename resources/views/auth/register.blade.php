<section class="bg-gray-50 lg:py-8">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
            <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
            Capix Technologies
        </a>
        <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                    Create and account
                </h1>
                <x-splade-form class="space-y-4 md:space-y-6" :action="route('web.auth.register')">
                    <div>
                        <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">Your first name</label>
                        <input type="text" v-model="form.first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Aimon">
                        <div v-if="form.errors.first_name" v-text="form.errors.first_name" class="mt-2 text-sm text-red-800" role="alert" />
                    </div>
                    <div>
                        <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">Your last name</label>
                        <input type="text" v-model="form.last_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Islam">
                        <div v-if="form.errors.last_name" v-text="form.errors.last_name" class="mt-2 text-sm text-red-800" role="alert" />
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                        <input type="email" v-model="form.email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="name@company.com">
                        <div v-if="form.errors.email" v-text="form.errors.email" class="mt-2 text-sm text-red-800" role="alert" />
                    </div>
                    <div>
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">Your phone number</label>
                        <input type="text" v-model="form.phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="01********">
                        <div v-if="form.errors.phone" v-text="form.errors.phone" class="mt-2 text-sm text-red-800" role="alert" />
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                        <input type="password" v-model="form.password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                        <div v-if="form.errors.password" v-text="form.errors.password" class="mt-2 text-sm text-red-800" role="alert" />
                    </div>
                    <div>
                        <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900">Confirm password</label>
                        <input type="password" v-model="form.password_confirmation" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                        <div v-if="form.errors.password_confirmation" v-text="form.errors.password_confirmation" class="mt-2 text-sm text-red-800" role="alert" />
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="font-light text-gray-500">I accept the <a class="font-medium text-primary-600 hover:underline" href="#">Terms and Conditions</a></label>
                        </div>
                    </div>
                    <x-splade-submit label="Sign In" class="w-full" />
                    <p class="text-sm font-light text-gray-500">
                        Already have an account? <x-splade-link href="/login" class="font-medium text-primary-600 hover:underline">Login here</x-splade-link>
                    </p>
                </x-splade-form>
            </div>
        </div>
    </div>
</section>