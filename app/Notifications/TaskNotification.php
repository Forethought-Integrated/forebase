<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class TaskNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    protected $notifArr;

    // protected $notificationSubject;
    // protected $notificationIcon;
    // protected $notificationURL;
    
    public function __construct($data)
    {
        //
        // $this->notificationSubject=$data['subject'];
        // $this->notificationIcon=$data['icon'];
        // $this->notificationURL=$data['url'];
        $this->notifArr=$data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        // return ['mail']; 
        return ['database','mail'];

    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        //     'invoice_id' => $this->invoice->id,
        // 'amount' => $this->invoice->amount,
            // 'data'=>'this is my first notification in notification class Task Notification',
        // 'invoice_id' => $this->invoice->id,
        // 'amount' => $this->invoice->amount,
            // 'subject' => $this->notificationSubject,
            // 'icon' => $this->notificationIcon,
            // 'url' => $this->notificationURL,
            'subject' => $this->notifArr['subject'],
            'icon' => $this->notifArr['icon'],
            'url' => $this->notifArr['url'],
            'type' => $this->notifArr['type'],
            'assignedBy' => $this->notifArr['assignedBy'],
            'assignedByUrl' => $this->notifArr['assignedByUrl'],
            'taskId' => $this->notifArr['taskId'],
            'taskEndDate' => $this->notifArr['taskEndDate'],

        // $notificationAr['subject']=$request['TaskSubject'];
        // $notificationAr['icon']=$request['TaskSubject'];    
        // $notificationAr['url']="/crm/task/$task->task_id";
        // $notificationAr['type']='Task';
        // $notificationAr['assignedBy']=$task['task_assignedby'];
        // $notificationAr['assignedByUrl']=asset("users/".$task['task_assignedby']);
        // $notificationAr['taskId']=$task['task_id'];
        // $notificationAr['taskEndDate']=$task['task_enddate'];


        ];
    }
}
