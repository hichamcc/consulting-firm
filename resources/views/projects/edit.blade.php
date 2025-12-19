<x-layouts.app :title="__('Edit Project')">
    <div class="mx-auto max-w-3xl">
        <div class="mb-6">
            <x-heading>Edit Project</x-heading>
            <x-text class="mt-1 text-gray-600 dark:text-gray-400">Update project details and see RAG status calculated automatically</x-text>
        </div>

        <div class="rounded-xl border border-gray-200 bg-white p-6 dark:border-gray-700 dark:bg-gray-800">
            <form action="{{ route('projects.update', $project) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="space-y-6">
                    <x-field>
                        <x-label for="name" required>Project Name</x-label>
                        <x-input id="name" name="name" type="text" value="{{ old('name', $project->name) }}" required />
                        <x-error for="name" />
                    </x-field>

                    <div class="grid gap-6 md:grid-cols-2">
                        <x-field>
                            <x-label for="client">Client</x-label>
                            <x-input id="client" name="client" type="text" value="{{ old('client', $project->client) }}" />
                            <x-error for="client" />
                        </x-field>

                        <x-field>
                            <x-label for="type" required>Type</x-label>
                            <x-select id="type" name="type" required>
                                <option value="Roadmap" {{ old('type', $project->type) === 'Roadmap' ? 'selected' : '' }}>Roadmap</option>
                                <option value="Off-Roadmap" {{ old('type', $project->type) === 'Off-Roadmap' ? 'selected' : '' }}>Off-Roadmap</option>
                                <option value="Internal" {{ old('type', $project->type) === 'Internal' ? 'selected' : '' }}>Internal</option>
                            </x-select>
                            <x-error for="type" />
                        </x-field>
                    </div>

                    <div class="grid gap-6 md:grid-cols-2">
                        <x-field>
                            <x-label for="status" required>Status</x-label>
                            <x-select id="status" name="status" required>
                                <option value="Planning" {{ old('status', $project->status) === 'Planning' ? 'selected' : '' }}>Planning</option>
                                <option value="In Progress" {{ old('status', $project->status) === 'In Progress' ? 'selected' : '' }}>In Progress</option>
                                <option value="QA/Testing" {{ old('status', $project->status) === 'QA/Testing' ? 'selected' : '' }}>QA/Testing</option>
                                <option value="On Hold" {{ old('status', $project->status) === 'On Hold' ? 'selected' : '' }}>On Hold</option>
                                <option value="Blocked" {{ old('status', $project->status) === 'Blocked' ? 'selected' : '' }}>Blocked</option>
                                <option value="Completed" {{ old('status', $project->status) === 'Completed' ? 'selected' : '' }}>Completed</option>
                                <option value="Cancelled" {{ old('status', $project->status) === 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                            </x-select>
                            <x-error for="status" />
                        </x-field>

                        <x-field>
                            <x-label for="priority" required>Priority</x-label>
                            <x-select id="priority" name="priority" required>
                                <option value="High" {{ old('priority', $project->priority) === 'High' ? 'selected' : '' }}>High</option>
                                <option value="Medium" {{ old('priority', $project->priority) === 'Medium' ? 'selected' : '' }}>Medium</option>
                                <option value="Low" {{ old('priority', $project->priority) === 'Low' ? 'selected' : '' }}>Low</option>
                            </x-select>
                            <x-error for="priority" />
                        </x-field>
                    </div>

                    <x-field>
                        <x-label for="resources">Resources (Team Members)</x-label>
                        <x-input id="resources" name="resources" type="text" value="{{ old('resources', $project->resources) }}" placeholder="e.g., John Doe, Jane Smith" />
                        <x-error for="resources" />
                    </x-field>

                    <x-field>
                        <div class="flex items-center">
                            <x-checkbox id="is_billable" name="is_billable" value="1" {{ old('is_billable', $project->is_billable) ? 'checked' : '' }} />
                            <x-label for="is_billable" class="ml-2">Billable Project</x-label>
                        </div>
                        <x-error for="is_billable" />
                    </x-field>

                    <div class="grid gap-6 md:grid-cols-3">
                        <x-field>
                            <x-label for="start_date">Start Date</x-label>
                            <x-input id="start_date" name="start_date" type="date" value="{{ old('start_date', $project->start_date?->format('Y-m-d')) }}" />
                            <x-error for="start_date" />
                        </x-field>

                        <x-field>
                            <x-label for="planned_end_date">Planned End Date</x-label>
                            <x-input id="planned_end_date" name="planned_end_date" type="date" value="{{ old('planned_end_date', $project->planned_end_date?->format('Y-m-d')) }}" />
                            <x-error for="planned_end_date" />
                        </x-field>

                        <x-field>
                            <x-label for="forecast_end_date">Forecast End Date</x-label>
                            <x-input id="forecast_end_date" name="forecast_end_date" type="date" value="{{ old('forecast_end_date', $project->forecast_end_date?->format('Y-m-d')) }}" />
                            <x-error for="forecast_end_date" />
                        </x-field>
                    </div>

                    <x-field>
                        <x-label for="progress_percentage" required>Progress (%)</x-label>
                        <x-input id="progress_percentage" name="progress_percentage" type="number" min="0" max="100" value="{{ old('progress_percentage', $project->progress_percentage) }}" required />
                        <x-error for="progress_percentage" />
                    </x-field>

                    <x-field>
                        <x-label for="pm_comment">PM Comment</x-label>
                        <x-textarea id="pm_comment" name="pm_comment" rows="3">{{ old('pm_comment', $project->pm_comment) }}</x-textarea>
                        <x-error for="pm_comment" />
                    </x-field>

                    <div class="rounded-lg bg-blue-50 p-4 dark:bg-blue-900/20">
                        <div class="flex items-center gap-2">
                            <x-phosphor-info class="size-5 text-blue-600 dark:text-blue-400" />
                            <div class="text-sm text-blue-800 dark:text-blue-200">
                                <strong>Current RAG Status:</strong>
                                <span class="ml-2 inline-flex rounded-full px-2 py-1 text-xs font-semibold {{ $project->rag_color_class }}">
                                    {{ $project->rag_status }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 flex justify-end gap-3">
                    <x-button href="{{ route('dashboard') }}" variant="secondary">
                        Cancel
                    </x-button>
                    <x-button type="submit">
                        Update Project
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>
