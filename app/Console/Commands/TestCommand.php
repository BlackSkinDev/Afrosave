<?php

namespace App\Console\Commands;

use App\Test;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $point = rand(1,1000000);
        $record = 'Afrosave-record - '.$point;
        Test::create([
            'record' =>$record,
            'point' =>$point
        ]);

    }
}
