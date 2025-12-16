<?php

namespace Willis1776\Notations\Livewire\Concerns;

use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;
use Willis1776\Notations\Contracts\Scribe;
use Willis1776\Notations\Manager;

trait HasMentions
{
    /**
     * @var Scribe[]
     */
    public array|Collection|null $mentionables = [];

    #[Computed]
    public function mentions()
    {
        return collect($this->mentionables)
            ->map(function ($mentionable) {
                return is_array($mentionable) ?
                    [
                        'id' => data_get($mentionable, 'id'),
                        'name' => data_get($mentionable, 'name'),
                    ] :
                    [
                        'id' => $mentionable->getKey(),
                        'name' => Manager::getName($mentionable),
                    ];
            });
    }
}
