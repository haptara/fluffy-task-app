<div>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container-fluid flex-grow-1 container-p-y">


        <div class="app-kanban">

            <div class="kanban-wrapper ps fnz-kanban-wrapper">
                <div class="kanban-container fnz-kanban-container" id="kanban-container" style="width: 822px;">
                    {{-- START --}}
                    @foreach ($board as $b)
                        <div data-id="board-in-progress" data-order="{{ $b->position }}" class="kanban-board"
                            style="width: 250px; margin-left: 12px; margin-right: 12px;">
                            <header class="kanban-board-header">
                                <div class="kanban-title-board">{{ $b->title }}</div>
                                <div class="dropdown"><i
                                        class="dropdown-toggle bx bx-dots-vertical-rounded cursor-pointer"
                                        id="board-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"></i>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="board-dropdown"><a
                                            class="dropdown-item delete-board" href="javascript:void(0)"> <i
                                                class="bx bx-trash bx-xs" me-1=""></i> <span
                                                class="align-middle">Delete</span></a><a class="dropdown-item"
                                            href="javascript:void(0)"><i class="bx bx-rename bx-xs" me-1=""></i>
                                            <span class="align-middle">Rename</span></a><a class="dropdown-item"
                                            href="javascript:void(0)"><i class="bx bx-archive bx-xs" me-1=""></i>
                                            <span class="align-middle">Archive</span></a></div>
                                </div><button class="kanban-title-button btn btn-default">+ Add New Item</button>
                            </header>
                            <main class="kanban-drag">

                                @foreach ($b->tasks as $key => $task)
                                    <div class="kanban-item" data-eid="{{ $task->position }}">
                                        <div class="d-flex justify-content-between flex-wrap align-items-center mb-2">
                                            <div class="item-badges">
                                                <div class="badge bg-label-{{ $task->badge }}"> {{ $task->badge_text }}
                                                </div>
                                            </div>
                                            <div class="dropdown kanban-tasks-item-dropdown"><i
                                                    class="dropdown-toggle bx bx-dots-vertical-rounded"
                                                    id="kanban-tasks-item-dropdown" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false"></i>
                                                <div class="dropdown-menu dropdown-menu-end"
                                                    aria-labelledby="kanban-tasks-item-dropdown"><a
                                                        class="dropdown-item" href="javascript:void(0)">Copy task
                                                        link</a><a class="dropdown-item"
                                                        href="javascript:void(0)">Duplicate task</a><a
                                                        class="dropdown-item delete-task"
                                                        href="javascript:void(0)">Delete</a>
                                                </div>
                                            </div>
                                        </div><span class="kanban-text">{{ $task->title }}</span>
                                        <div class="d-flex justify-content-between align-items-center flex-wrap mt-2">
                                            <div class="d-flex">
                                                <span class="d-flex align-items-center me-2">
                                                    <i class="bx bx-paperclip me-1"></i>
                                                    <span class="attachments">4</span>
                                                </span>
                                                <span class="d-flex align-items-center ms-2">
                                                    <i class="bx bx-chat me-1"></i>
                                                    <span>{{ $task->comments }}</span>
                                                </span>
                                            </div>
                                            <div class="avatar-group d-flex align-items-center assigned-avatar">
                                                <div class="avatar avatar-xs" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" aria-label="Bruce"
                                                    data-bs-original-title="Bruce">
                                                    <img src="../../assets/img/avatars/12.png" alt="Avatar"
                                                        class="rounded-circle  pull-up">
                                                </div>
                                                <div class="avatar avatar-xs" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" aria-label="Clark"
                                                    data-bs-original-title="Clark"><img
                                                        src="../../assets/img/avatars/5.png" alt="Avatar"
                                                        class="rounded-circle  pull-up"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </main>
                            <footer></footer>
                        </div>
                    @endforeach
                    {{-- END --}}

                    {{-- ADD FORM --}}
                    <form class="kanban-add-new-board" wire:submit.prevent="addBoard">
                        <label class="kanban-add-board-btn" for="kanban-add-board-input"
                            wire:click="toggleAddFormBoard">
                            <i class="bx bx-plus"></i>
                            <span class="align-middle">Add new</span>
                        </label>
                        <input type="text" wire:model="newBoardTitle"
                            class="form-control w-px-250 kanban-add-board-input mb-4" placeholder="Add Board Title"
                            id="kanban-add-board-input" required="" x-bind:class="{ 'd-none': !@entangle('showAddForm') }">
                        @error('newBoardTitle')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="mb-4 kanban-add-board-input" x-bind:class="{ 'd-none': !@entangle('showAddForm') }">
                            <button type="submit" class="btn btn-primary btn-sm me-3">Add</button>
                            <button type="button" class="btn btn-label-secondary btn-sm kanban-add-board-cancel-btn"
                                wire:click="cancelAddForm">Cancel</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>

    </div>

    {{-- @dd($board) --}}
</div>
