@props([
"label"=>"label",
"prefix"=>null,
"active"=>false,
"to"=>null,
"away"=>false,
"nested"=>false,
"items"=>null,
])

<x-splade-toggle :data="$active">
    <li>
        @if($items)
        <button type="button" @click.prevent="setToggle(!toggled)" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700" v-bind:class="{ 'bg-gray-100 dark:bg-gray-700' : toggled }">
            @if($prefix) {{$prefix}} @else <i class="bi bi-align-center" sidebar-toggle-item></i> @endif
            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>{{$label}}</span>
            @if($items)
            <svg v-bind:class="{ 'rotate-[-90deg]': !toggled }" sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path stroke="currentColor" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
            @endif
        </button>
        @else
        <x-splade-link :href="$to" class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700" v-bind:class="{ 'bg-gray-100 dark:bg-gray-700' : toggled }">
            @if($prefix) {{$prefix}} @else <i class="bi bi-align-center" sidebar-toggle-item></i> @endif
            <span class="ml-3" sidebar-toggle-item>{{$label}}</span>
        </x-splade-link>
        @endif

        @if($items)
        <x-splade-transition animation="slide-left" show="toggled">
            <ul class="py-2 space-y-2 pl-5"> {{$items}} </ul>
        </x-splade-transition>
        @endif
    </li>
</x-splade-toggle>