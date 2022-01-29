@can('message access')

@extends('backend.layouts.master')

@section('title')
Payment Message
@endsection


@section('css')
<!-- DataTables -->
<link href="{{ asset('backend/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('backend/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{ asset('backend/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
    rel="stylesheet" type="text/css" />
@endsection


@section('content')
<div class="page-content">

    <!-- start page title -->
    <div class="page-title-box">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h4>Data Tables</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">One More Rep</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">Messages Tables</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="container-fluid">

        <div class="page-content-wrapper">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @if (session('success'))

                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                                </button>
                                <strong>Success!</strong> {{session('success')}}
                            </div>

                            @endif

                            @forelse ($messages as $item)
                            <div class="col-xl-12">
                                <div class="card">
                                    <h5 class="card-header mt-0 text-center">Birthday Message</h5>
                                    <div class="card-body text-center">
                                        <h2 class="card-title mt-0">{{ $item->title}}</h2>
                                        <p class="card-text font-size-24">{{ $item->message }}</p>
                                        <a href="#" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalScrollable"><i
                                            class="mdi mdi-cellphone-message font-size-18"></i> Send Message</a>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <p>No SMS Package Found</p>
                            @endforelse
                        </div>


                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title mt-0" id="exampleModalScrollableTitle">Scrollable Modal
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close">

                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" id="message_sms_form" action="{{ route('birthday.send.sms')}}">
                                            @csrf
                                            <input type="hidden" name="message_id" value="1">
                                            <ul>
                                                @forelse ($subscribers as $item)
                                                <li>
                                                    <input type="checkbox" name="subscriber_id[]" value="{{ $item->id }}">
                                                    {{ $item->name }} | {{ $item->contact }}
                                                </li>
                                                @empty
                                                <p>No Birthday's Found</p>
                                                @endforelse
                                            </ul>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Send Message</button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->


                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div>

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection


@section('scripts')
<!-- Required datatable js -->
<script src="{{ asset('backend/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('backend/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backend/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('backend/libs/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('backend/libs/pdfmake/build/vfs_fonts.js') }}"></script>
<script src="{{ asset('backend/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('backend/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('backend/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ asset('backend/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ asset('backend/js/pages/datatables.init.js') }}"></script>


<script type="text/javascript">

    $(document).ready(function(){
        $('#exampleModalScrollable').on('shown.bs.model', function(e){
            var target = e.relatedTarget;
            var message_id = $(target).data('message_id');
            $('input[name="message_id"]').prop('value', message_id);
        });

        $('.btn-primary').click(function(e){
            e.preventDefault();
            $('#message_sms_form').submit();
        });
    });

</script>
@endsection

@endcan
