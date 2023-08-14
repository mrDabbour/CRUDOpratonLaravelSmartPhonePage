<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// المسار: app/Models/Smartphone.php
class Smartphone extends Model
{
    protected $table = 'smartphones';
    protected $fillable = ['name', 'image', 'price', 'quantity', 'description', 'category'];
}
