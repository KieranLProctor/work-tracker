<?php

namespace App\Filament\Pages;

use Z3d0X\FilamentLogger\Resources\ActivityResource;

class ActivityLogs extends ActivityResource
{
    public static function getNavigationGroup(): ?string
    {
        return 'System';
    }
}
