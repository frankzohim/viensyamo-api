<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CustomTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:custom-task';

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
        // Your task logic here
        // This could be sending emails, generating reports, etc.
        $this->info('Custom task executed successfully!');
    }
}
