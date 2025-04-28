<?php

namespace Designbycode\LaravelMint\Enums;

enum ButtonVariant: string
{
    case FRESH = 'fresh';
    case SOLID = 'solid';
    case GRADIENT = 'gradient';
    case OUTLINE = 'outline';
    case GHOST = 'ghost';

    public function colorClass(string $color): string
    {
        return match ($this) {
            self::FRESH => self::freshColors()[$color] ?? self::freshColors()['primary'],
            self::SOLID => self::solidColors()[$color] ?? self::solidColors()['primary'],
            self::GRADIENT => self::gradientColors()[$color] ?? self::gradientColors()['primary'],
            self::OUTLINE => self::outlineColors()[$color] ?? self::outlineColors()['primary'],
            self::GHOST => self::ghostColors()[$color] ?? self::ghostColors()['primary'],
        };
    }

    private static function freshColors(): array
    {
        return [
            'primary' => 'border border-primary-300 text-shadow-primary-200 bg-primary-100 text-primary-600 hover:bg-primary-200 focus:ring-primary-300',
            'mute' => 'border border-mute-300 bg-mute-100 text-shadow-mute-300 text-mute-600 hover:bg-mute-200 focus:ring-mute-300',
            'white' => 'border border-white bg-white text-shadow-mute-300 text-black/60 hover:bg-white/90 focus:ring-white',
            'black' => 'border border-black bg-mute-300 text-shadow-mute-300 text-mute-600 hover:bg-mute-300/90 focus:ring-mute-300',
            'danger' => 'border border-danger-300 text-shadow-danger-200 bg-danger-100 text-danger-600 hover:bg-danger-200 focus:ring-danger-300',
            'info' => 'border border-info-300 text-shadow-info-200 bg-info-100 text-info-600 hover:bg-info-200 focus:ring-info-300',
            'warning' => 'border border-waring-300 text-shadow-waring-200 bg-waring-100 text-waring-600 hover:bg-waring-200 focus:ring-waring-300',
            'success' => 'border border-success-300 text-shadow-success-200 bg-success-100 text-success-600 hover:bg-success-200 focus:ring-success-300',
        ];
    }

    private static function solidColors(): array
    {
        return [
            'primary' => 'border border-primary-400 text-shadow-primary-700 bg-primary-400 text-white hover:bg-primary-600 focus:ring-primary-400',
            'mute' => 'border border-mute-400 text-shadow-mute-700 bg-mute-400 text-white hover:bg-mute-600 focus:ring-mute-400',
            'white' => 'border border-white bg-white text-shadow-mute-300 text-black/90 hover:bg-white/90 focus:ring-white',
            'black' => 'border border-black bg-black text-shadow-mute-600 text-white hover:bg-black/90 focus:ring-black',
            'danger' => 'border border-danger-400 bg-danger-400 text-shadow-danger-700 text-white hover:bg-danger-600 focus:ring-danger-400',
            'info' => 'border border-info-400 bg-info-400 text-shadow-info-700 text-white hover:bg-info-600 focus:ring-info-400',
            'warning' => 'border border-waring-400 bg-waring-400 text-shadow-waring-700 text-white hover:bg-waring-600 focus:ring-waring-400',
            'success' => 'border border-success-400 bg-success-400 text-shadow-success-700 text-white hover:bg-success-600 focus:ring-success-400',
        ];
    }

