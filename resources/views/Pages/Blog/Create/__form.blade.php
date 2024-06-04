<div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">
    <div class="card custom-card">
        <div class="card-header">
            <div class="card-title">New Blog</div>
        </div>
        <div class="card-body">
            <form id="create-post" method="post" action="{{ route('admin:cms:blog.store') }}" accept="multipart/form-data">
                <div class="row gy-3">

                    @csrf
                    @honeypot
                    <div class="col-xl-12">
                        <label for="blog-title" class="form-label">Blog Title</label>
                        <input type="text" class="form-control" id="blog-title" placeholder="Blog Title">
                    </div>
                    <div class="col-xl-12">
                        <label for="blog-category" class="form-label">Blog Category</label>
                        <select class="form-control" data-trigger name="blog-category" id="blog-category">
                            <option value="">Select Category</option>
                            <option value="Choice 1">Nature</option>
                            <option value="Choice 2">Sports</option>
                            <option value="Choice 3">Food</option>
                            <option value="Choice 3">Travel</option>
                            <option value="Choice 3">Fashion</option>
                            <option value="Choice 3">Beauty</option>
                        </select>
                    </div>
                    <div class="col-xl-6">
                        <label for="blog-author" class="form-label">Blog Author</label>
                        <input type="text" class="form-control" id="blog-author" placeholder="Enter Name">
                    </div>
                    <div class="col-xl-6">
                        <label for="blog-author-email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="blog-author-email" placeholder="Enter Email">
                    </div>
                    <div class="col-xl-6">
                        <label for="publish-date" class="form-label">Publish Date</label>
                        <input type="text" class="form-control" id="publish-date" placeholder="Choose date">
                    </div>
                    <div class="col-xl-6">
                        <label for="publish-time" class="form-label">Publish Time</label>
                        <input type="text" class="form-control" id="publish-time" placeholder="Choose time">
                    </div>
                    <div class="col-xl-6">
                        <label for="product-status-add" class="form-label">Published Status</label>
                        <select class="form-control" data-trigger name="product-status-add" id="product-status-add">
                            <option value="">Select</option>
                            <option value="Published">Published</option>
                            <option value="Scheduled">Hold</option>
                        </select>
                    </div>
                    <div class="col-xl-6">
                        <label for="blog-tags" class="form-label">Blog Tags</label>
                        <select class="form-control" name="blog-tags" id="blog-tags" multiple>
                            <option value="Top Blog" selected>Top Blog</option>
                            <option value="Blogger">Blogger</option>
                            <option value="Adventure">Adventure</option>
                            <option value="Landscape" selected>Landscape</option>
                        </select>
                    </div>
                    <div class="col-xl-12">
                        <label class="form-label">Blog Content</label>
                        <div id="blog-content"></div>
                    </div>
                    <div class="col-xl-12 blog-images-container">
                        <label for="blog-author-email" class="form-label">Blog Images</label>
                        <input type="file" class="blog-images" name="filepond" multiple data-allow-reorder="true"
                            data-max-file-size="3MB" data-max-files="6">
                    </div>
                    <div class="col-xl-12">
                        <label class="form-label">Blog Type</label>
                        <div class="d-flex align-items-center">
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="blog-type" id="blog-free1" checked>
                                <label class="form-check-label" for="blog-free1">
                                    Free
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="blog-type" id="blog-paid1">
                                <label class="form-check-label" for="blog-paid1">
                                    Paid
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <div class="btn-list text-end">
                <button type="button" class="btn btn-sm btn-light">Save As Draft</button>
                <button type="button" class="btn btn-sm btn-primary"
                    onclick="document.getElementById('create-post').submit();">Post Blog</button>
            </div>
        </div>
    </div>
</div>
