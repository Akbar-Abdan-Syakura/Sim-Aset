<?php

namespace App\Http\Controllers;

use App\Exceptions\EmptyDataException;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function index()
    {
        $data = User::all()->except(Auth::id());
        $data = User::paginate(5);
        return view('v_user.index', compact('data'));
    }
    public function addform()
    {
        return view('v_user.addform');
    }

    public function store(StoreUserRequest $request): RedirectResponse
    {
        $requestedData = $request->validated();
        $requestedData["password"] = Hash::make($requestedData["password"]);
        try {
            User::create($requestedData);

            $response = [
                "success" => true,
            ];
        } catch (Exception $e) {
            $response = [
                "success" => false,
                "message" => $e->getMessage()
            ];
        }
        if ($this->isError($response))
            return $this->getErrorResponse();

        return redirect()->back()->with("success", "Add new data user successfully");
    }

    public function edit(int $id): Response
    {
        $user = User::find($id);
        return response()->view('v_user.editform', [
            "users" => $user
        ]);
    }

    public function update(UpdateUserRequest $request, int $id)
    {
        $requestedData = $request->validated();

        try {
            $user = User::find($id);
            if (!$user) throw new EmptyDataException();

            User::where("id", $id)->update($requestedData);

            $response = [
                "success" => true,
            ];
        } catch (Exception $e) {
            $response = [
                "success" => false,
                "message" => $e->getMessage()
            ];
        }

        if ($this->isError($response))
            return $this->getErrorResponse();

        return redirect()->route("user")->with("success", "Update data user successfully");
    }
}