    private static function gradientColors(): array
    {
        return [
            'primary' => 'border border-primary-400 text-shadow-primary-700 bg-linear-to-br from-primary-400 to-primary-600 text-white hover:from-primary-300 focus:ring-primary-400 shadow-sm hover:shadow-md shadow-primary-400/50',
            'mute' => 'border border-mute-400 text-shadow-mute-700 bg-linear-to-br from-mute-400 to-mute-600 text-white hover:from-mute-300 focus:ring-mute-400 shadow-sm hover:shadow-md shadow-mute-400/50',
            'white' => 'border border-white text-shadow-mute-300 bg-linear-to-br from-white to-mute-100 text-black/90 hover:from-white/50 focus:ring-white shadow-sm hover:shadow-md shadow-mute-400/50',
            'black' => 'border border-black text-shadow-mute-600 bg-linear-to-br from-black/70 to-black text-white hover:from-black/50 focus:ring-black shadow-sm hover:shadow-md shadow-black/50',
            'danger' => 'border border-danger-400 text-shadow-danger-700 bg-linear-to-br from-danger-400 to-danger-600 text-white hover:from-danger-300 focus:ring-danger-400 shadow-sm hover:shadow-md shadow-danger-400/50',
            'info' => 'border border-info-400 text-shadow-info-700 bg-linear-to-br from-info-400 to-info-600 text-white hover:from-info-300 focus:ring-info-400 shadow-sm hover:shadow-md shadow-info-400/50',
            'warning' => 'border border-waring-400 text-shadow-waring-700 bg-linear-to-br from-waring-400 to-waring-600 text-white hover:from-waring-300 focus:ring-waring-400 shadow-sm hover:shadow-md shadow-waring-400/50',
            'success' => 'border border-success-400 text-shadow-success-700 bg-linear-to-br from-success-400 to-success-600 text-white hover:from-success-300 focus:ring-success-400 shadow-sm hover:shadow-md shadow-success-400/50',
        ];
    }

    private static function outlineColors(): array
    {
        return [
            'primary' => 'border border-primary-300 text-shadow-primary-200 dark:text-shadow-primary-900/50 text-primary-600 hover:bg-primary-100 focus:ring-primary-300',
            'mute' => 'border border-mute-300 text-shadow-mute-300 dark:text-shadow-black/50 text-mute-600 hover:bg-mute-100 focus:ring-mute-300',
            'white' => 'border border-white text-shadow-mute-300 dark:text-shadow-black/50 text-black/60 dark:text-white hover:bg-white/90 focus:ring-white dark:hover:bg-white/10',
            'black' => 'border border-black text-shadow-mute-300 dark:text-shadow-black/50 text-mute-600 hover:bg-mute-200 focus:ring-mute-300 dark:text-mute-100 dark:hover:bg-black/25',
            'danger' => 'border border-danger-300 text-shadow-danger-200 dark:text-shadow-danger-900/50 text-danger-600 hover:bg-danger-100 focus:ring-danger-300',
            'info' => 'border border-info-300 text-shadow-info-200 dark:text-shadow-info-900/50 text-info-600 hover:bg-info-100 focus:ring-info-300',
            'warning' => 'border border-waring-300 text-shadow-waring-200 dark:text-shadow-waring-900/50 text-waring-600 hover:bg-waring-100 focus:ring-waring-300',
            'success' => 'border border-success-300 text-shadow-success-200 dark:text-shadow-success-900/50 text-success-600 hover:bg-success-100 focus:ring-success-300',
        ];
    }

    private static function ghostColors(): array
    {
        return [
            'primary' => 'border border-transparent text-shadow-primary-200 dark:text-shadow-primary-900/50 text-primary-600 hover:bg-primary-100 focus:ring-primary-300',
            'mute' => 'border border-transparent text-shadow-mute-300 dark:text-shadow-black/50 text-mute-600 hover:bg-mute-100 focus:ring-mute-300',
            'white' => 'border border-transparent text-shadow-mute-300 dark:text-shadow-black/50 dark:text-white text-black/60 hover:bg-white/90 focus:ring-white dark:hover:bg-white/10',
            'black' => 'border border-transparent text-shadow-mute-300 dark:text-shadow-black/50 text-mute-600 dark:text-white dark:hover:bg-black hover:bg-mute-200 focus:ring-mute-300 dark:hover:bg-black/25',
            'danger' => 'border border-transparent text-shadow-danger-200 dark:text-shadow-danger-900/50 text-danger-600 hover:bg-danger-100 focus:ring-danger-300',
            'info' => 'border border-transparent text-shadow-info-200 dark:text-shadow-info-900/50 text-info-600 hover:bg-info-100 focus:ring-info-300',
            'warning' => 'border border-transparent text-shadow-waring-200 dark:text-shadow-waring-900/50 text-waring-600 hover:bg-waring-100 focus:ring-waring-300',
            'success' => 'border border-transparent text-shadow-success-200 dark:text-shadow-success-900/50 text-success-600 hover:bg-success-100 focus:ring-success-300',
        ];
    }
}
