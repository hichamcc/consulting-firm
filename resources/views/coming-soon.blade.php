<x-layouts.app :title="__('Coming Soon')">
    <div class="flex h-full w-full flex-1 items-center justify-center">
        <div class="mx-auto max-w-2xl text-center">
            <div class="mb-8">
                <div class="mx-auto mb-6 flex h-32 w-32 items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900/20">
                    <x-phosphor-rocket class="size-16 text-blue-600 dark:text-blue-400" />
                </div>
                <x-heading class="mb-4">Coming Soon</x-heading>
                <x-text class="text-lg text-gray-600 dark:text-gray-400">
                    This feature is currently under development. We're working hard to bring you an amazing experience!
                </x-text>
            </div>

            <div class="mb-8">
                <div class="grid gap-4 sm:grid-cols-3">
                    <div class="rounded-lg border border-gray-200 bg-white p-6 dark:border-gray-700 dark:bg-gray-800">
                        <div class="mb-2 flex justify-center">
                            <x-phosphor-check-circle class="size-8 text-green-600 dark:text-green-400" />
                        </div>
                        <x-text class="font-medium text-gray-900 dark:text-white">Dashboard</x-text>
                        <x-text class="text-sm text-gray-600 dark:text-gray-400">Available Now</x-text>
                    </div>
                    <div class="rounded-lg border border-gray-200 bg-white p-6 dark:border-gray-700 dark:bg-gray-800">
                        <div class="mb-2 flex justify-center">
                            <x-phosphor-clock class="size-8 text-blue-600 dark:text-blue-400" />
                        </div>
                        <x-text class="font-medium text-gray-900 dark:text-white">This Feature</x-text>
                        <x-text class="text-sm text-gray-600 dark:text-gray-400">In Development</x-text>
                    </div>
                    <div class="rounded-lg border border-gray-200 bg-white p-6 dark:border-gray-700 dark:bg-gray-800">
                        <div class="mb-2 flex justify-center">
                            <x-phosphor-calendar class="size-8 text-purple-600 dark:text-purple-400" />
                        </div>
                        <x-text class="font-medium text-gray-900 dark:text-white">More Features</x-text>
                        <x-text class="text-sm text-gray-600 dark:text-gray-400">Coming Later</x-text>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <x-text class="text-gray-600 dark:text-gray-400">
                    In the meantime, explore the available features:
                </x-text>
                <x-button href="{{ route('dashboard') }}">
                    <x-phosphor-arrow-left class="size-4" />
                    Back to Dashboard
                </x-button>
            </div>
        </div>
    </div>
</x-layouts.app>
