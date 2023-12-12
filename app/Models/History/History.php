<?php

namespace App\Models\History;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $table = 'histories';

    const CACHE_KEY_ALL = 'history_all_cache_key';

    const CACHE_SAVE_INTERVAL = 21600;
}
