<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class CustomDashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static string $view = 'filament.pages.custom-dashboard';
}
