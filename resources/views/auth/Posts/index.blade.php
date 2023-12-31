<x-layout2>
    <x-slot:title>
        Document List
    </x-slot>

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class="mdi mdi-file-document"></i>
                    </span> Post List
                </h3>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                            <span></span>Overview <i
                                class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Document Data List</h4>
                            @if (count($posts) > 0)
                                <table class="table table-striped display nowrap" id="myTable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th> No </th>
                                            <th> Title </th>
                                            <th> Description </th>
                                            <th> Type </th>
                                            <th> Category </th>
                                            <th> Status </th>
                                            <th> Edited </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $n = 1; @endphp
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td>{{ $n++ }}</td>
                                                <td> {{ $post->title }} </td>
                                                <td> {{ Str::limit($post->description, 10) }} </td>
                                                <td> {{ $post->tipe->name }} </td>
                                                <td> {{ $post->category->name }} </td>
                                                @if ($post->is_publish == 1)
                                                    <td>
                                                        <span class="badge badge-success">Published</span>
                                                    </td>
                                                @else
                                                    <td>
                                                        <span class="badge badge-secondary">Draft</span>
                                                    </td>
                                                @endif
                                                {{-- {{ $post->is_publish == 1 ? 'Published' : 'Draft' }} --}}
                                                <td> {{ $post->edited }} </td>
                                                <td class="text-center">
                                                    @php
                                                        $postid = $post->id;
                                                    @endphp
                                                    <a href="/posts/{{ $postid }}" class="btn btn-sm btn-info"
                                                        target="_blank"><i class="mdi mdi-eye"></i></a>
                                                    <a href="{{ route('posts.edit', $postid) }}"
                                                        class="btn btn-sm btn-success"><i
                                                            class="mdi mdi-tooltip-edit"></i></a>
                                                    <form id="delete-form-{{ $postid }}"
                                                        action="{{ route('posts.destroy', $postid) }}" method="POST"
                                                        style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <a href="#" class="btn btn-sm btn-danger"
                                                        onclick="myFunction('{{ $postid }}')">
                                                        <i class="mdi mdi-delete"></i>
                                                    </a>
                                                    <script>
                                                        function myFunction($postId) {
                                                            const swalWithBootstrapButtons = Swal.mixin({
                                                                customClass: {
                                                                    confirmButton: 'btn btn-success btn-rounded mx-2',
                                                                    cancelButton: 'btn btn-danger btn-rounded mx-2'
                                                                },
                                                                buttonsStyling: false
                                                            })

                                                            swalWithBootstrapButtons.fire({
                                                                title: 'Are you sure?',
                                                                text: "You won't be able to revert this!",
                                                                icon: 'warning',
                                                                showCancelButton: true,
                                                                confirmButtonText: 'Yes',
                                                                cancelButtonText: 'No',
                                                                reverseButtons: true
                                                            }).then((result) => {
                                                                if (result.isConfirmed) {
                                                                    document.getElementById('delete-form-' + $postId).submit();
                                                                } else if (result.dismiss === Swal.DismissReason.cancel) {
                                                                    swalWithBootstrapButtons.fire(
                                                                        'Cancelled',
                                                                        'Your file is safe :)',
                                                                        'error'
                                                                    )
                                                                }
                                                            })
                                                        }
                                                    </script>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <h3 class="text-center text-danger">Data Not Found</h3>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
</x-layout2>
