<x-layout2>
    <x-slot:title>
        Partner List
    </x-slot>

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white me-2">
                        <i class="mdi mdi-file-document"></i>
                    </span> Candidate Partner List
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
                        <h4 class="card-title">Candidate Partner List</h4>
                        @if (count($partners) > 0)
                            <table class="table table-striped display nowrap" id="myTable" style="width:100%">
                                <thead>
                                    <tr>
                                        <th> No </th>
                                        <th> Name </th>
                                        <th> Company </th>
                                        <th> Business </th>
                                        <th> Type </th>
                                        <th> Email </th>
                                        <th> Phone </th>
                                        <th> Address </th>
                                        <th> Date </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $n = 1; @endphp
                                    @foreach ($partners as $partner)
                                    <tr>
                                        <td>{{ $n++ }}</td>
                                        <td>{{ $partner->name }} {{ $partner->lastname }}</td>
                                        <td>{{ $partner->company }}</td>
                                        <td>{{ $partner->business }}</td>
                                        <td>{{ $partner->type }}</td>
                                        <td>{{ $partner->email }}</td>
                                        <td>{{ $partner->phone }}</td>
                                        <td>{{ $partner->address }}, {{ $partner->city }}, {{ $partner->country }}, {{ $partner->code }}</td>
                                        <td>{{ $partner->created_at->format('d M Y') }}</td>
                                        <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-danger" onclick="myFunction()"><i class="mdi mdi-delete"></i></a>
                                            <script>
                                                function myFunction() {
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
                                                        window.location.href ='/cms/Partner/del/{{ $partner->id }}';
                                                    } else if (
                                                        result.dismiss === Swal.DismissReason.cancel
                                                    ) {
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
