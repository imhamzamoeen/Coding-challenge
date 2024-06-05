<?php

namespace App\Enums;

enum FriendRequestStatusEnum: string
{
    const ACCEPTED = 'accepted';
    const REJECTED = 'rejected';
    const PENDING = 'pending';

    public static function getStatuses(): array
    {
        return [
            self::ACCEPTED,
            self::REJECTED,
            self::PENDING,
        ];
    }

    public static function getOnlyWarningStatuses(): array
    {
        return [self::REJECTED, self::PENDING];
    }
}
