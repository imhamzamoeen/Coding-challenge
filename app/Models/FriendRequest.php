<?php

namespace App\Models;

use App\Enums\FriendRequestStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FriendRequest extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['status', 'sender_id', 'receiver_id'];

    protected $attributes = ['status' => FriendRequestStatusEnum::PENDING];

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id', 'id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id', 'id');
    }
}
