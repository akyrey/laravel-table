<?php

namespace Okipa\LaravelTable\HeadActions;

class AddHeadAction extends RedirectHeadAction
{
    public function __construct(public string $createUrl, bool $openInNewWindow = false)
    {
        parent::__construct(
            $createUrl,
            __('Add'),
            config('laravel-table.icon.add'),
            ['btn', 'btn-success'],
            $openInNewWindow
        );
    }
}
