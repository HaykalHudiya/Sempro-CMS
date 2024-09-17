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
                            {{ $posts->appends(request()->except('page'))->links('vendor.pagination.bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-layout1>
