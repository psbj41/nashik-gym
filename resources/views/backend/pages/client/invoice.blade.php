@extends('backend.layouts.master')

@section('title')
Invoice Generate
@endsection

@section('css')

@endsection

@section('content')
@php
$phone = getSiteOption("site_phone");
$td = getSiteOption("site_td");
$logo = getSiteLogo();
$email = getSiteOption("site_email");
$address = getSiteOption("site_address");
$name = getSiteOption("site_name");
$ct = getSiteOption("copyright_text");
$dc = getSiteOption("site_description");
$fb = getSiteOption("site_social_links.facebook");
$insta = getSiteOption("site_social_links.instagram");
$tw = getSiteOption("site_social_links.twitter");
$linke = getSiteOption("site_social_links.linkedin");
@endphp



<div class="page-content">

    <!-- start page title -->
    <div class="page-title-box">
        <div class="container-fluid">
         <div class="row align-items-center">
             <div class="col-sm-6">
                 <div class="page-title">
                     <h4>Invoice</h4>
                         <ol class="breadcrumb m-0">
                             <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $name }}</a></li>
                             <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                             <li class="breadcrumb-item active">Invoice</li>
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
                    <div class="card m-b-30">
                        <div class="card-body" style="margin: 100px 30px 0px 30px">
                            <div class="row" >
                                <div class="col-12">
                                    <div class="invoice-title">
                                        <h4 class="float-end font-size-16"><strong>Order # {{$subscription->user->id}}|{{ $subscription->updated_at->format('d M') }}</strong></h4>
                                        <h3 class="m-t-0">
                                            <img src="{{ $logo }}" alt="logo" height="100"/>
                                        </h3>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-6">
                                            <address>
                                                <strong>Billed To:</strong><br>
                                                {{ $subscription->user->name }}<br>
                                                {{ $subscription->user->contact }}<br>
                                                {{ $subscription->user->email }}<br>
                                            </address>
                                        </div>
                                        <div class="col-6 text-end">
                                            <address>
                                                <strong>Billed From:</strong><br>
                                                {{ $name }}<br>
                                                {{ $phone}}<br>
                                                {{ $email }}<br>
                                                {{ $address }}
                                            </address>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 m-t-30">
                                            <address>
                                                <strong>Payment Method:</strong><br>
                                                {{$subscription->option }}<br>
                                                {{ $subscription->transaction }}
                                            </address>
                                        </div>
                                        <div class="col-6 m-t-30 text-end">
                                            <address>
                                                <strong>Bill Span:</strong><br>
                                                {{ $subscription->start }}<br>
                                                {{ $subscription->end }}
                                                <br>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" >
                                <div class="col-12">
                                    <div class="panel panel-default">
                                        <div class="p-2">
                                            <h3 class="panel-title font-size-20"><strong>Package Details</strong></h3>
                                        </div>
                                        <div class="">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    {!! $subscription->package->content !!}
                                                    <tr>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line text-center">
                                                            <strong>Total</strong></td>
                                                        <td class="no-line text-end"><h4 class="m-0">Rs. {{$subscription->payment_price }}/-</h4></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="d-print-none mo-mt-2">
                                                <div class="float-end">
                                                    <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div> <!-- end row -->

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div>


    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection

@section('scripts')

@endsection
