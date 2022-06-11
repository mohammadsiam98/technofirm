<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\SectorServicesNames;
use Illuminate\Database\Eloquent\SoftDeletes;
class SectorServices extends Model
{
    use SoftDeletes;
    protected $fillable=['category_id','Sector_service_name_id','title','details','image','status'];
<<<<<<< HEAD
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
=======
>>>>>>> 961b3759e142d60936e58246ab405ada43e28be3
    public function get_category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
    public function get_service_name_heading()
    {
        return $this->belongsTo('App\Models\SectorServicesNames', 'Sector_service_name_id');
    } 
    use HasFactory;
}
