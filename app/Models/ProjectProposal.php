<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectProposal extends Model
{
    protected $fillable=['servicesSelected','full_name','email','ref_website','mobile_number','details'];
    use HasFactory;
}
