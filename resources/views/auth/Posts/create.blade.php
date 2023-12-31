<x-layout2>
    <x-slot:title>
        Create Post
    </x-slot>

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class="mdi mdi-border-color"></i>
                    </span> Create Post
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Posts</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Post</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <h4 class="card-title">Create Post</h4>
                            <form method="POST" action="{{ route('posts.store') }}" class="forms-sample" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" placeholder="Title" required>
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category" class="form-control" value="{{ old('category') }}">
                                        <option disabled selected>Choose Option</option>
                                        @if (count($categories) > 0)
                                            @foreach ($categories as $category)
                                                <option @selected( old('category') == $category->id ) value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Type</label>
                                    <select name="tipe" class="form-control" value="{{ old('tipe') }}">
                                        <option disabled selected>Choose Option</option>
                                        @if (count($tipes) > 0)
                                            @foreach ($tipes as $tipe)
                                                <option @selected( old('tipe') == $tipe->id ) value="{{ $tipe->id }}">{{ $tipe->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Published</label>
                                    <select name="is_publish" class="form-control">
                                        <option disabled selected>Choose Option</option>
                                        <option @selected( old('is_publish') == 1 ) value="1">Publish</option>
                                        <option @selected( old('is_publish') == 0 ) value="0">Draft</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control">{{ old('description') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea id="summernote" name="content" class="form-control">{{ old('content') }}</textarea>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
</x-layout2>
