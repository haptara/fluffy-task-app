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

    public function store_board(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        // Menyimpan board baru
        $board = Board::create([
            'title'         => $request->title,
            'position'      => Board::max('position') + 1,
            'created_by'    => auth()->user()->id // Tentukan posisi board (misalnya urut berdasarkan posisi terakhir)
        ]);

        // Mengembalikan response dengan data board yang baru
        return response()->json([
            'status' => 'success',
            'board' => $board
        ]);
    }
}
