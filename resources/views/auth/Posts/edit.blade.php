<x-layout2>
    <x-slot:title>
        Edit Post
    </x-slot>

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class="mdi mdi-border-color"></i>
                    </span> Edit Post
                </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Posts</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Post</li>
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
                            <h4 class="card-title">Edit Post</h4>
                            @if ($post)
                            <form method="POST" action="{{ route('posts.update', $post->id) }}" class="forms-sample" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" value="{{ $post->title }}" placeholder="Title" required>
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category" class="form-control" value="{{ old('category') }}">
                                        <option disabled selected>Choose Option</option>
                                        @if (count($categories) > 0)
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ $post->category->id == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
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
                                                <option value="{{ $tipe->id }}" {{ $post->tipe->id == $tipe->id ? 'selected' : '' }}>
                                                    {{ $tipe->name }}
                                                </option>
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
                                    <textarea name="description" class="form-control">{{ $post->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea id="summernote" name="content" class="form-control">{{ $post->content }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-gradient-primary me-2">Update</button>
                            </form>
                            @else
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
</x-layout2>
