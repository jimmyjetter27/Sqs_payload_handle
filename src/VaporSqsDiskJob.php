<?php

namespace jimmyjetter\SqsDisk;

use Laravel\Vapor\Queue\VaporJob;
use Illuminate\Contracts\Queue\Job as JobContract;

class VaporSqsDiskJob extends VaporJob implements JobContract
{
    use SqsDiskBaseJob;
}