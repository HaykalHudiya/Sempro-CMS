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
                            <div class="d-flex justify-content-between mb-3">
                                <h4 class="card-title">Document Data List</h4>
                                <button class="btn btn-success"
                                    onclick="location.href='{{ route('partners.create') }}'">+</button>
                            </div>
                            @if (count($contents) > 0)
                                <table class="table table-striped display nowrap" id="myTable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th> No </th>
                                            <th> Image </th>
                                            <th> Title </th>
                                            <th> Type </th>
                                            <th> Description </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $n = 1; @endphp
                                        @foreach ($contents as $content)
                                            <tr>
                                                <td>{{ $n++ }}</td>
                                                <td class="py-1">
                                                    @if ($content->type == 'business')
                                                        <img src="{{ asset('Assets\Website\media\Dashboard\industries') . '/' . $content->gallery->image }}"
                                                            alt="image" />
                                                    @else
                                                        <img src="{{ asset('Assets\Website\media\Dashboard\partners') . '/' . $content->gallery->image }}"
                                                            alt="image" />
                                                    @endif
                                                </td>
                                                <td> {{ $content->title }} </td>
                                                <td> {{ $content->type }} </td>
                                                <td> {{ Str::limit($content->description, 20) }} </td>
                                                <td class="text-center">
                                                    @php
                                                        $contentid = $content->id;
                                                    @endphp
                                                    <a href="{{ route('partners.edit', $contentid) }}"
                                                        class="btn btn-sm btn-success"><i
                                                            class="mdi mdi-tooltip-edit"></i></a>
                                                    <form id="delete-form-{{ $contentid }}"
                                                        action="{{ route('partners.destroy', $contentid) }}"
                                                        method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <a href="#" class="btn btn-sm btn-danger"
                                                        onclick="myFunction('{{ $contentid }}')">
                                                        <i class="mdi mdi-delete"></i>
                                                    </a>
                                                    <script>
                                                        function myFunction(contentId) {
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
                                                                    document.getElementById('delete-form-' + contentId).submit();
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
