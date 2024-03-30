<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\View\View;

class RoomController extends Controller
{
    /**
     * Display the room creation form.
     *
     * @return View
     */
    public function create(): View
    {
        return view('rooms.create');
    }

    /**
     * Create room & user and then saves them down in the database.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $nickname = $request->input('nickname');

        if (empty($nickname)) {
            $nickname = 'DefaultNickname';
        }

        try {
            $room_id = Room::create([
                'user_number' => 1,  // Must be 1, because of "if (users_number < 1) then delete" statement.
            ])->id;
        } catch (QueryException $exception) {
            return $exception->errorInfo;
        }

        try {
            $user_id = User::create([
                'nickname' => $nickname,
                'chat_id' => $room_id,
            ])->id;
        } catch (QueryException $exception) {
            return $exception->errorInfo;
        }

        // Store data in session.
        session([
            'nickname' => $nickname,
            'user_id' => $user_id,
            'room_id' => $room_id,
        ]);

        return redirect('/rooms/' . $room_id);
    }

    /**
     * Check if session(user_id) is not empty and redirect to correct route or view.
     *
     * @param Int $room_id
     * @return View|RedirectResponse
     */
    public function show(int $room_id): View|RedirectResponse
    {
        if (empty(session('user_id')) || session('user_id') === null) {
            session([
                'room_id' => $room_id,
            ]);

            return redirect('/users/create');
        }

        return view('rooms.show', [
            'id' => $room_id,
            'nickname' => session('nickname')
        ]);
    }
}
