<?php

namespace App;

use \Illuminate\Support\Collection;

function getCollectionFromJson (string $body): Collection
{
    return collect(json_decode((string) $body, true));
}
