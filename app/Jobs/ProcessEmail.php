<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;


class ProcessEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    // protected $name;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    // public function __construct($name)
    // {
    //     //
    //     $this->name=$name;
    // }
 public function __construct()
    {
        //
        // $this->name=$name;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        // Mail::to()
       $name = 'Vikram Pratap Singh';



       // Mail::to('vikram2327@gmail.com')->send(new SendMailable($this->name));
       // Mail::to('vikram2327@gmail.com')->send(new SendMailable($name));
        $ar['0']=['digvijay.dubey@forethought.in'];
        $ar['1']=['dig.d12345@gmail.com'];
        $ar['2']=['khushi.jain@forethought.in'];
        $ar['3']=['khushijain857@gmail.com'];
        $ar['4']=['ayush.patel@forethought.in'];
        $ar['5']=['patelayush94@gmail.com'];
        $ar['6']=['sandip.gupta@forethought.in'];
        $ar['7']=['sandipg309@gmail.com'];
        $ar['8']=['pankhuri.prakash@forethought.in'];
        $ar['9']=['pankhuri.prakash5@gmail.com'];
        $ar['10']=['vikram.singh@forethought.in'];
        $ar['11']=['vikramforvk@gmail.com'];
        $ar['12']=['vibhav.kanoujiya@forethought.in'];
        $ar['13']=['kumarvibhav81@gmail.com'];
        $ar['14']=['jay.prakash@forethought.in'];
        $ar['15']=['jpforever1999@gmail.com'];
        $ar['16']=['mishrahimanshu@gmail.com'];

        foreach($ar as $a)
         {
            // Mail::to($a)->send(new SendMailable($name));
            Mail::to($a)->send(new SendMailable($name));

         }

    }
}
