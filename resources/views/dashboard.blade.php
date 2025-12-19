<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-6">
        <div class="flex items-center justify-between">
            <div>
                <x-heading>Project Delivery Dashboard</x-heading>
                <x-text class="mt-1 text-gray-600 dark:text-gray-400">Track project status with automated RAG indicators</x-text>
            </div>
            <x-button href="{{ route('projects.create') }}">
                <x-phosphor-plus class="size-4" />
                Add Project
            </x-button>
        </div>

        @if(session('success'))
            <div class="rounded-lg bg-green-50 p-4 text-green-800 dark:bg-green-900/20 dark:text-green-200">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid gap-4 md:grid-cols-4">
            <div class="rounded-xl border border-gray-200 bg-white p-6 dark:border-gray-700 dark:bg-gray-800">
                <div class="flex items-center justify-between">
                    <div>
                        <x-text class="text-sm text-gray-600 dark:text-gray-400">Total Active</x-text>
                        <div class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">{{ $totalActiveProjects }}</div>
                    </div>
                    <div class="rounded-lg bg-blue-100 p-3 dark:bg-blue-900/20">
                        <x-phosphor-briefcase class="size-8 text-blue-600 dark:text-blue-400" />
                    </div>
                </div>
            </div>

            <div class="rounded-xl border border-gray-200 bg-white p-6 dark:border-gray-700 dark:bg-gray-800">
                <div class="flex items-center justify-between">
                    <div>
                        <x-text class="text-sm text-gray-600 dark:text-gray-400">On Track</x-text>
                        <div class="mt-2 text-3xl font-bold text-green-600 dark:text-green-400">{{ $greenCount }}</div>
                    </div>
                    <div class="rounded-lg bg-green-100 p-3 dark:bg-green-900/20">
                        <x-phosphor-check-circle class="size-8 text-green-600 dark:text-green-400" />
                    </div>
                </div>
            </div>

            <div class="rounded-xl border border-gray-200 bg-white p-6 dark:border-gray-700 dark:bg-gray-800">
                <div class="flex items-center justify-between">
                    <div>
                        <x-text class="text-sm text-gray-600 dark:text-gray-400">At Risk</x-text>
                        <div class="mt-2 text-3xl font-bold text-amber-600 dark:text-amber-400">{{ $amberCount }}</div>
                    </div>
                    <div class="rounded-lg bg-amber-100 p-3 dark:bg-amber-900/20">
                        <x-phosphor-warning class="size-8 text-amber-600 dark:text-amber-400" />
                    </div>
                </div>
            </div>

            <div class="rounded-xl border border-gray-200 bg-white p-6 dark:border-gray-700 dark:bg-gray-800">
                <div class="flex items-center justify-between">
                    <div>
                        <x-text class="text-sm text-gray-600 dark:text-gray-400">Late/Blocked</x-text>
                        <div class="mt-2 text-3xl font-bold text-red-600 dark:text-red-400">{{ $redCount }}</div>
                    </div>
                    <div class="rounded-lg bg-red-100 p-3 dark:bg-red-900/20">
                        <x-phosphor-x-circle class="size-8 text-red-600 dark:text-red-400" />
                    </div>
                </div>
            </div>
        </div>

        <div class="rounded-xl border border-gray-200 bg-white dark:border-gray-700 dark:bg-gray-800">
            <div class="border-b border-gray-200 p-6 dark:border-gray-700">
                <x-subheading>Active Projects</x-subheading>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="border-b border-gray-200 bg-gray-50 dark:border-gray-700 dark:bg-gray-900/50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500 dark:text-gray-400">Project</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500 dark:text-gray-400">Client</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500 dark:text-gray-400">Type</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500 dark:text-gray-400">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500 dark:text-gray-400">RAG</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500 dark:text-gray-400">Trend</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500 dark:text-gray-400">Progress</th>
                            <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500 dark:text-gray-400">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @forelse($activeProjects as $project)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-900/30">
                                <td class="whitespace-nowrap px-6 py-4">
                                    <div class="font-medium text-gray-900 dark:text-white">{{ $project->name }}</div>
                                    @if($project->pm_comment)
                                        <div class="mt-1 text-sm text-gray-500 dark:text-gray-400">{{ Str::limit($project->pm_comment, 50) }}</div>
                                    @endif
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500 dark:text-gray-400">
                                    {{ $project->client ?? 'N/A' }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500 dark:text-gray-400">
                                    {{ $project->type }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500 dark:text-gray-400">
                                    {{ $project->status }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <span class="inline-flex rounded-full px-2 py-1 text-xs font-semibold {{ $project->rag_color_class }}">
                                        {{ $project->rag_status }}
                                    </span>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-2xl">
                                    {{ $project->trend_indicator }}
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <div class="h-2 w-24 overflow-hidden rounded-full bg-gray-200 dark:bg-gray-700">
                                            <div class="h-full bg-blue-600" style="width: {{ $project->progress_percentage }}%"></div>
                                        </div>
                                        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $project->progress_percentage }}%</span>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-sm">
                                    <div class="flex gap-2">
                                        <x-button href="{{ route('projects.edit', $project) }}" variant="secondary" size="sm">
                                            Edit
                                        </x-button>
                                        <form action="{{ route('projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')
                                            <x-button type="submit" variant="secondary" size="sm">
                                                Delete
                                            </x-button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="px-6 py-12 text-center">
                                    <x-phosphor-folder-open class="mx-auto size-12 text-gray-400" />
                                    <x-text class="mt-2 text-gray-500 dark:text-gray-400">No active projects found.</x-text>
                                    <x-button href="{{ route('projects.create') }}" class="mt-4" size="sm">
                                        Create Your First Project
                                    </x-button>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        @if($completedProjects->count() > 0)
            <div class="rounded-xl border border-gray-200 bg-white dark:border-gray-700 dark:bg-gray-800">
                <div class="border-b border-gray-200 p-6 dark:border-gray-700">
                    <x-subheading>Recently Completed Projects</x-subheading>
                </div>
                <div class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach($completedProjects as $project)
                        <div class="flex items-center justify-between p-6">
                            <div class="flex items-center gap-4">
                                <div class="rounded-lg bg-green-100 p-2 dark:bg-green-900/20">
                                    <x-phosphor-check class="size-5 text-green-600 dark:text-green-400" />
                                </div>
                                <div>
                                    <div class="font-medium text-gray-900 dark:text-white">{{ $project->name }}</div>
                                    <div class="text-sm text-gray-500 dark:text-gray-400">{{ $project->client ?? 'Internal' }} • {{ $project->type }}</div>
                                </div>
                            </div>
                            <span class="rounded-full bg-gray-100 px-3 py-1 text-xs font-medium text-gray-600 dark:bg-gray-700 dark:text-gray-300">
                                {{ $project->is_billable ? 'Billable' : 'Non-Billable' }}
                            </span>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</x-layouts.app>
