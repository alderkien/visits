<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class EmployeeVisit extends Pivot
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee()
    {
        return $this->belongsTo('App\Models\Employee');
    }
}
