<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\session\Store;

class CustomerController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Store $session) {
		if (!$session->has('customers')) {
			$customers = [
				'0' => [
					'id' => 1,
					'name' => 'Hello',
					'sdt' => '0966853798',
					'email' => 'customer1@gmail.com',
				],
				'1' => [
					'id' => 2,
					'name' => 'Bye',
					'sdt' => '0966853798',
					'email' => 'customer2@gmail.com',
				],
				'2' => [
					'id' => 3,
					'name' => 'XXX',
					'sdt' => '0966853798',
					'email' => 'customer3@gmail.com',
				],
			];
			$session->put('customers', $customers);
		} else {
			$customers = $session->get('customers');
		}
		return view('modules.customer.index', compact('customers'));
	}
	public function add(Request $request, Store $session) {
		return view('modules.customer.add');
	}
	public function store(Request $request, Store $session) {
		$customers = $session->get('customers');
		$id = count($customers);
		$hoTen = $request->hoTen;
		$sdt = $request->sdt;
		$email = $request->email;
		array_push($customers, ['id' => $id + 1, 'name' => $hoTen, 'sdt' => $sdt, 'email' => $email]);
		session(['customers' => $customers]);
		return view('modules.customer.index', ['customers' => $customers]);
	}

	public function show(Request $request, Store $session, $id) {
		$customers = $session->get('customers');
		$customer = $customers[$id - 1];
		return view('modules.customer.show', compact('customer'));
	}

	public function update(Request $request, Store $session, $id) {
		$customers = $session->get('customers');
		$id = $request->id;
		$hoTen = $request->hoTen;
		$sdt = $request->sdt;
		$email = $request->email;
		$customers[$id] = [
			'id' => $id + 1,
			'name' => $hoTen,
			'sdt' => $sdt,
			'email' => $email,
		];
		$session->put('customers', $customers);
		return view('modules.customer.index', compact('customers'));
	}
	public function edit(Request $request, $id, Store $session) {
		$customers = $session->get('customers');
		$customer = $customers[$id - 1];
		return view('modules.customer.edit', compact('customer'));
	}
	public function delete(Store $session, $id) {
		$customers = $session->get('customers');
		unset($customers[$id - 1]);
		$session->put('customers', $customers);
		return view('modules.customer.index', compact('customers'));
	}
}