<x-layouts.app :title="__('Add New Project')">
    <div class="mx-auto max-w-3xl">
        <div class="mb-6">
            <x-heading>Add New Project</x-heading>
            <x-text class="mt-1 text-gray-600 dark:text-gray-400">Create a new project with automated RAG status tracking</x-text>
        </div>

        <div class="rounded-xl border border-gray-200 bg-white p-6 dark:border-gray-700 dark:bg-gray-800">
            <form action="{{ route('projects.store') }}" method="POST">
                @csrf

                <div class="space-y-6">
                    <x-field>
                        <x-label for="name" required>Project Name</x-label>
                        <x-input id="name" name="name" type="text" value="{{ old('name') }}" required />
                        <x-error for="name" />
                    </x-field>

                    <div class="grid gap-6 md:grid-cols-2">
                        <x-field>
                            <x-label for="client">Client</x-label>
                            <x-input id="client" name="client" type="text" value="{{ old('client') }}" />
                            <x-error for="client" />
                        </x-field>

                        <x-field>
                            <x-label for="type" required>Type</x-label>
                            <x-select id="type" name="type" required>
                                <option value="Roadmap" {{ old('type') === 'Roadmap' ? 'selected' : '' }}>Roadmap</option>
                                <option value="Off-Roadmap" {{ old('type') === 'Off-Roadmap' ? 'selected' : '' }}>Off-Roadmap</option>
                                <option value="Internal" {{ old('type') === 'Internal' ? 'selected' : '' }}>Internal</option>
                            </x-select>
                            <x-error for="type" />
                        </x-field>
                    </div>

                    <div class="grid gap-6 md:grid-cols-2">
                        <x-field>
                            <x-label for="status" required>Status</x-label>
                            <x-select id="status" name="status" required>
                                <option value="Planning" {{ old('status') === 'Planning' ? 'selected' : '' }}>Planning</option>
                                <option value="In Progress" {{ old('status') === 'In Progress' ? 'selected' : '' }}>In Progress</option>
                                <option value="QA/Testing" {{ old('status') === 'QA/Testing' ? 'selected' : '' }}>QA/Testing</option>
                                <option value="On Hold" {{ old('status') === 'On Hold' ? 'selected' : '' }}>On Hold</option>
                                <option value="Blocked" {{ old('status') === 'Blocked' ? 'selected' : '' }}>Blocked</option>
                                <option value="Completed" {{ old('status') === 'Completed' ? 'selected' : '' }}>Completed</option>
                                <option value="Cancelled" {{ old('status') === 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                            </x-select>
                            <x-error for="status" />
                        </x-field>

                        <x-field>
                            <x-label for="priority" required>Priority</x-label>
                            <x-select id="priority" name="priority" required>
                                <option value="High" {{ old('priority') === 'High' ? 'selected' : '' }}>High</option>
                                <option value="Medium" {{ old('priority', 'Medium') === 'Medium' ? 'selected' : '' }}>Medium</option>
                                <option value="Low" {{ old('priority') === 'Low' ? 'selected' : '' }}>Low</option>
                            </x-select>
                            <x-error for="priority" />
                        </x-field>
                    </div>

                    <x-field>
                        <x-label for="resources">Resources (Team Members)</x-label>
                        <x-input id="resources" name="resources" type="text" value="{{ old('resources') }}" placeholder="e.g., John Doe, Jane Smith" />
                        <x-error for="resources" />
                    </x-field>

                    <x-field>
                        <div class="flex items-center">
                            <x-checkbox id="is_billable" name="is_billable" value="1" {{ old('is_billable') ? 'checked' : '' }} />
                            <x-label for="is_billable" class="ml-2">Billable Project</x-label>
                        </div>
                        <x-error for="is_billable" />
                    </x-field>

                    <div class="grid gap-6 md:grid-cols-3">
                        <x-field>
                            <x-label for="start_date">Start Date</x-label>
                            <x-input id="start_date" name="start_date" type="date" value="{{ old('start_date') }}" />
                            <x-error for="start_date" />
                        </x-field>

                        <x-field>
                            <x-label for="planned_end_date">Planned End Date</x-label>
                            <x-input id="planned_end_date" name="planned_end_date" type="date" value="{{ old('planned_end_date') }}" />
                            <x-error for="planned_end_date" />
                        </x-field>

                        <x-field>
                            <x-label for="forecast_end_date">Forecast End Date</x-label>
                            <x-input id="forecast_end_date" name="forecast_end_date" type="date" value="{{ old('forecast_end_date') }}" />
                            <x-error for="forecast_end_date" />
                        </x-field>
                    </div>

                    <x-field>
                        <x-label for="progress_percentage" required>Progress (%)</x-label>
                        <x-input id="progress_percentage" name="progress_percentage" type="number" min="0" max="100" value="{{ old('progress_percentage', 0) }}" required />
                        <x-error for="progress_percentage" />
                    </x-field>

                    <x-field>
                        <x-label for="pm_comment">PM Comment</x-label>
                        <x-textarea id="pm_comment" name="pm_comment" rows="3">{{ old('pm_comment') }}</x-textarea>
                        <x-error for="pm_comment" />
                    </x-field>
                </div>

                <div class="mt-6 flex justify-end gap-3">
                    <x-button href="{{ route('dashboard') }}" variant="secondary">
                        Cancel
                    </x-button>
                    <x-button type="submit">
                        Create Project
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.app>
