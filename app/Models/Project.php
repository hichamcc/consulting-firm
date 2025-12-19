<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'client',
        'type',
        'status',
        'priority',
        'resources',
        'is_billable',
        'start_date',
        'planned_end_date',
        'forecast_end_date',
        'progress_percentage',
        'pm_comment',
        'last_week_rag',
    ];

    protected $casts = [
        'is_billable' => 'boolean',
        'start_date' => 'date',
        'planned_end_date' => 'date',
        'forecast_end_date' => 'date',
        'progress_percentage' => 'integer',
    ];

    public function getRagStatusAttribute(): string
    {
        if (!$this->planned_end_date || !$this->forecast_end_date) {
            return 'Amber';
        }

        $daysDifference = $this->forecast_end_date->diffInDays($this->planned_end_date, false);

        if ($this->forecast_end_date->lte($this->planned_end_date)) {
            return 'Green';
        }

        if ($daysDifference >= -14) {
            return 'Amber';
        }

        return 'Red';
    }

    public function getTrendIndicatorAttribute(): string
    {
        if (!$this->last_week_rag) {
            return '→';
        }

        $ragOrder = ['Green' => 3, 'Amber' => 2, 'Red' => 1];
        $current = $ragOrder[$this->rag_status] ?? 2;
        $lastWeek = $ragOrder[$this->last_week_rag] ?? 2;

        if ($current > $lastWeek) {
            return '↑';
        }

        if ($current < $lastWeek) {
            return '↓';
        }

        return '→';
    }

    public function getRagColorClassAttribute(): string
    {
        return match($this->rag_status) {
            'Green' => 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200',
            'Amber' => 'bg-amber-100 text-amber-800 dark:bg-amber-900 dark:text-amber-200',
            'Red' => 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200',
            default => 'bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-200',
        };
    }

    public function scopeActive($query)
    {
        return $query->whereNotIn('status', ['Completed', 'Cancelled', 'On Hold']);
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'Completed');
    }
}
