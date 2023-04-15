@extends('admin.master.master')

@section('content')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <a href="mailbox.html" class="btn btn-primary btn-block mb-3">Back to Inbox</a>
                        @include("admin.messages.folders")
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Read Mail</h3>

                                <div class="card-tools">
                                    <a href="#" class="btn btn-tool" title="Previous"><i
                                            class="fas fa-chevron-left"></i></a>
                                    <a href="#" class="btn btn-tool" title="Next"><i
                                            class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div class="mailbox-read-info">
                                    <h5>Message Subject Is Placed Here</h5>
                                    <h6>{{ $message->email }}
                                        <span class="mailbox-read-time float-right">{{ $message->created_at }}</span>
                                    </h6>
                                </div>
                                <!-- /.mailbox-read-info -->
                                <div class="mailbox-controls with-border text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default btn-sm" data-container="body"
                                            title="Delete">
                                            <i class="far fa-trash-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm" data-container="body"
                                            title="Reply">
                                            <i class="fas fa-reply"></i>
                                        </button>
                                        <button type="button" class="btn btn-default btn-sm" data-container="body"
                                            title="Forward">
                                            <i class="fas fa-share"></i>
                                        </button>
                                    </div>
                                    <!-- /.btn-group -->
                                    <button type="button" class="btn btn-default btn-sm" title="Print">
                                        <i class="fas fa-print"></i>
                                    </button>
                                </div>
                                <!-- /.mailbox-controls -->
                                <div class="mailbox-read-message">
                                    {{ $message->content }}
                                </div>
                                <!-- /.mailbox-read-message -->
                            </div>
                            <!-- /.card-footer -->
                            <div class="card-footer">
                                <div class="float-right">
                                    <button type="button" class="btn btn-default"><i class="fas fa-reply"></i>
                                        Reply</button>
                                    <button type="button" class="btn btn-default"><i class="fas fa-share"></i>
                                        Forward</button>
                                </div>
                                <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i>
                                    Delete</button>
                                <button type="button" class="btn btn-default"><i class="fas fa-print"></i>
                                    Print</button>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
@endsection
