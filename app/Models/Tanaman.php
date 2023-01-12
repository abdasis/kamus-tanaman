<?php

namespace App\Models;

use App\Traits\Blameable;
use Coderflex\Laravisit\Concerns\CanVisit;
use Coderflex\Laravisit\Concerns\HasVisits;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Maize\Markable\Markable;
use Maize\Markable\Models\Like;
use Maize\Markable\Models\Reaction;

class Tanaman extends Model implements CanVisit
{
    use Markable;
    use Searchable;
    use HasFactory;
    use HasVisits;

    protected static $marks = [
        Reaction::class,
    ];

    protected $guarded = [];

    public function user()
    {
       return $this->belongsTo(User::class, 'dibuat_oleh', 'id');
    }

    public function diverifikasi()
    {
        return $this->belongsTo(User::class, 'diverifikasi_oleh', 'id');
    }
}
