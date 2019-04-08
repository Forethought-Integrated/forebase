<?php

namespace App\Http\Controllers\newhelp;

use App\Http\Controllers\Controller;
use App\Model\ServiceAuthorization;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CardController extends Controller {
	private $ENV_URL;

	private $URL;

	private $client;

	public function __construct() {
		$this->ENV_URL = config('customServices.services.helpdesk');
		$this->URL     = $this->ENV_URL.'cards';
		$token         = ServiceAuthorization::select('authorizations_token')->where('authorizations_client', 'helpdesk')->first()->authorizations_token;
		$this->client  = new Client(['headers' => ['Authorization' => 'Bearer '.$token]]);

	}
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	public function index() {
		$res           = $this->client->request('GET', $this->URL);
		$cardJson      = $res->getBody();
		$card          = json_decode($cardJson, true);
		$data['cards'] = $card;
		return view('bcl.card.listCard')->with('data', $data);
	}

	public function CardCreate($listid) {
		$res          = $this->client->request('GET', $this->ENV_URL.'lists/'.$listid);
		$listJson     = $res->getBody();
		$list         = json_decode($listJson, true);
		$data['list'] = $list;
		return view('bcl.card.createCard')->with('data', $data);
	}

	public function Create() {
		return view('bcl.card.createCard');
	}

	public function store(Request $request) {
		$response = $this->client->request('POST', $this->URL, [
				'form_params'       => [
					'list_id'          => $request->list_id,
					'card_name'        => $request->card_name,
					'card_description' => $request->card_description,
					'card_order'       => $request->card_order,
					'card_members'     => $request->card_members,
					'card_archieved'   => $request->card_archieved,
					'card_comment'     => $request->card_comment,
				],
			]);
		return redirect("/board-detail/$request->board_id");
	}

	public function show($id) {
		$res           = $this->client->request('GET', $this->URL.'/'.$id);
		$cardJson      = $res->getBody();
		$card          = json_decode($cardJson, true);
		$data['cards'] = $card;
		return view('bcl.card.showCard', ['data' => $data]);
	}

	public function edit($id) {

		$res           = $this->client->request('GET', $this->URL.'/'.$id);
		$cardJson      = $res->getBody();
		$card          = json_decode($cardJson, true);
		$data['cards'] = $card;
		return view('bcl.card.editCard', ['data' => $data]);
	}

	public function update(Request $request, $id) {
		$response = $this->client->request('PUT', $this->URL.'/'.$id, [
				'form_params'       => [
					'card_name'        => $request->card_name,
					'card_description' => $request->card_description,
					'card_order'       => $request->card_order,
					'card_members'     => $request->card_members,
					'card_archieved'   => $request->card_archieved,
					'card_comment'     => $request->card_comment,
				],
			]);
		return redirect("/boards/$request->board_i");
	}

	public function destroy($id) {
		$res = $this->client->request('DELETE', $this->URL.'/'.$id);
		return redirect()->back();
	}

}
