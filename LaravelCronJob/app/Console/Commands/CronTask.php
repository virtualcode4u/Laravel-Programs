<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CronTask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crontask:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info("Cron Task Scheduling Started Successfully");
        // return Command::SUCCESS;
    }
}
