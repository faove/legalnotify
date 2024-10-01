<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Associate extends Model
{
    use HasFactory, Notifiable;

    public $table = 'associates';

    public $timestamps = true;


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'last_name',
        'dni',
        'nie',
        'nif',
        'passport',
        'age',
        'gender',
        'address',
        'country',
        'date_birth',
        'date_begin',
        'email',
        'social_networks',
        'telegram',
        'facebook',
        'phone',
        'phone_number',
        'process_id',
        'process_specialties_id',
        'country_id',
        'civil_status_id',
        'supervisor_status',
        'user_id',
        'status',
        'created_at',
        'updated_at'
    ];
}