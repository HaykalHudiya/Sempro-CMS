<x-layout1>
    <x-slot:title>
        Uncal | Articles
    </x-slot>

    <div class="container-fluid" id="articles">
        <div class="row d-flex justify-content-center">
            <div class="col-10 text-center">
                <div class="row d-flex justify-content-center">
                    <div class="col-10 text-start">
                        <p id="popsb" style="font-size: 35px;">Articles</p>
                    </div>
                    <div class="col-2 text-center">
                        <div class="input-group">
                            <div class="form-outline">
                                <input type="search" id="searchBar" class="form-control" />
                                <label class="form-label" for="searchBar">Search... </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="containers">
                            <div class="card-contents">
                                @foreach ($posts as $post)
                                    <div class="cards">
                                        <div class="card-infos">
                                            <h3 class="text-start">{{ $post->title }}</h3>
                                            <p class="text-start">{!! Str::limit($post->description, 100, '...') !!}</p>
                                            <a href="{{ route('post.show', $post->id) }}" target="_blank">Read More <i
                                                    class="bi bi-arrow-right-circle-fill"></i></a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="paginations d-flex">
                                <li class="page-item previous-page disable"><a class="page-link">Prev</a></li>
                                <li class="page-item current-page active"><a class="page-link">1</a></li>
                                <li class="page-item dots"><a class="page-link">...</a></li>
                                <li class="page-item current-page"><a class="page-link">5</a></li>
                                <li class="page-item current-page"><a class="page-link">6</a></li>
                                <li class="page-item dots"><a class="page-link">...</a></li>
                                <li class="page-item current-page"><a class="page-link">10</a></li>
                                <li class="page-item next-page"><a class="page-link">Next</a></li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout1>
