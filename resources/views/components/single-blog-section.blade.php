@props(['blog'])
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto text-center">
            <img
                 src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
                 class="card-img-top"
                 alt="..." />
            <h3 class="my-3">{{ $blog->title }}</h3>
            <div>
                <div>Author - <a href="/?blog={{ $blog->author->username }}#blogs">{{ $blog->author->name }}</a></div>
                <div>
                    <a href="/?blog={{ $blog->category->slug }}#blogs">
                        <span class="badge bg-primary">{{ $blog->category->name }}</span>
                    </a>
                </div>
                <div class="text-secondary">{{ $blog->created_at->diffForHumans() }}</div>
            </div>
            <p class="lh-md mt-3">{{ $blog->body }}</p>
        </div>
    </div>
</div>
