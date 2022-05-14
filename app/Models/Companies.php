<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Companies extends Model
{
    use HasFactory;
    protected $table ='companies';
    protected $fillable =['name','email','website','logo'];

    public function employees()
    {
        return $this->hasMany(Employee::class, 'company_id','id');

    }
}