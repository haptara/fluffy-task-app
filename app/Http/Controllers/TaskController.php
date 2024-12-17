<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function dashboard()
    {
        $data   = [
            'title' => 'Dashboard'
        ];
        return view('dashboard', $data);
    }

    public function mytask()
    {
        $boards   = Board::with(['tasks.assignedUsers.member'])->orderBy('position')->get();

        // return response()->json($boards, 200, [], JSON_UNESCAPED_UNICODE);
        $data   = [
            'title'     => 'My Task',
            'boards'    => $boards
        ];
        return view('mytask', $data);
    }
}
