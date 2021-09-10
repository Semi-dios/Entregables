<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;
class Product extends Model
{
    protected $fillable = [
        'name','description','image','price','company_id'
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }
}
