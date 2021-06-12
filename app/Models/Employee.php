<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'phone',
        'number',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function visits()
    {
        return $this->hasMany('App\Models\EmployeeVisit', 'employee_id')->orderBy('date', 'DESC');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function lastVisit()
    {
        $builder = $this->visits()->orderBy('date', 'DESC')->orderBy('updated_at', 'DESC');
        return new HasOne($builder->getQuery(), $this, 'employee_id', 'id');
    }
}
