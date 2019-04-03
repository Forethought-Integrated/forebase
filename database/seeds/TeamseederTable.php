<?php

use App\Model\Team;
use Illuminate\Database\Seeder;

class TeamseederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team=new Team;
        $team->team_name='Developers';
        $team->team_icon_path=('vendor/laravel-filemanager/img/FolderIcons/MainFolders');
        $team->team_description='This is the Developement Team';
        $team->save();

        $team=new Team;
        $team->team_name='HR';
        $team->team_icon_path=('vendor/laravel-filemanager/img/FolderIcons/MainFolders');
        $team->team_description='This is HR Team';
        $team->save();

        $team=new Team;
        $team->team_name='Marketing';
        $team->team_icon_path=('vendor/laravel-filemanager/img/FolderIcons/MainFolders');
        $team->team_description='This is the Marketing Team';
        $team->save();

        $team=new Team;
        $team->team_name='Sales';
        $team->team_icon_path=('vendor/laravel-filemanager/img/FolderIcons/MainFolders');
        $team->team_description='This is the Sales Team';
        $team->save();

        $team=new Team;
        $team->team_name='Corporate';
        $team->team_icon_path=('vendor/laravel-filemanager/img/FolderIcons/MainFolders');
        $team->team_description='This is the Corporate Team';
        $team->save();
    }
}
