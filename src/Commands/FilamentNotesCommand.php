<?php

namespace Willis1776\FilamentNotes\Commands;

use Illuminate\Console\Command;

class FilamentNotesCommand extends Command
{
    public $signature = 'filament-notes';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
