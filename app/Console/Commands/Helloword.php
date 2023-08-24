<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Helloword extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:helloword {user} {--r}';
    //{--queue}

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
        //
        echo "hellowword " .$this->argument('user')  ;
      }
}
