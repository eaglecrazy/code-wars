<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class cw extends Command
{
    protected $signature = 'cw';

    public function handle()
    {
        dd(validBraces('([])'));
        return 0;
    }
}

function validBraces($braces)
{
    $trans = ['()' => '', '[]' => '', '{}' => ''];

    do {
        $old = $braces;
        $braces = strtr($braces, $trans);
        if ($old === $braces) {
            return false;
        }
    } while ($braces);

    return true;
}
