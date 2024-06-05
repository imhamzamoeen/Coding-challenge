<?php

namespace Database\Seeders;

use App\Models\FriendRequest;
use Illuminate\Database\Seeder;

class FriendRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FriendRequest::factory(2)->create();
    }
}
