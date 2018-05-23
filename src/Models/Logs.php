<?php

namespace Encone\Logs\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

/**
 * Class Logs
 * @package Encone\Logs\Models
 */
class Logs extends Model
{
    /**
     * @var string
     */
    protected $table = 'action_logs';

    /**
     * @var array
     */
    public $fillable = [
        'admin_user_id','route','method','ip','description'
    ];

    /**
     * @param $data
     * @return int
     */
    public static function createLog($data)
    {
        $insert = Logs::create($data);
        if(count($insert))
        {
            return $insert->id;
        }else{
            return 0;
        }
    }

    


}
