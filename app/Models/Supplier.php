<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';
    protected $primaryKey = 'SupplierID';

    protected $fillable = [
        'SupplierName',
        'ContactInfo',
    ];

    // Relationships
    public function products()
    {
        return $this->hasMany(Product::class, 'SupplierID', 'SupplierID');
    }
}
