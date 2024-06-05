<?php

namespace Database\Factories;

use App\Enums\FriendRequestStatusEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FriendRequest>
 */
class FriendRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $statuses = FriendRequestStatusEnum::getOnlyWarningStatuses();
        $senderId = User::inRandomOrder()->first()->id;
        
        do {
            $receiverId = User::inRandomOrder()->first()->id;
        } while ($senderId == $receiverId);
        
        return [
            'status' => Arr::random($statuses, 1)[0],
            'sender_id' => $senderId,
            'receiver_id' => $receiverId,
        ];
    }
}
