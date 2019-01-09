<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
   
    //
    protected 	$primaryKey ='task_id';
    protected $fillable = [
        'task_lead_id','task_account_id','task_campaign_id','task_contact_id','task_subject','task_description','task_startdate','task_enddate','task_assignedto','task_assignedby','task_group','task_status','task_percentage',
        ];

    // protected $guarded = ['task_id'];

    
}
