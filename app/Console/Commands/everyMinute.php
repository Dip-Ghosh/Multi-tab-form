<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class everyMinute extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'minute:insert';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'insert minute data';

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
        DB::table('user_infos')->where('user_id',5)->update([
            'first_name'=> "Shurjo",
            'last_name'=> "Pay"
        ]);
    }
}
