<?php

namespace Willis1776\FilamentNotes\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Willis1776\FilamentNotes\FilamentNotes
 */
class FilamentNotes extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Willis1776\FilamentNotes\FilamentNotes::class;
    }
}
