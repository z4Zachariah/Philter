<?php namespace Zach\Philter\Models;

use Model;

/**
 * Model
 */
class Image extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'zach_philter_image';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


  /*
     * Relations
     */
    public $belongsTo = [
        'user' => ['RainLab\User\Models\User']
    ];
    /*
     * Relations
     */
    public $attachOne = [
        'image' => ['System\Models\File']
    ];
 
    public $belongsToMany = [
        'tags' => [
            'zach\philter\models\Tag',
            'table' => 'zach_philter_image_tag',
            'order' => 'tag'
        ]
    ];

    public function scopeLatest($query)
    {
        return $query->take(8)->orderBy('id', 'desc');
    }

    public function scopeuserImages($query, $user_id){

        return $query->where('user_id', $user_id)->orderBy('id', 'desc');
    }

    public function scopeOthersImages($query, $user_id)
    {
        return $query->where('user_id', '!=', $user_id);
    }

    


}
