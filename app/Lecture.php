<?php

namespace Multiversum;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;
use Exception;

class Lecture extends Model
{
    use Rateable;
}
