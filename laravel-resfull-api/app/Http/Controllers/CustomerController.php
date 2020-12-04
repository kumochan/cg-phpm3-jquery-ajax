<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CustomerService;

class CustomerController extends Controller
{
    protected $customerService;

    public function __construct1()
    {

    }

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index()
    {
            //return csrf_token(); 
            // KFRLlnMMCdyv08LxeM9w01pvBvKcMZDPjS2doOQ5

        $customers = $this->customerService->getAll();
        return response()->json($customers, 200);
    }

    public function show($id)
    {
        $dataCustomer = $this->customerService->findById($id);

        return response()->json($dataCustomer['customers'], $dataCustomer['statusCode']);
    }

    public function store(Request $request)
    {
        try {
            $dataCustomer = $this->customerService->create($request->all());

            return response()->json($dataCustomer['customers'], $dataCustomer['statusCode']);
        } catch (\Exception $ex) {
            return "error";
        }
    }

    public function update(Request $request, $id)
    {
        $dataCustomer = $this->customerService->update($request->all(), $id);

        return response()->json($dataCustomer['customers'], $dataCustomer['statusCode']);
    }

    public function destroy($id)
    {
        $dataCustomer = $this->customerService->destroy($id);

        return response()->json($dataCustomer['message'], $dataCustomer['statusCode']);
    }
}
