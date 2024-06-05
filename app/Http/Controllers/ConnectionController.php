<?php

namespace App\Http\Controllers;

use App\Enums\FriendRequestStatusEnum;
use App\Models\FriendRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ConnectionController extends Controller
{
    public function index(Request $request)
    {
        $connections = auth()->user()->commonFriends(auth()->id())
            ->with(['sender', 'receiver'])
            ->paginate($request->has('limit') ? $request->limit + 1 : 10);

        return response()->json([
            'total' => $connections->total(),
            'data' => view('components.connection', ['connections' => $connections])->render()
        ], 200);
    }

    public function destroy(FriendRequest $connection)
    {
        $connection->delete();

        return response()->noContent();
    }
}
