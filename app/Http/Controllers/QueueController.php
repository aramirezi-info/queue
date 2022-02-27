<?php

namespace App\Http\Controllers;

use App\Jobs\Test;
use App\Jobs\Test2;
use App\Jobs\Test3;
use Illuminate\Http\Request;

class QueueController extends Controller
{
    public function test1(): string
    {
        logger('mensaje 1');
        logger('mensaje 2');

        dispatch(function(){
            sleep(5);
            logger('mensaje 3');
        });

        return 'completado';
    }

    public function test2(): string
    {
        logger('mensaje 1');
        logger('mensaje 2');

        Test::dispatch();
        Test2::dispatch()->delay(now()->addSecond(5));
        Test3::dispatch();

        return 'completado';
    }
}
