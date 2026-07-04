<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Certificate extends Model {
    protected $fillable = ['title','organization','description','certificate_image','credential_file','credential_link','issue_date','featured','sort_order'];
    protected $casts = ['issue_date' => 'date', 'featured' => 'boolean'];
}
