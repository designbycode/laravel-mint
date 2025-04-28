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
            'mute' => 'border border-gray-300 bg-gray-100 text-shadow-gray-300 text-gray-600 hover:bg-gray-200 focus:ring-gray-300',
            'white' => 'border border-white bg-white text-shadow-gray-300 text-black/60 hover:bg-white/90 focus:ring-white',
            'black' => 'border border-black bg-gray-300 text-shadow-gray-300 text-gray-600 hover:bg-gray-300/90 focus:ring-gray-300',
            'danger' => 'border border-rose-300 text-shadow-rose-200 bg-rose-100 text-rose-600 hover:bg-rose-200 focus:ring-rose-300',
            'info' => 'border border-sky-300 text-shadow-sky-200 bg-sky-100 text-sky-600 hover:bg-sky-200 focus:ring-sky-300',
            'warning' => 'border border-amber-300 text-shadow-amber-200 bg-amber-100 text-amber-600 hover:bg-amber-200 focus:ring-amber-300',
            'success' => 'border border-lime-300 text-shadow-lime-200 bg-lime-100 text-lime-600 hover:bg-lime-200 focus:ring-lime-300',
        ];
    }

    private static function solidColors(): array
    {
        return [
            'primary' => 'border border-primary-400 text-shadow-primary-700 bg-primary-400 text-white hover:bg-primary-600 focus:ring-primary-400',
            'mute' => 'border border-gray-400 text-shadow-gray-700 bg-gray-400 text-white hover:bg-gray-600 focus:ring-gray-400',
            'white' => 'border border-white bg-white text-shadow-gray-300 text-black/90 hover:bg-white/90 focus:ring-white',
            'black' => 'border border-black bg-black text-shadow-gray-600 text-white hover:bg-black/90 focus:ring-black',
            'danger' => 'border border-rose-400 bg-rose-400 text-shadow-rose-700 text-white hover:bg-rose-600 focus:ring-rose-400',
            'info' => 'border border-sky-400 bg-sky-400 text-shadow-sky-700 text-white hover:bg-sky-600 focus:ring-sky-400',
            'warning' => 'border border-amber-400 bg-amber-400 text-shadow-amber-700 text-white hover:bg-amber-600 focus:ring-amber-400',
            'success' => 'border border-lime-400 bg-lime-400 text-shadow-lime-700 text-white hover:bg-lime-600 focus:ring-lime-400',
        ];
    }

    private static function gradientColors(): array
    {
        return [
            'primary' => 'border border-primary-400 text-shadow-primary-700 bg-linear-to-br from-primary-400 to-primary-600 text-white hover:from-primary-300 focus:ring-primary-400 shadow-sm hover:shadow-md shadow-primary-400/50',
            'mute' => 'border border-gray-400 text-shadow-gray-700 bg-linear-to-br from-gray-400 to-gray-600 text-white hover:from-gray-300 focus:ring-gray-400 shadow-sm hover:shadow-md shadow-gray-400/50',
            'white' => 'border border-white text-shadow-gray-300 bg-linear-to-br from-white to-gray-100 text-black/90 hover:from-white/50 focus:ring-white shadow-sm hover:shadow-md shadow-gray-400/50',
            'black' => 'border border-black text-shadow-gray-600 bg-linear-to-br from-black/70 to-black text-white hover:from-black/50 focus:ring-black shadow-sm hover:shadow-md shadow-black/50',
            'danger' => 'border border-rose-400 text-shadow-rose-700 bg-linear-to-br from-rose-400 to-rose-600 text-white hover:from-rose-300 focus:ring-rose-400 shadow-sm hover:shadow-md shadow-rose-400/50',
            'info' => 'border border-sky-400 text-shadow-sky-700 bg-linear-to-br from-sky-400 to-sky-600 text-white hover:from-sky-300 focus:ring-sky-400 shadow-sm hover:shadow-md shadow-sky-400/50',
            'warning' => 'border border-amber-400 text-shadow-amber-700 bg-linear-to-br from-amber-400 to-amber-600 text-white hover:from-amber-300 focus:ring-amber-400 shadow-sm hover:shadow-md shadow-amber-400/50',
            'success' => 'border border-lime-400 text-shadow-lime-700 bg-linear-to-br from-lime-400 to-lime-600 text-white hover:from-lime-300 focus:ring-lime-400 shadow-sm hover:shadow-md shadow-lime-400/50',
        ];
    }

    private static function outlineColors(): array
    {
        return [
            'primary' => 'border border-primary-300 text-shadow-primary-200 text-primary-600 hover:bg-primary-100 focus:ring-primary-300',
            'mute' => 'border border-gray-300 text-shadow-gray-300 text-gray-600 hover:bg-gray-100 focus:ring-gray-300',
            'white' => 'border border-white text-shadow-gray-300 text-black/60 dark:text-white hover:bg-white/90 focus:ring-white',
            'black' => 'border border-black text-shadow-gray-300 text-gray-600 hover:bg-gray-200 focus:ring-gray-300',
            'danger' => 'border border-rose-300 text-shadow-rose-200 text-rose-600 hover:bg-rose-100 focus:ring-rose-300',
            'info' => 'border border-sky-300 text-shadow-sky-200 text-sky-600 hover:bg-sky-100 focus:ring-sky-300',
            'warning' => 'border border-amber-300 text-shadow-amber-200 text-amber-600 hover:bg-amber-100 focus:ring-amber-300',
            'success' => 'border border-lime-300 text-shadow-lime-200 text-lime-600 hover:bg-lime-100 focus:ring-lime-300',
        ];
    }

    private static function ghostColors(): array
    {
        return [
            'primary' => 'border border-transparent text-shadow-primary-200 text-primary-600 hover:bg-primary-100 focus:ring-primary-300',
            'mute' => 'border border-transparent text-shadow-gray-300 text-gray-600 hover:bg-gray-100 focus:ring-gray-300',
            'white' => 'border border-transparent text-shadow-gray-300 dark:text-white text-black/60 hover:bg-white/90 focus:ring-white',
            'black' => 'border border-transparent text-shadow-gray-300 text-gray-600 dark:text-white dark:hover:bg-black hover:bg-gray-200 focus:ring-gray-300',
            'danger' => 'border border-transparent text-shadow-rose-200 text-rose-600 hover:bg-rose-100 focus:ring-rose-300',
            'info' => 'border border-transparent text-shadow-sky-200 text-sky-600 hover:bg-sky-100 focus:ring-sky-300',
            'warning' => 'border border-transparent text-shadow-amber-200 text-amber-600 hover:bg-amber-100 focus:ring-amber-300',
            'success' => 'border border-transparent text-shadow-lime-200 text-lime-600 hover:bg-lime-100 focus:ring-lime-300',
        ];
    }
}
