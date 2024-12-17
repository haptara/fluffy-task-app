<x-app-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container-fluid flex-grow-1 container-p-y">


        <div class="app-kanban">

            <!-- Add new board -->
            {{-- <div class="row">
                <div class="col-12">
                    <form class="kanban-add-new-board">
                        <label class="kanban-add-board-btn" for="kanban-add-board-input">
                            <i class="bx bx-plus"></i>
                            <span class="align-middle">Add new</span>
                        </label>
                        <input type="text" class="form-control w-px-250 kanban-add-board-input mb-4 d-none"
                            placeholder="Add Board Title" id="kanban-add-board-input" required />
                        <div class="mb-4 kanban-add-board-input d-none">
                            <button class="btn btn-primary btn-sm me-3">Add</button>
                            <button type="button"
                                class="btn btn-label-secondary btn-sm kanban-add-board-cancel-btn">Cancel</button>
                        </div>
                    </form>
                </div>
            </div> --}}

            <!-- Kanban Wrapper -->
            {{-- TES FIKRI KASEP --}}
            <div class="kanban-wrapper ps fnz-kanban-wrapper">
                <div class="kanban-container fnz-kanban-container" id="kanban-container" style="width: 822px;">

                    @foreach ($boards->sortBy('position') as $b)
                        <div data-slug="{{ $b->slug }}" data-order="{{ $b->position }}" class="kanban-board"
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
                                @foreach ($b->tasks as $key => $t)
                                    <div class="kanban-item" data-eid="{{ $t->position }}">
                                        <div class="d-flex justify-content-between flex-wrap align-items-center mb-2">
                                            <div class="item-badges">
                                                <div class="badge bg-label-{{ $t->badge }}">{{ $t->badge_text }}
                                                </div>
                                                <div class="badge bg-label-{{ $t->badge_status }}">{{ $t->status }}
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
                                        </div><span class="kanban-text">{{ $t->title }}</span>
                                        <div class="d-flex justify-content-between align-items-center flex-wrap mt-2">
                                            <div class="d-flex">
                                                <span class="d-flex align-items-center me-2">
                                                    <i class="bx bx-paperclip me-1"></i>
                                                    <span class="attachments">4</span>
                                                </span>
                                                <span class="d-flex align-items-center ms-2">
                                                    <i class="bx bx-chat me-1"></i>
                                                    <span>{{ $t->comments }}</span>
                                                </span>
                                            </div>
                                            <div class="avatar-group d-flex align-items-center assigned-avatar">
                                                @if ($t->assignedUsers && $t->assignedUsers->isNotEmpty())
                                                    @foreach ($t->assignedUsers as $ass)
                                                        <div class="avatar avatar-xs" data-bs-toggle="tooltip"
                                                            data-bs-placement="top"
                                                            aria-label="{{ $ass->member->name }}"
                                                            data-bs-original-title="{{ $ass->member->name }}">
                                                            @if ($ass->member->image_path)
                                                                <img src="{{ $ass->member->image_path }}"
                                                                    alt="Avatar" class="rounded-circle pull-up">
                                                            @else
                                                                <span
                                                                    class="avatar-initial rounded-circle bg-label-primary">pi</span>
                                                            @endif
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <span>No assigned users</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </main>
                            <footer></footer>
                        </div>
                    @endforeach

                    <form class="kanban-add-new-board" id="add-new-board" autocomplete="off">
                        <label class="kanban-add-board-btn" for="kanban-add-board-input">
                            <i class="bx bx-plus"></i>
                            <span class="align-middle">Add new</span>
                        </label>
                        <input type="text" class="form-control w-px-250 kanban-add-board-input mb-4 d-none"
                            placeholder="Add Board Title" id="kanban-add-board-input">
                        <div class="mb-4 kanban-add-board-input d-none">
                            <button type="submit" class="btn btn-primary btn-sm me-3">Add</button>
                            <button type="button"
                                class="btn btn-label-secondary btn-sm kanban-add-board-cancel-btn">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- TES FIKRI KASEP --}}


            <!-- Edit Task/Task & Activities -->
            <div class="offcanvas offcanvas-end kanban-update-item-sidebar">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title">Edit Task</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body pt-0">
                    <div class="nav-align-top">
                        <ul class="nav nav-tabs mb-6 rounded-0">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-update">
                                    <i class="bx bx-edit bx-sm me-1_5"></i>
                                    <span class="align-middle">Edit</span>
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-activity">
                                    <i class="bx bx-bar-chart bx-sm me-1_5"></i>
                                    <span class="align-middle">Activity</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content p-0">
                        <!-- Update item/tasks -->
                        <div class="tab-pane fade show active" id="tab-update" role="tabpanel">
                            <form>
                                <div class="mb-8 mt-2">
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text" id="title" class="form-control"
                                        placeholder="Enter Title" />
                                </div>
                                <div class="mb-8">
                                    <label class="form-label" for="due-date">Due Date</label>
                                    <input type="text" id="due-date" class="form-control"
                                        placeholder="Enter Due Date" />
                                </div>
                                <div class="mb-8">
                                    <label class="form-label" for="label"> Label</label>
                                    <select class="select2 select2-label form-select" id="label">
                                        <option data-color="bg-label-success" value="UX">UX</option>
                                        <option data-color="bg-label-warning" value="Images">
                                            Images
                                        </option>
                                        <option data-color="bg-label-info" value="Info">Info</option>
                                        <option data-color="bg-label-danger" value="Code Review">
                                            Code Review
                                        </option>
                                        <option data-color="bg-label-secondary" value="App">
                                            App
                                        </option>
                                        <option data-color="bg-label-primary" value="Charts & Maps">
                                            Charts & Maps
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-6">
                                    <label class="form-label">Assigned</label>
                                    <div class="assigned d-flex flex-wrap"></div>
                                </div>
                                <div class="mb-6">
                                    <label class="form-label" for="attachments">Attachments</label>
                                    <div>
                                        <input type="file" class="form-control" id="attachments" />
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label class="form-label">Comment</label>
                                    <div class="comment-editor border-bottom-0"></div>
                                    <div class="d-flex justify-content-end">
                                        <div class="comment-toolbar">
                                            <span class="ql-formats me-0">
                                                <button class="ql-bold"></button>
                                                <button class="ql-italic"></button>
                                                <button class="ql-underline"></button>
                                                <button class="ql-link"></button>
                                                <button class="ql-image"></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex flex-wrap">
                                        <button type="button" class="btn btn-primary me-4"
                                            data-bs-dismiss="offcanvas">
                                            Update
                                        </button>
                                        <button type="button" class="btn btn-label-danger"
                                            data-bs-dismiss="offcanvas">
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Activities -->
                        <div class="tab-pane fade text-heading" id="tab-activity" role="tabpanel">
                            <div class="media mb-4 d-flex align-items-center">
                                <div class="avatar me-3 flex-shrink-0">
                                    <span class="avatar-initial bg-label-success rounded-circle">HJ</span>
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">
                                        <span>Jordan</span> Left the board.
                                    </p>
                                    <small class="text-muted">Today 11:00 AM</small>
                                </div>
                            </div>
                            <div class="media mb-4 d-flex align-items-center">
                                <div class="avatar me-3 flex-shrink-0">
                                    <img src="../../assets/img/avatars/6.png" alt="Avatar"
                                        class="rounded-circle" />
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">
                                        <span>Dianna</span> mentioned
                                        <span class="text-primary">@bruce</span> in
                                        a comment.
                                    </p>
                                    <small class="text-muted">Today 10:20 AM</small>
                                </div>
                            </div>
                            <div class="media mb-4 d-flex align-items-center">
                                <div class="avatar me-3 flex-shrink-0">
                                    <img src="../../assets/img/avatars/2.png" alt="Avatar"
                                        class="rounded-circle" />
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">
                                        <span>Martian</span> added moved
                                        Charts & Maps task to the done board.
                                    </p>
                                    <small class="text-muted">Today 10:00 AM</small>
                                </div>
                            </div>
                            <div class="media mb-4 d-flex align-items-center">
                                <div class="avatar me-3 flex-shrink-0">
                                    <img src="../../assets/img/avatars/1.png" alt="Avatar"
                                        class="rounded-circle" />
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">
                                        <span>Barry</span> Commented on App
                                        review task.
                                    </p>
                                    <small class="text-muted">Today 8:32 AM</small>
                                </div>
                            </div>
                            <div class="media mb-4 d-flex align-items-center">
                                <div class="avatar me-3 flex-shrink-0">
                                    <span class="avatar-initial bg-label-dark rounded-circle">BW</span>
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">
                                        <span>Bruce</span> was assigned
                                        task of code review.
                                    </p>
                                    <small class="text-muted">Today 8:30 PM</small>
                                </div>
                            </div>
                            <div class="media mb-4 d-flex align-items-center">
                                <div class="avatar me-3 flex-shrink-0">
                                    <span class="avatar-initial bg-label-danger rounded-circle">CK</span>
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">
                                        <span>Clark</span> assigned task UX
                                        Research to
                                        <span class="text-primary">@martian</span>
                                    </p>
                                    <small class="text-muted">Today 8:00 AM</small>
                                </div>
                            </div>
                            <div class="media mb-4 d-flex align-items-center">
                                <div class="avatar me-3 flex-shrink-0">
                                    <img src="../../assets/img/avatars/4.png" alt="Avatar"
                                        class="rounded-circle" />
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">
                                        <span>Ray</span> Added moved
                                        <span>Forms & Tables</span> task
                                        from in progress to done.
                                    </p>
                                    <small class="text-muted">Today 7:45 AM</small>
                                </div>
                            </div>
                            <div class="media mb-4 d-flex align-items-center">
                                <div class="avatar me-3 flex-shrink-0">
                                    <img src="../../assets/img/avatars/1.png" alt="Avatar"
                                        class="rounded-circle" />
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">
                                        <span>Barry</span> Complete all the
                                        tasks assigned to him.
                                    </p>
                                    <small class="text-muted">Today 7:17 AM</small>
                                </div>
                            </div>
                            <div class="media mb-4 d-flex align-items-center">
                                <div class="avatar me-3 flex-shrink-0">
                                    <span class="avatar-initial bg-label-success rounded-circle">HJ</span>
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">
                                        <span>Jordan</span> added task to
                                        update new images.
                                    </p>
                                    <small class="text-muted">Today 7:00 AM</small>
                                </div>
                            </div>
                            <div class="media mb-4 d-flex align-items-center">
                                <div class="avatar me-3 flex-shrink-0">
                                    <img src="../../assets/img/avatars/6.png" alt="Avatar"
                                        class="rounded-circle" />
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">
                                        <span>Dianna</span> moved task
                                        <span>FAQ UX</span> from in
                                        progress to done board.
                                    </p>
                                    <small class="text-muted">Today 7:00 AM</small>
                                </div>
                            </div>
                            <div class="media mb-4 d-flex align-items-center">
                                <div class="avatar me-3 flex-shrink-0">
                                    <span class="avatar-initial bg-label-danger rounded-circle">CK</span>
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">
                                        <span>Clark</span> added new board
                                        with name <span>Done</span>.
                                    </p>
                                    <small class="text-muted">Yesterday 3:00 PM</small>
                                </div>
                            </div>
                            <div class="media d-flex align-items-center">
                                <div class="avatar me-3 flex-shrink-0">
                                    <span class="avatar-initial bg-label-dark rounded-circle">BW</span>
                                </div>
                                <div class="media-body">
                                    <p class="mb-0">
                                        <span>Bruce</span> added new task
                                        in progress board.
                                    </p>
                                    <small class="text-muted">Yesterday 12:00 PM</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- End Edit Task/Task & Activities --}}

        </div>

    </div>


    @push('script')
        <script>
            $(document).ready(function() {

                // Ketika tombol Add new diklik
                $(".kanban-add-board-btn").on("click", function() {
                    // Menampilkan input dan tombol Add/Cancel
                    $(".kanban-add-board-input").removeClass("d-none");
                });

                // Ketika tombol Cancel diklik
                $(".kanban-add-board-cancel-btn").on("click", function() {
                    // Menyembunyikan input dan tombol Add/Cancel
                    $(".kanban-add-board-input").addClass("d-none");
                });

                $('#add-new-board').on('submit', function(e) {
                    e.preventDefault();

                    var boardTitle = $('#kanban-add-board-input').val().trim();
                    if (boardTitle) {
                        $.ajax({
                            url: '/store-board', // Endpoint untuk menambah board
                            method: 'POST',
                            data: {
                                title: boardTitle,
                                _token: '{{ csrf_token() }}' // CSRF token untuk keamanan
                            },
                            success: function(response) {
                                if (response.status === 'success') {

                                    // Menambahkan board baru secara langsung ke halaman
                                    var newBoard = `
                            <div data-slug="board-${response.board.slug}" data-order="${response.board.position}" class="kanban-board" style="width: 250px; margin-left: 12px; margin-right: 12px;">
                                <header class="kanban-board-header">
                                    <div class="kanban-title-board">${response.board.title}</div>
                                    <div class="dropdown">
                                        <i class="dropdown-toggle bx bx-dots-vertical-rounded cursor-pointer"
                                            id="board-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"></i>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="board-dropdown">
                                            <a class="dropdown-item delete-board" href="javascript:void(0)"> <i
                                                class="bx bx-trash bx-xs" me-1=""></i> <span class="align-middle">Delete</span></a>
                                            <a class="dropdown-item" href="javascript:void(0)"><i class="bx bx-rename bx-xs" me-1=""></i>
                                                <span class="align-middle">Rename</span></a>
                                            <a class="dropdown-item" href="javascript:void(0)"><i class="bx bx-archive bx-xs" me-1=""></i>
                                                <span class="align-middle">Archive</span></a>
                                        </div>
                                    </div>
                                    <button class="kanban-title-button btn btn-default">+ Add New Item</button>
                                </header>
                                <main class="kanban-drag"></main>
                                <footer></footer>
                            </div>`;

                                    // $('#kanban-container').append(newBoard);
                                    // $('#kanban-container').prepend(newBoard);
                                    $('#kanban-container').find('.kanban-add-new-board').before(
                                        newBoard);

                                    // Sembunyikan input dan reset nilai input
                                    $('#kanban-add-board-input').addClass('d-none');
                                    $('#kanban-add-board-input').val('');
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error(error);
                                toastr.error("Server Error");
                            }
                        });

                    } else {
                        toastr.warning("Title tidak boleh kosong!");
                    }
                });

                $(document).on('click', '.delete-board', function() {
                    alert('delete')
                });

                @if (session('success'))
                    toastr.success("{{ session('success') }}");
                @endif


                var kanbanWrapper = $(".fnz-kanban-wrapper");
                if (kanbanWrapper.length > 0) {
                    new PerfectScrollbar(kanbanWrapper[0]);
                }

                var kanbanContainer = $(".fnz-kanban-container");

            });
        </script>
    @endpush


</x-app-layout>
