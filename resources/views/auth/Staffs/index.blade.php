<x-layout2>
    <x-slot:title>
        Partners Management
    </x-slot>

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class="mdi mdi-file-document"></i>
                    </span> Partners
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
                            <h4 class="card-title">Partners Data List</h4>
                            @if (count($users) > 0)
                                <table class="table table-striped display nowrap" id="myTable" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th> No </th>
                                            <th> Profil </th>
                                            <th> Nama </th>
                                            <th> Email </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $n = 1; @endphp
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $n++ }}</td>
                                                <td class="py-1">
                                                    <img src="{{ asset('Assets/CMS/images/faces/face1.jpg') }}"
                                                        alt="image" />
                                                </td>
                                                <td> {{ $user->name }} </td>
                                                <td> {{ $user->email }} </td>
                                                <td class="text-center">
                                                    @php
                                                        $userid = $user->id;
                                                    @endphp
                                                    <a href="{{ route('staffs.edit', $userid) }}"
                                                        class="btn btn-sm btn-success">
                                                        <i class="mdi mdi-tooltip-edit"></i>
                                                    </a>
                                                    <form id="delete-form-{{ $userid }}"
                                                        action="{{ route('staffs.destroy', $userid) }}" method="POST"
                                                        style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <a href="#" class="btn btn-sm btn-danger"
                                                        onclick="myFunction('{{ $userid }}')">
                                                        <i class="mdi mdi-delete"></i>
                                                    </a>
                                                    <script>
                                                        function myFunction(userId) {
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
                                                                    document.getElementById('delete-form-' + userId).submit();
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
