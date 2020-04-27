<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;

use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        $schedule->call(function () {
            
            //
            $arrNodes = \App\Node::all();
            
            foreach ($arrNodes as $arrNode) {
                if ($arrNode->id != 18 && $arrNode->id != 20) {
                
                    $Data = new \App\Data();

                    $data = getContent('https://1ml.com/'.$arrNode->link);

                    $Data->node_id = $arrNode->id;
                    
                    $Data->capacity = $data['capacity'];
                    $Data->channel_count = $data['channel_count'];
                    $Data->rank_capacity = $data['rank_capacity'];
                    $Data->rank_channel = $data['rank_channel'];
                    $Data->rank_age = $data['rank_age'];
                    
                    $Data->date = date('Y-m-d');
                    $Data->type_id = 1;

                    $Data->save();
                }
            }
            
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
    
    
}
