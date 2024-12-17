<?php

namespace App\Http\Livewire;

use App\Models\Board as ModelsBoard;
use App\Models\Task;
use Livewire\Component;

class Board extends Component
{
    public $showAddFormBoard = false; // Properti untuk menampilkan atau menyembunyikan form input

    public $boards;
    public $newBoardTitle;    // Input untuk board baru
    public $newItemTitle;     // Input untuk item baru
    public $selectedBoardId;  // ID board yang dipilih untuk menambahkan item

    public function toggleAddFormBoard()
    {
        $this->showAddFormBoard = !$this->showAddFormBoard;
    }

    public function cancelAddForm()
    {
        $this->showAddFormBoard = false;
    }


    public function mount()
    {
        $this->loadBoards();
    }

    public function loadBoards()
    {
        $this->boards = ModelsBoard::with('tasks')->orderBy('position')->get();
    }

    public function addBoard()
    {
        $this->validate([
            'newBoardTitle' => 'required|string|max:255',
        ]);

        $position = ModelsBoard::max('position') + 1;

        ModelsBoard::create([
            'title' => $this->newBoardTitle,
            'position' => $position,
        ]);

        $this->newBoardTitle = '';
        $this->loadBoards();
        $this->showAddFormBoard;
    }

    public function addItem($boardId)
    {
        $this->validate([
            'newItemTitle' => 'required|string|max:255',
        ]);

        $position = Task::where('board_id', $boardId)->max('position') + 1;

        Task::create([
            'board_id' => $boardId,
            'title' => $this->newItemTitle,
            'position' => $position,
        ]);

        $this->newItemTitle = '';
        $this->loadBoards();
    }

    public function render()
    {
        $board  = ModelsBoard::with(['tasks'])->get();
        $data   = [
            'title'     => 'Board',
            'board'     => $board,
        ];
        return view('livewire.board', $data);
    }

    // public function render()
    // {
    //     $board  = ModelsBoard::with(['tasks'])->get();
    //     $data   = [
    //         'title'     => 'Board',
    //         'board'     => $board,
    //     ];
    //     return view('livewire.board', $data);
    // }
}
