<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 邀请码
 * Class Node
 * @package App\Http\Models
 */
class Invite extends Model
{
    protected $table = 'invite';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uid',
        'fuid',
        'code',
        'status',
        'dateline'
    ];

    public function Generator()
    {
        return $this->hasOne(User::class, 'id', 'uid');
    }

    public function User()
    {
        return $this->hasOne(User::class, 'id', 'fuid');
    }

}