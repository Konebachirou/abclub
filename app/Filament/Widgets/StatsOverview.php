<?php

namespace App\Filament\Widgets;

use App\Models\User;
use App\Models\Event;
use App\Models\Report;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Visitor;
use App\Models\Conferencier;
use App\Models\NewsletterSubscriber;
use App\Models\UserEvent;
use App\Models\UserJob;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;
    protected static ?string $pollingInterval = '15s';

    protected static bool $isLazy = true;
    protected function getStats(): array
    {
        return [
            Stat::make('Total visiteurs', Visitor::count())
                ->description('Visiteurs')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->chart([7, 3, 4, 5, 6, 3, 5, 4, 6, 7, 8, 9, 10, 11, 12, 9, 8, 7]),
            Stat::make('Total Utilisateurs', User::count())
                ->description('Utilisateurs')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('fuchsia')
                ->chart([10, 6, 4, 5, 6, 7, 4, 4, 4, 3, 5, 8, 10, 12, 15, 9, 8, 9, 10, 11]),
            Stat::make('Total Partenaires', Partner::count())
                ->description('Partenaires')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('secondary')
                ->chart([7, 3, 4, 5, 6, 3, 5, 4, 6, 7, 8, 9, 10, 11, 12, 9, 8, 7, 10, 11, 8, 6, 6, 4]),
            Stat::make('Total Conferenciers', Conferencier::count())
                ->description('Conferenciers')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('primary')
                ->chart([10, 8, 9, 10, 11, 12, 10, 8, 9, 10, 11, 12, 10, 8, 9, 10, 11, 12, 10, 8, 9, 10, 11, 12]),
            Stat::make('Total Evenement', Event::all()->count())
                ->description('Evenement')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('fuchsia')
                ->chart([7, 3, 4, 5, 6, 3, 5, 4, 6, 7, 8, 9, 10, 11, 12, 9, 8, 7, 10, 11, 8, 6, 6, 4]),
            Stat::make('Total Conferences et Ateliers', Event::where('pole_id', 2)->count())
                ->description('Conferences et Ateliers')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('secondary')
                ->chart([7, 3, 4, 5, 6, 3, 5, 7, 8, 9, 10, 11, 12, 9, 8, 7, 10, 11, 8, 6, 6, 4, 10, 11, 8, 6, 6, 4]),
            Stat::make('Total Newsletters', NewsletterSubscriber::count())
                ->description('Abonnee a la newsletter')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('info')
                ->chart([7, 3, 4, 5, 6, 3, 5, 4, 6, 7, 8, 9, 10, 11, 12, 9, 8, 7, 10, 11, 8, 6, 6, 4, 10, 11, 8, 6, 6, 4]),
            Stat::make('Total News', Report::where('is_report', true)->where('is_action', false)->count())
                ->description('News')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('gray')
                ->chart([10, 8, 9, 10, 11, 12, 10, 8, 9, 10, 11, 12, 10, 8, 9, 10, 11, 12, 10, 8, 9, 10, 11, 12, 9, 8, 7, 10, 11]),
            Stat::make('Total Actions', Report::where('is_report', false)->where('is_action', true)->count())
                ->description('Actions')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('danger')
                ->chart([10, 8, 9, 10, 11, 12, 10, 8, 9, 10, 11, 12, 10, 8, 9, 10, 11, 12, 10, 8, 9, 10, 11, 12, 9, 8, 7, 10, 11, 8]),
            Stat::make('Total Contact', Contact::count())
                ->description('Contact')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('info')
                ->chart([7, 3, 4, 5, 6, 3, 5, 4, 6, 7, 8, 9, 10, 11, 12, 9, 8, 7, 10, 11, 8, 6, 6, 4, 10, 11, 8, 6, 6, 4]),
            Stat::make('Total Postulants aux evenements', UserEvent::count())
                ->description('Utilisateurs inscrits aux evenements')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('gray')
                ->chart([7, 3, 4, 5, 6, 3, 5, 4, 6, 7, 8, 9, 10, 11, 12, 9, 8, 7, 10, 11, 8, 6, 6, 4, 10, 11, 8, 6, 6, 4]),
            Stat::make('Total Postulants aux jobs', UserJob::count())
                ->description('Utilisateurs inscrits aux jobs')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('danger')
                ->chart([7, 3, 4, 5, 6, 3, 5, 4, 6, 7, 8, 9, 10, 11, 12, 9, 8, 7, 10, 11, 8, 6, 6, 4, 10, 11, 8, 6, 6, 4]),

        ];
    }
}
