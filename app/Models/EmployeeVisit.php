<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Enums\VisitType;

class EmployeeVisit extends Model
{

    /**
     * @var string
     */
    protected $table = 'employee_visits';

    /**
     * @var array
     */
    protected $fillable = [
        'employee_id',
        'date',
        'type',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee()
    {
        return $this->belongsTo('App\Models\Employee');
    }

    public function getTranslatedTypeAttribute()
    {
        return VisitType::values()[$this->type] ?? '';
    }

    public function getTypeColorAttribute()
    {
        return VisitType::colors()[$this->type] ?? '';
    }
}
