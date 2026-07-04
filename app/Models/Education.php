<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Education extends Model {
    protected $table = 'education';
    protected $fillable = ['degree','institution','institution_website','start_date','end_date','in_progress','period','description','sort_order'];
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'in_progress' => 'boolean',
    ];
}
