<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display the user creation form.
     *
     * @return View
     */
    public function create(): View
    {
        return view(
            'users.create',
            ['room_id', session('room_id')]
        );
    }

    /**
     * Create user and then saves them down in the database.
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            $user_id = User::create([
                'nickname' => $request->input('nickname'),
                'chat_id' => session('room_id'),
            ])->id;

            $room = Room::find(session('room_id'));

            Room::whereId($room->id)
                ->update(['user_number' => (int) $room->user_number + 1]);
        } catch (QueryException $exception) {
            return $exception->errorInfo;
        }

        session([
            'user_id' => $user_id,
            'nickname' => $request->input('nickname'),
        ]);

        return redirect('/rooms/' . session('room_id'));
    }
}
