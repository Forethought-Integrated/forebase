<?php 

use App\Model\Notification;

use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Notification::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $notification= new Notification;
        $notification->id='d10544d2-c0df-4f20-b065-012f307d430f';
        $notification->type='App\Notifications\RegisterationNotification';
        $notification->notifiable_type='App\User';
        $notification->notifiable_id='1';
        $notification->data='{"subject":"Please Complete Your Profile","url":"\/users\/1"}';
        // $notification->task_startdate='2019-02-19 12:16:58';
        // $notification->task_enddate='2019-02-19 12:16:58';
        $notification->save();
    }
}
