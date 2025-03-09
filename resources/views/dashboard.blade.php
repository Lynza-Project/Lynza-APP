<x-layouts.app>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid grid-cols-1 md:grid-cols-3 auto-rows-min gap-4 items-center">
            <div class="min-h-64 md:h-64 flex justify-center w-full">
                @include('widgets.hello')
            </div>

            <div class="min-h-64 md:h-64 flex justify-center w-full">
                @include('widgets.actu')
            </div>

            <div class="min-h-64 md:h-64 flex justify-center w-full">
                @include('widgets.weather')
            </div>

            <div class="min-h-64 md:h-64 flex justify-center w-full">
                @include('widgets.events')
            </div>

            <div class="min-h-64 md:h-64 w-full relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
                <div class="absolute inset-0 flex flex-col justify-center items-center p-6">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100">
                        Soon 🚀
                    </h2>
                </div>
            </div>

            <div class="min-h-64 md:h-64 w-full relative overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
                <div class="absolute inset-0 flex flex-col justify-center items-center p-6">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100">
                        Soon 🚀
                    </h2>
                </div>
            </div>
        </div>

        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            <div class="absolute inset-0 flex flex-col justify-center items-center p-6">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100">
                    Soon 🚀
                </h2>
            </div>
        </div>
    </div>
</x-layouts.app>
