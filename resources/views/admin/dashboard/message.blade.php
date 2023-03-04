<div class="box box-default">
    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-striped">
            @include('admin.messenger.partials.flash')
            @each('admin.messenger.partials.thread', $threads, 'thread', 'admin.messenger.partials.no-threads')
            </table>
        </div>
                    <!-- /.table-responsive -->
    </div>
                <!-- /.box-body -->
</div>