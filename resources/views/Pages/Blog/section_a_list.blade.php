<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card overflow-hidden">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    All Blog List
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <a href="{{route('admin:cms:blog.create')}}" class="btn btn-primary btn-wave btn-sm">
                        <i class="ri-add-line me-1 align-middle"></i>Add Post
                    </a>
                    <div>
                        <input class="form-control form-control-sm" type="text" placeholder="Search Here"
                            aria-label=".form-control-sm example">
                    </div>
                    <div class="dropdown">
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a class="dropdown-item" href="javascript:void(0);">Posted Date</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Status</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Department</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Job Type</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Newest</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">Oldest</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th scope="row" class="ps-4"><input class="form-check-input" type="checkbox"
                                        id="checkboxNoLabeljob1" value="" aria-label="..."></th>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Updated at</th>
                                <th scope="col">Status</th>
                                <th scope="col">Published at</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td class="ps-4"><input class="form-check-input" type="checkbox"
                                            id="checkboxNoLabeljob22" value="" aria-label="..."></td>
                                    <td>
                                        <div class="d-flex">
                                            <span class="avatar avatar-md avatar-rounded bg-primary bg-opacity-10"><svg
                                                    xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                                    viewBox="0 0 24 24">
                                                    <path fill="var(--primary-color)"
                                                        d="M21.46777,2.3252A1.00007,1.00007,0,0,0,20.73,2H3.27a1.00039,1.00039,0,0,0-.99609,1.08887l1.52,17a.99944.99944,0,0,0,.72851.87451l7.2002,2A.99628.99628,0,0,0,11.99023,23a1.01206,1.01206,0,0,0,.26709-.03613l7.21973-2a1.00055,1.00055,0,0,0,.729-.875l1.52-17A1,1,0,0,0,21.46777,2.3252Zm-3.19238,16.896L11.99072,20.9624,5.72461,19.22168,4.36328,4H19.63672ZM7.81982,13h6.895l-.32714,3.271-2.56788.917L8.65625,16.05811a1.00017,1.00017,0,1,0-.67285,1.88378l3.5,1.25a1.00291,1.00291,0,0,0,.67285,0l3.5-1.25a1.00044,1.00044,0,0,0,.65869-.84228l.5-5A1.00064,1.00064,0,0,0,15.81982,11H8.72461L8.4248,8h7.895a1,1,0,0,0,0-2h-9a1.00064,1.00064,0,0,0-.99511,1.09961l.5,5A1.00012,1.00012,0,0,0,7.81982,13Z">
                                                    </path>
                                                </svg></span>
                                            <div class="ms-2">
                                                <p class="fw-semibold mb-0 d-flex align-items-center"><a
                                                        href="{{ route('admin:cms:blog.edit', $post) }}">
                                                        {{ $post->title }}</a></p>
                                                <p class="fs-12 text-muted mb-0">{{$post->category?->name ?? 'default'}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-sm p-1 me-1 bg-light avatar-rounded">
                                                <img src="{{ asset('assets/images/company-logos/8.png') }}"
                                                    alt="">
                                            </span>
                                            <a href="javascript:void(0);"
                                                class="fw-semibold mb-0">{{ $post->author?->name ?? 'Admin' }}</a>
                                        </div>
                                    </td>
                                    <td>
                                        {{ $post->created_at?->format('d-m-Y') }}
                                    </td>
                                    <td>{{ $post->updated_at?->format('d-m-Y') }}</td>
                                    <td>
                                        <span
                                            class="badge rounded-pill bg-primary-transparent {{ $post->active?->getColor() }}">
                                            {{ $post->active?->label() }}
                                        </span>
                                    </td>

                                    <td>
                                        <span class="badge bg-primary-transparent">
                                            <i class="bi bi-clock me-1"></i>
                                            {{ $post->published_at?->format('d-m-Y') }}
                                        </span>
                                    </td>
                                    <td>
                                        <a href="job-details.html"
                                            class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                            <i class="ri-eye-line"></i>
                                        </a>
                                        <a href="{{ route('admin:cms:blog.edit', $post) }}"
                                            class="btn btn-icon btn-sm btn-info-light btn-wave waves-effect waves-light">
                                            <i class="ri-edit-line"></i>
                                        </a>
                                        <a href="javascript:void(0);"
                                            class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light">
                                            <i class="ri-delete-bin-line"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer border-top-0">
                <div class="d-flex align-items-center flex-wrap overflow-auto">
                    <div class="mb-2 mb-sm-0">
                        Showing <b>1</b> to <b>10</b> of <b>10</b> entries <i
                            class="bi bi-arrow-right ms-2 fw-semibold"></i>
                    </div>
                    <div class="ms-auto">
                        <ul class="pagination mb-0 overflow-auto">
                            <li class="page-item disabled">
                                <a class="page-link">Previous</a>
                            </li>
                            <li class="page-item active" aria-current="page"><a class="page-link"
                                    href="javascript:void(0);">1</a></li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0);">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
