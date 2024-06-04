<div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12">
    <div class="card custom-card">
        <div class="card-header">
            <div class="card-title">
                Recent Blogs
            </div>
        </div>
        <div class="card-body">
            <ul class="list-group">
                @foreach ($posts as $post)
                    <li class="list-group-item">
                        <div class="d-flex gap-2 flex-wrap align-items-center">
                            <span class="avatar avatar-xl me-1">
                                <img src="{{ asset('assets/images/media/media-39.jpg') }}" class="img-fluid"
                                    alt="...">
                            </span>
                            <div class="flex-fill">
                                <a href="javascript:void(0);"
                                    class="fs-14 fw-semibold mb-0">{{ Str::limit($post->title, 20, ' ...') }}</a>
                                <p class="mb-1 popular-blog-content text-truncate">
                                    {{ Str::limit($post->excerpt, 10, ' ...') }}
                                </p>
                                <span class="text-muted fs-11">{{ $post->created_at?->format('d M Y H:i') }}</span>
                            </div>
                            <div>
                                <button aria-label="button" type="button"
                                    class="btn btn-icon btn-light btn-sm rtl-rotate"
                                    onclick="location.href='{{ route('admin:cms:blog.edit', $post) }}'"><i
                                        class="ri-arrow-right-s-line"></i></button>
                            </div>
                        </div>
                    </li>
                @endforeach
                <li class="list-group-item text-center">
                    <button type="button" class="btn btn-primary-light">Load more</button>
                </li>
            </ul>
        </div>
    </div>
</div>
