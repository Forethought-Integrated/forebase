<?php

namespace App\Http\Controllers\Team;

use App\Http\Controllers\Controller;
use App\Model\Team;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller {
	function get_singel_data($id) {
		$data = DB::table('team')->where('team_id', $id)->first();

		return $data;
	}

	public function index() {
		$team = Team::all();
		$user = User::with('team')->get();
		return view('Team.listTeam', compact('team'));
		// $user= User::find(1)->with('team');
		// $user= User::find(1)->team();
		// $user= User::find(1)->team()->get();
		// $user= User::find(1)->team;
		// $user= User::with('team')->find(1);
		// $team =Team::find(5);
		// dd($user);
		//return $user;

	}

	public function create() {
		return view('Team.createTeam');

	}

	public function store(Request $request) {

		$team = $request->all();
		Team::create($team);
		return redirect('/team');

	}

	public function show($id) {
		$team = $this->get_singel_data($id);

		return view('Team.showTeam', ['team' => $team]);

	}

	// /**
	//  * Show the form for editing the specified resource.
	//  *
	//  * @param  \App\DataMapper  $dataMapper
	//  * @return \Illuminate\Http\Response
	//  */
	public function edit($id) {
		$team = Team::find($id);

		//load form view
		return view('Team.editTeam', ['team' => $team]);

	}

	// /**
	//  * Update the specified resource in storage.
	//  *
	//  * @param  \Illuminate\Http\Request  $request
	//  * @param  \App\DataMapper  $dataMapper
	//  * @return \Illuminate\Http\Response
	//  */
	public function update(Request $request, $id) {

		$team = Team::findOrFail($id);
		$team->update($request->all());
		$team->save();
		return redirect('/team');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\DataMapper  $dataMapper
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {

		DB::table('team')->where('team_id', '=', $id)->delete();
		return redirect()->back();
	}

	public function view($id) {

		$data = Team::with('user')->find($id);
		// $userid=TeamUser::select('user_id')->where('teams_id',$id)->get()->pluck('user_id');
		// $data=User::whereIn('id',$userid)->get();
		// return $data;
		return view('Team.viewTeam', compact('data'));

	}

	public function delete($id) {
		return 'hello';
		DB::table('team_user')->where('user_id', '=', $id)->delete();
		return redirect()->back();
	}

	public function createuser() {
		return view('Team.addUser');
	}

	// public function useradd(Request $request) {
	// 	// return 'hi';
	// 	$user = User::create($request->all());
	// 	return redirect('/team-view');

	// 	// $user = User::create([
	// 	// 		'name'     => $request->input('name'),
	// 	// 		'email'    => $request->input('email'),
	// 	// 		'password' => $request->input('password'),
	// 	// 	]);
	// 	// return redirect('/team-view');

	// }
}
