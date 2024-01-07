<?php

namespace App\Console\Commands;
use App\Models\User;

use Illuminate\Console\Command;

class Expiration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:expiration';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $Users = User::where('expired',0)->get();
        foreach($Users as $user){
            $user->update(['expired'=>1]);
        }
    }
}
