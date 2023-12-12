<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Charity extends Model
{
    protected $fillable = [
        'manager_id',
        'charity_name',
        'charity_short_description',
        'charity_type',
        'about',
        'contact_email',
        'contact_phone',
        'contact_website',
        'blog_url',
        'contact_facebook',
        'contact_insta',
        'contact_twitter',
        'status',
        'chairty_banner',
        'charity_logo',
        'charity_profile_image',
        'charity_category',
        'charity_subcategory',
    ];
}
