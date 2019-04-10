<?php

use App\Model\SpatiePermission\Permission;
// use App\Model\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		// Side Bar Start
		$permission             = new Permission;
		$permission->name       = env('APP_PER');
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'SocialPost';
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'FileManager';
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'CRM';
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'Brand';
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'Administration';
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'Helpdesk';
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'file-tag-manager';
		$permission->guard_name = 'web';
		$permission->save();
		//  SideBar End

		//CRM start

		$permission             = new Permission;
		$permission->name       = 'Contacts';
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'Accounts';
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'Leads';
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'Opportunities';
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'Campaigns';
		$permission->guard_name = 'web';
		$permission->save();
		// end of Crm

		//start of Brand
		$permission             = new Permission;
		$permission->name       = 'BrandGuidelines';
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'ColorPalettes';
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'Logos';
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'Company';
		$permission->guard_name = 'web';
		$permission->save();
		//end of Brand

		//start of Admin
		$permission             = new Permission;
		$permission->name       = 'permissions';
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'users';
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'roles';
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'menus';
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'menudetails';
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'datamapper';
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'SocialPost Create';
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'Folder/File Delete Revoke';
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'Board';
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'Board create';
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'List create';
		$permission->guard_name = 'web';
		$permission->save();

		$permission             = new Permission;
		$permission->name       = 'Card create';
		$permission->guard_name = 'web';
		$permission->save();

		//end of Admin

		// $permission=new Permission;
		// $permission->name='Notification';
		// $permission->guard_name='web';
		// $permission->save();
	}
}
