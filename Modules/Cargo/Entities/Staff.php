<?php

namespace Modules\Cargo\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $guarded = [];
    protected $table = 'staffs';
    
    protected static function newFactory()
    {
        return \Modules\Cargo\Database\factories\StaffFactory::new();
    }
    public function branch(){
        return $this->hasOne('Modules\Cargo\Entities\Branch', 'id', 'branch_id');
    }
    public function user(){
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
}
