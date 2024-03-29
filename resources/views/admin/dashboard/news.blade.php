<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">公告中心</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-striped">

                @foreach($news as $new)
                <tr>
                    <td><a href="/admin/notices/{{ $new['id'] }}" title="{{ $new['title'] }}" target="_blank">{{ $new['title'] }}</a></td>
                    <td width="150px" align="right">{{ $new['update_time'] }}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <!-- /.table-responsive -->
    </div>
    <!-- /.box-body -->
</div>