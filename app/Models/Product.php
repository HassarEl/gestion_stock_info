<?php

namespace App\Models;

use App\Models\Requests;
use App\Models\Inventory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    public function requests(): BelongsTo
    {
        return $this->belongsTo(Requests::class);
    }

    public function inventorys(): BelongsTo
    {
        return $this->belongsTo(Inventory::class);
    }


}
