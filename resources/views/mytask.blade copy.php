<x-app-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container-fluid flex-grow-1 container-p-y">


        <div class="app-kanban">

            <!-- Add new board -->
            <div class="row">
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
            </div>

            <!-- Kanban Wrapper -->
            <div class="kanban-wrapper"></div>


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
                                        <button type="button" class="btn btn-primary me-4" data-bs-dismiss="offcanvas">
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

            {{-- TES FIKRI KASEP --}}
            <div class="kanban-wrapper ps">
                <div class="kanban-container" style="width: 822px;">
                    <div data-id="board-in-progress" data-order="1" class="kanban-board"
                        style="width: 250px; margin-left: 12px; margin-right: 12px;">
                        <header class="kanban-board-header">
                            <div class="kanban-title-board">In Progress</div>
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
                            <div class="kanban-item" data-eid="in-progress-1" data-comments="12"
                                data-badge-text="UX" data-badge="success" data-due-date="5 April"
                                data-attachments="4" data-assigned="12.png,5.png" data-members="Bruce,Clark">
                                <div class="d-flex justify-content-between flex-wrap align-items-center mb-2">
                                    <div class="item-badges">
                                        <div class="badge bg-label-success"> UX</div>
                                    </div>
                                    <div class="dropdown kanban-tasks-item-dropdown"><i
                                            class="dropdown-toggle bx bx-dots-vertical-rounded"
                                            id="kanban-tasks-item-dropdown" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"></i>
                                        <div class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="kanban-tasks-item-dropdown"><a class="dropdown-item"
                                                href="javascript:void(0)">Copy task link</a><a class="dropdown-item"
                                                href="javascript:void(0)">Duplicate task</a><a
                                                class="dropdown-item delete-task" href="javascript:void(0)">Delete</a>
                                        </div>
                                    </div>
                                </div><span class="kanban-text">Research FAQ page UX</span>
                                <div class="d-flex justify-content-between align-items-center flex-wrap mt-2">
                                    <div class="d-flex"> <span class="d-flex align-items-center me-2"><i
                                                class="bx bx-paperclip me-1"></i><span
                                                class="attachments">4</span></span> <span
                                            class="d-flex align-items-center ms-2"><i
                                                class="bx bx-chat me-1"></i><span> 12 </span></span></div>
                                    <div class="avatar-group d-flex align-items-center assigned-avatar">
                                        <div class="avatar avatar-xs" data-bs-toggle="tooltip"
                                            data-bs-placement="top" aria-label="Bruce"
                                            data-bs-original-title="Bruce"><img src="../../assets/img/avatars/12.png"
                                                alt="Avatar" class="rounded-circle  pull-up"></div>
                                        <div class="avatar avatar-xs" data-bs-toggle="tooltip"
                                            data-bs-placement="top" aria-label="Clark"
                                            data-bs-original-title="Clark"><img src="../../assets/img/avatars/5.png"
                                                alt="Avatar" class="rounded-circle  pull-up"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="kanban-item" data-eid="in-progress-2" data-comments="8"
                                data-badge-text="Code Review" data-badge="danger" data-attachments="2"
                                data-due-date="10 April" data-assigned="3.png,8.png" data-members="Helena,Iris">
                                <div class="d-flex justify-content-between flex-wrap align-items-center mb-2">
                                    <div class="item-badges">
                                        <div class="badge bg-label-danger"> Code Review</div>
                                    </div>
                                    <div class="dropdown kanban-tasks-item-dropdown"><i
                                            class="dropdown-toggle bx bx-dots-vertical-rounded"
                                            id="kanban-tasks-item-dropdown" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"></i>
                                        <div class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="kanban-tasks-item-dropdown"><a class="dropdown-item"
                                                href="javascript:void(0)">Copy task link</a><a class="dropdown-item"
                                                href="javascript:void(0)">Duplicate task</a><a
                                                class="dropdown-item delete-task" href="javascript:void(0)">Delete</a>
                                        </div>
                                    </div>
                                </div><span class="kanban-text">Review Javascript code</span>
                                <div class="d-flex justify-content-between align-items-center flex-wrap mt-2">
                                    <div class="d-flex"> <span class="d-flex align-items-center me-2"><i
                                                class="bx bx-paperclip me-1"></i><span
                                                class="attachments">2</span></span> <span
                                            class="d-flex align-items-center ms-2"><i
                                                class="bx bx-chat me-1"></i><span> 8 </span></span></div>
                                    <div class="avatar-group d-flex align-items-center assigned-avatar">
                                        <div class="avatar avatar-xs" data-bs-toggle="tooltip"
                                            data-bs-placement="top" aria-label="Helena"
                                            data-bs-original-title="Helena"><img src="../../assets/img/avatars/3.png"
                                                alt="Avatar" class="rounded-circle  pull-up"></div>
                                        <div class="avatar avatar-xs" data-bs-toggle="tooltip"
                                            data-bs-placement="top" aria-label="Iris" data-bs-original-title="Iris">
                                            <img src="../../assets/img/avatars/8.png" alt="Avatar"
                                                class="rounded-circle  pull-up"></div>
                                    </div>
                                </div>
                            </div>
                        </main>
                        <footer></footer>
                    </div>
                    <div data-id="board-in-review" data-order="2" class="kanban-board"
                        style="width: 250px; margin-left: 12px; margin-right: 12px;">
                        <header class="kanban-board-header">
                            <div class="kanban-title-board">In Review</div>
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
                            <div class="kanban-item" data-eid="in-review-1" data-comments="17"
                                data-badge-text="Dashboard" data-badge="info" data-due-date="8 April"
                                data-attachments="8" data-assigned="11.png,6.png" data-members="Laurel,Harley">
                                <div class="d-flex justify-content-between flex-wrap align-items-center mb-2">
                                    <div class="item-badges">
                                        <div class="badge bg-label-info"> Dashboard</div>
                                    </div>
                                    <div class="dropdown kanban-tasks-item-dropdown"><i
                                            class="dropdown-toggle bx bx-dots-vertical-rounded"
                                            id="kanban-tasks-item-dropdown" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"></i>
                                        <div class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="kanban-tasks-item-dropdown"><a class="dropdown-item"
                                                href="javascript:void(0)">Copy task link</a><a class="dropdown-item"
                                                href="javascript:void(0)">Duplicate task</a><a
                                                class="dropdown-item delete-task" href="javascript:void(0)">Delete</a>
                                        </div>
                                    </div>
                                </div><span class="kanban-text">Review completed Apps</span>
                                <div class="d-flex justify-content-between align-items-center flex-wrap mt-2">
                                    <div class="d-flex"> <span class="d-flex align-items-center me-2"><i
                                                class="bx bx-paperclip me-1"></i><span
                                                class="attachments">8</span></span> <span
                                            class="d-flex align-items-center ms-2"><i
                                                class="bx bx-chat me-1"></i><span> 17 </span></span></div>
                                    <div class="avatar-group d-flex align-items-center assigned-avatar">
                                        <div class="avatar avatar-xs" data-bs-toggle="tooltip"
                                            data-bs-placement="top" aria-label="Laurel"
                                            data-bs-original-title="Laurel"><img src="../../assets/img/avatars/11.png"
                                                alt="Avatar" class="rounded-circle  pull-up"></div>
                                        <div class="avatar avatar-xs" data-bs-toggle="tooltip"
                                            data-bs-placement="top" aria-label="Harley"
                                            data-bs-original-title="Harley"><img src="../../assets/img/avatars/6.png"
                                                alt="Avatar" class="rounded-circle  pull-up"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="kanban-item" data-eid="in-review-2" data-comments="18"
                                data-badge-text="Images" data-image="21.jpg" data-badge="warning"
                                data-due-date="2 April" data-attachments="10"
                                data-assigned="9.png,2.png,3.png,12.png" data-members="Jordan,Dianna,Vinnie,Lasa">
                                <div class="d-flex justify-content-between flex-wrap align-items-center mb-2">
                                    <div class="item-badges">
                                        <div class="badge bg-label-warning"> Images</div>
                                    </div>
                                    <div class="dropdown kanban-tasks-item-dropdown"><i
                                            class="dropdown-toggle bx bx-dots-vertical-rounded"
                                            id="kanban-tasks-item-dropdown" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"></i>
                                        <div class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="kanban-tasks-item-dropdown"><a class="dropdown-item"
                                                href="javascript:void(0)">Copy task link</a><a class="dropdown-item"
                                                href="javascript:void(0)">Duplicate task</a><a
                                                class="dropdown-item delete-task" href="javascript:void(0)">Delete</a>
                                        </div>
                                    </div>
                                </div><img class="img-fluid rounded mb-2" src="../../assets/img/elements/21.jpg"><span
                                    class="kanban-text">Find new images for pages</span>
                                <div class="d-flex justify-content-between align-items-center flex-wrap mt-2">
                                    <div class="d-flex"> <span class="d-flex align-items-center me-2"><i
                                                class="bx bx-paperclip me-1"></i><span
                                                class="attachments">10</span></span> <span
                                            class="d-flex align-items-center ms-2"><i
                                                class="bx bx-chat me-1"></i><span> 18 </span></span></div>
                                    <div class="avatar-group d-flex align-items-center assigned-avatar">
                                        <div class="avatar avatar-xs" data-bs-toggle="tooltip"
                                            data-bs-placement="top" aria-label="Jordan"
                                            data-bs-original-title="Jordan"><img src="../../assets/img/avatars/9.png"
                                                alt="Avatar" class="rounded-circle  pull-up"></div>
                                        <div class="avatar avatar-xs" data-bs-toggle="tooltip"
                                            data-bs-placement="top" aria-label="Dianna"
                                            data-bs-original-title="Dianna"><img src="../../assets/img/avatars/2.png"
                                                alt="Avatar" class="rounded-circle  pull-up"></div>
                                        <div class="avatar avatar-xs" data-bs-toggle="tooltip"
                                            data-bs-placement="top" aria-label="Vinnie"
                                            data-bs-original-title="Vinnie"><img src="../../assets/img/avatars/3.png"
                                                alt="Avatar" class="rounded-circle  pull-up"></div>
                                        <div class="avatar avatar-xs" data-bs-toggle="tooltip"
                                            data-bs-placement="top" aria-label="Lasa" data-bs-original-title="Lasa">
                                            <img src="../../assets/img/avatars/12.png" alt="Avatar"
                                                class="rounded-circle  pull-up"></div>
                                    </div>
                                </div>
                            </div>
                        </main>
                        <footer></footer>
                    </div>
                    <div data-id="board-done" data-order="3" class="kanban-board"
                        style="width: 250px; margin-left: 12px; margin-right: 12px;">
                        <header class="kanban-board-header">
                            <div class="kanban-title-board">Done</div>
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
                            <div class="kanban-item" data-eid="done-1" data-comments="4" data-badge-text="App"
                                data-badge="secondary" data-due-date="7 April" data-attachments="1"
                                data-assigned="2.png,9.png,10.png" data-members="Kara,Nyssa,Darcey">
                                <div class="d-flex justify-content-between flex-wrap align-items-center mb-2">
                                    <div class="item-badges">
                                        <div class="badge bg-label-secondary"> App</div>
                                    </div>
                                    <div class="dropdown kanban-tasks-item-dropdown"><i
                                            class="dropdown-toggle bx bx-dots-vertical-rounded"
                                            id="kanban-tasks-item-dropdown" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"></i>
                                        <div class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="kanban-tasks-item-dropdown"><a class="dropdown-item"
                                                href="javascript:void(0)">Copy task link</a><a class="dropdown-item"
                                                href="javascript:void(0)">Duplicate task</a><a
                                                class="dropdown-item delete-task" href="javascript:void(0)">Delete</a>
                                        </div>
                                    </div>
                                </div><span class="kanban-text">Forms &amp; Tables section</span>
                                <div class="d-flex justify-content-between align-items-center flex-wrap mt-2">
                                    <div class="d-flex"> <span class="d-flex align-items-center me-2"><i
                                                class="bx bx-paperclip me-1"></i><span
                                                class="attachments">1</span></span> <span
                                            class="d-flex align-items-center ms-2"><i
                                                class="bx bx-chat me-1"></i><span> 4 </span></span></div>
                                    <div class="avatar-group d-flex align-items-center assigned-avatar">
                                        <div class="avatar avatar-xs" data-bs-toggle="tooltip"
                                            data-bs-placement="top" aria-label="Kara" data-bs-original-title="Kara">
                                            <img src="../../assets/img/avatars/2.png" alt="Avatar"
                                                class="rounded-circle  pull-up"></div>
                                        <div class="avatar avatar-xs" data-bs-toggle="tooltip"
                                            data-bs-placement="top" aria-label="Nyssa"
                                            data-bs-original-title="Nyssa"><img src="../../assets/img/avatars/9.png"
                                                alt="Avatar" class="rounded-circle  pull-up"></div>
                                        <div class="avatar avatar-xs" data-bs-toggle="tooltip"
                                            data-bs-placement="top" aria-label="Darcey"
                                            data-bs-original-title="Darcey"><img src="../../assets/img/avatars/10.png"
                                                alt="Avatar" class="rounded-circle  pull-up"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="kanban-item" data-eid="done-2" data-comments="21"
                                data-badge-text="Charts &amp; Maps" data-badge="primary" data-due-date="7 April"
                                data-attachments="6" data-assigned="1.png" data-members="Sarah">
                                <div class="d-flex justify-content-between flex-wrap align-items-center mb-2">
                                    <div class="item-badges">
                                        <div class="badge bg-label-primary"> Charts &amp; Maps</div>
                                    </div>
                                    <div class="dropdown kanban-tasks-item-dropdown"><i
                                            class="dropdown-toggle bx bx-dots-vertical-rounded"
                                            id="kanban-tasks-item-dropdown" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false"></i>
                                        <div class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="kanban-tasks-item-dropdown"><a class="dropdown-item"
                                                href="javascript:void(0)">Copy task link</a><a class="dropdown-item"
                                                href="javascript:void(0)">Duplicate task</a><a
                                                class="dropdown-item delete-task" href="javascript:void(0)">Delete</a>
                                        </div>
                                    </div>
                                </div><span class="kanban-text">Completed Charts &amp; Maps</span>
                                <div class="d-flex justify-content-between align-items-center flex-wrap mt-2">
                                    <div class="d-flex"> <span class="d-flex align-items-center me-2"><i
                                                class="bx bx-paperclip me-1"></i><span
                                                class="attachments">6</span></span> <span
                                            class="d-flex align-items-center ms-2"><i
                                                class="bx bx-chat me-1"></i><span> 21 </span></span></div>
                                    <div class="avatar-group d-flex align-items-center assigned-avatar">
                                        <div class="avatar avatar-xs" data-bs-toggle="tooltip"
                                            data-bs-placement="top" aria-label="Sarah"
                                            data-bs-original-title="Sarah"><img src="../../assets/img/avatars/1.png"
                                                alt="Avatar" class="rounded-circle  pull-up"></div>
                                    </div>
                                </div>
                            </div>
                        </main>
                        <footer></footer>
                    </div>
                    <form class="kanban-add-new-board">
                        <label class="kanban-add-board-btn" for="kanban-add-board-input">
                            <i class="bx bx-plus"></i>
                            <span class="align-middle">Add new</span>
                        </label>
                        <input type="text" class="form-control w-px-250 kanban-add-board-input mb-4 d-none"
                            placeholder="Add Board Title" id="kanban-add-board-input" required="">
                        <div class="mb-4 kanban-add-board-input d-none">
                            <button class="btn btn-primary btn-sm me-3">Add</button>
                            <button type="button"
                                class="btn btn-label-secondary btn-sm kanban-add-board-cancel-btn">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- TES FIKRI KASEP --}}

        </div>

    </div>
</x-app-layout>
