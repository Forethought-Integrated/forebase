<?php

use App\Model\SpatiePermission\RoleHasPermission;
use Illuminate\Database\Seeder;

class RoleHasPermissiontableseeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        RoleHasPermission::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

		$role                = new RoleHasPermission();
		$role->permission_id = '1';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '2';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '3';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '4';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '5';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '6';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '7';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '8';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '9';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '10';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '11';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '12';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '13';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '14';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '15';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '16';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '17';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '18';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '19';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '20';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '21';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '22';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '23';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '24';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '25';
		$role->role_id       = '1';
		$role->save();

		$role                = new RoleHasPermission();
		$role->permission_id = '26';
		$role->role_id       = '1';
		$role->Save();

		$role                = new RoleHasPermission();
		$role->permission_id = '27';
		$role->role_id       = '1';
		$role->Save();

		$role                = new RoleHasPermission();
		$role->permission_id = '28';
		$role->role_id       = '1';
		$role->Save();

		$role                = new RoleHasPermission();
		$role->permission_id = '29';
		$role->role_id       = '1';
		$role->Save();

		// File Manager Role

		$role                = new RoleHasPermission();
		$role->permission_id = '3';
		$role->role_id       = '2';
		$role->save();

		// \Social Role

		$role                = new RoleHasPermission();
		$role->permission_id = '2';
		$role->role_id       = '3';
		$role->save();

	}
}
