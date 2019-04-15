<?php 

use App\Model\Task;

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Task::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $tasks= new Task;
        $tasks->task_subject='Posts';
        $tasks->task_description='this post is for the Groovenexus';
        $tasks->task_group='Posts';
        $tasks->task_status='in progress';
        $tasks->task_startdate='29-01-2019';
        $tasks->task_enddate='10-02-2019';
        $tasks->task_assignedto='Vibhav Kannaujiya';
        $tasks->task_assignedby='Rohan Nagi';
        $tasks->task_percentage='60%';
        $tasks->save();

        $tasks= new Task;
        $tasks->task_subject='Developement';
        $tasks->task_description='this is for the product Developement';
        $tasks->task_group='developement';
        $tasks->task_startdate='28-01-2019';
        $tasks->task_enddate='11-02-2019';
        $tasks->task_assignedto='Vikram Pratap Singh';
        $tasks->task_assignedby='Himanshu Mishra';
        $tasks->task_percentage='60%';
        $tasks->save();

        $tasks= new Task;
        $tasks->task_subject='Server';
        $tasks->task_description='this is for the server deployement';
        $tasks->task_group='server';
        $tasks->task_startdate='20-01-2019';
        $tasks->task_enddate='05-02-2019';
        $tasks->task_assignedto='Digvijay Dubey';
        $tasks->task_assignedby='Himashu Mishra';
        $tasks->task_percentage='80%';
        $tasks->save();

        $tasks= new Task;
        $tasks->task_subject='Groovenexus Posts';
        $tasks->task_description='this is for the Groovenexus';
        $tasks->task_group='Groovenexus';
        $tasks->task_startdate='10-08-2018';
        $tasks->task_enddate='15-02-2019';
        $tasks->task_assignedto='Jay Mehta';
        $tasks->task_assignedby='Nishant Mishra';
        $tasks->task_percentage='80%';
        $tasks->save();

        $tasks= new Task;
        $tasks->task_subject='Marketing';
        $tasks->task_description='this is for the Marketing';
        $tasks->task_group='Marketing';
        $tasks->task_startdate='10-01-2019';
        $tasks->task_enddate='10-02-2019';
        $tasks->task_assignedto='Vivek Tomar';
        $tasks->task_assignedby='Nishant Mishra';
        $tasks->task_percentage='60';
        $tasks->save();

        $tasks= new Task;
        $tasks->task_subject='Search Engine Optimization';        
        $tasks->task_description='this is for the seo';
        $tasks->task_group='seo';
        $tasks->task_startdate='01-01-2019';
        $tasks->task_enddate='15-02-2019';
        $tasks->task_assignedto='Pankhuri Prakash';
        $tasks->task_assignedby='Himanshu Mishra';
        $tasks->task_percentage='40%';
        $tasks->save();

        $tasks= new Task;
        $tasks->task_subject='Designing';
        $tasks->task_description='this is for the Designing';
        $tasks->task_group='Designing';
        $tasks->task_startdate='15-01-2019';
        $tasks->task_enddate='15-02-2019';
        $tasks->task_assignedto='Amit Kumar Singh';
        $tasks->task_assignedby='Nishant Mishra';
        $tasks->task_percentage='80%';
        $tasks->save();

        $tasks= new Task;
        $tasks->task_subject='Content writing';
        $tasks->task_description='this is for the content-writing';
        $tasks->task_group='content writing';
        $tasks->task_startdate='07-01-2019';
        $tasks->task_enddate='07-02-2019';
        $tasks->task_assignedto='Nishant Murali Dharan';
        $tasks->task_assignedby='Rohan Nagi';
        $tasks->task_percentage='80%';
        $tasks->save();

        $tasks= new Task;
        $tasks->task_subject='web Developement';
        $tasks->task_description='this is for the product developement';
        $tasks->task_group='web developement';
        $tasks->task_startdate='20-01-2019';
        $tasks->task_enddate='30-01-2019';
        $tasks->task_assignedto='Sandip Gupta';
        $tasks->task_assignedby='Vikram Pratap Singh';
        $tasks->task_percentage='40%';
        $tasks->save();

       
    }
}
