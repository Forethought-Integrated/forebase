<?php

namespace App\Http\Controllers\newhelp;

use App\Http\Controllers\Controller;
use App\Model\ServiceAuthorization;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class BoardController extends Controller {
	private $ENV_URL;
	private $URL;
	private $URLList;
	private $URLCard;
	private $client;

	public function __construct() {
		$this->ENV_URL = config('customServices.services.helpdesk');
		$this->URL     = $this->ENV_URL.'boards';
		$this->URLList = $this->ENV_URL.'lists';
		$this->URLCard = $this->ENV_URL.'cards';
		$token         = ServiceAuthorization::select('authorizations_token')->where('authorizations_client', 'helpdesk')->first()->authorizations_token;
		$this->client  = new Client(['headers' => ['Authorization' => 'Bearer '.$token]]);
	}

	public function index() {
		$res            = $this->client->request('GET', $this->URL);
		$boardJson      = $res->getBody();
		$board          = json_decode($boardJson, true);
		$data['boards'] = $board;

		$ownerId;
		$i=0;
		foreach($data['boards'] as $board)
		{
			$ownerId[$i++]=$board['owner_id'];
		}

		$ownerMap;
		$ownerName=User::select('id','name')->whereIn('id',$ownerId)->get();
		foreach ($ownerName as $ownerName) {
			$ownerMap[$ownerName['id']]=$ownerName['name'];
			
		}

		foreach($data['boards'] as $key => $value)
		{
			$data['boards'][$key]['ownerName']=$ownerMap[$data['boards'][$key]['owner_id']];
		}
		
		// return $data;
		return view('bcl.board.listBoard')->with('data', $data);
	}

	public function create() {
		return view('bcl.board.createBoard');
	}

	public function store(request $request) {

		$response = $this->client->request('POST', $this->URL, [
				'form_params'        => [
					'owner_id'          => $request->user()->id,
					'board_name'        => $request->board_name,
					'board_description' => $request->board_description,
				],
			]);

		return redirect('/boards');
	}

	public function show($id) {
		$res       = $this->client->request('GET', $this->URL.'/'.$id);
		$boardJson = $res->getBody();
		$board     = json_decode($boardJson, true);
		// $data['board']  = User::find($id, ['id', 'name']);
		$user           = User::where('owner_id', '=', $id)->orWhere('name', $id)->firstOrFail();
		$data['boards'] = $board;

		return view('bcl.board.showBoard', ['data' => $data]);
	}

	public function boardIndex($id) {
		$res           = $this->client->request('GET', $this->URL.'/'.$id);
		$boardJson     = $res->getBody();
		$board         = json_decode($boardJson, true);
		$data['board'] = $board;
		$resList       = $this->client->request('GET', $this->ENV_URL.'board/list/'.$data['board']['board_id']);
		$listJson      = $resList->getBody();
		$list          = json_decode($listJson, true);
		if (empty($list)) {

			$data['list'] = NULL;
			$data['card'] = NULL;

			return view('bcl.board.showBoard', ['data' => $data]);
		} else {
			$data['list'] = $list;
			$resCard      = $this->client->request('GET', $this->ENV_URL.'board/list/card/'.$data['list']['0']['list_id']);
			$cardJson     = $resCard->getBody();
			$card         = json_decode($cardJson, true);
			$data['card'] = $card;

			return view('bcl.board.showBoard', ['data' => $data]);
		}

	}

	public function boardListCardIndex($id, $listid) {

		$resCard      = $this->client->request('GET', $this->ENV_URL.'board/list/card/'.$listid);
		$cardJson     = $resCard->getBody();
		$card         = json_decode($cardJson, true);
		$data['card'] = $card;
		return $data;

	}

	public function edit($id) {
		$res            = $this->client->request('GET', $this->URL.'/'.$id);
		$boardJson      = $res->getBody();
		$board          = json_decode($boardJson, true);
		$data['boards'] = $board;
		return view('bcl.board.editBoard', ['data' => $data]);
	}

	public function update(Request $request, $id) {
		$response = $this->client->request('PUT', $this->URL.'/'.$id, [
				'form_params'        => [
					'owner_id'          => $request->user()->id,
					'board_name'        => $request->board_name,
					'board_description' => $request->board_description,
				],
			]);
		return redirect('/boards');
	}

	public function destroy($id) {
		$res = $this->client->request('DELETE', $this->URL.'/'.$id);
		return redirect('/boards');
	}

}
