<?php

namespace Thoughtco\StatamicCpresources\Http\Controllers;

use Statamic\Facades\User;
use Statamic\Http\Controllers\CP\CpController;

class ResourcesController extends CpController
{
    public function __invoke()
    {

        if (! User::current()->can('view '.strtolower(config('thoughtco.client-dashboard.nav.title')))) {
            abort(403);
        }

        return view('statamic-cp-resources::index', [
            'trelloUrl' => config('thoughtco.client-dashboard.trello_url'),
            'looms' => config('thoughtco.client-dashboard.looms'),
            'additionalResources' => config('thoughtco.client-dashboard.additional_resources'),
        ]);
    }
}
