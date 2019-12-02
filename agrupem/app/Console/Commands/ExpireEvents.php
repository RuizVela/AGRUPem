<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ExpireEvents extends Command
{

    protected $signature = 'expire:event';


    protected $description = 'Set expired field true in events database';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        
    }
}
