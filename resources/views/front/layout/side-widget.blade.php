<div class="col-lg-4" data-aos="fade-left">
    {{-- LOGIN AS WRITER --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-header">Wanna write an article?
            <a href="{{ url('login') }}" class="btn btn-outline-success">Login</a>
        </div>
    </div>
    <!-- Search widget-->
    <div class="card mb-4 shadow-sm">
        <div class="card-header">Search</div>
        <div class="card-body">
            <form action="{{ route('search') }}" method="POST">
                @csrf
                <div class="input-group">
                    <input class="form-control" type="text" name="keyword" placeholder="Search..." />
                    <button class="btn btn-success" id="button-search" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Categories widget-->
    <div class="card mb-4 shadow-sm">
        <div class="card-header">Categories</div>
        <div class="card-body">
            <div>
                @foreach ($categories as $item)
                    <span><a href="{{ url('category/'.$item->slug) }}" class="bg-success badge text-decoration-none">{{ $item->name }} ({{ $item->articles_count }})</a></span>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Side widget-->
    <div class="card mb-4 shadow-sm">
        <div class="card-header">Author</div>
        <div class="card-body">
            <a href="https://www.linkedin.com/in/adit-nur-khalim" target="_blank" rel="noopener noreferrer" class="text-decoration-none text-center text-secondary">
                <img src="{{ asset('front/img/author.JPG') }}" alt="ads_widget" class="image-fluid rounded mb-2" width="100%">
                <h5>Adit Nur Khalim</h5>
            </a>
        </div>
    </div>

    <!-- Related Post-->
    <div class="card mb-4 shadow-sm">
        <div class="card-header">Popular Post</div>
        <div class="card-body">
            @foreach ($popular_posts as $item)
                <div class="card mb-2">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/back/'.$item->img) }}" alt="{{ $item->title }}" class="img-fluid">
                        </div>

                        <div class="col-md-8">
                            <div class="card-body">
                                <a href="{{ url('p/'.$item->slug) }}">{{ $item->title }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>