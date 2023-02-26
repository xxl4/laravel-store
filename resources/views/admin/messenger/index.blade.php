
@section('content')
<h1><a href="/admin/messages/create" class="btn btn-success">消息创建</a></h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th>主题</th>
        <th>内容</th>
        <th>创建者</th>
        <th>接收者</th>
    </tr>
    </thead>
    @include('admin.messenger.partials.flash')
    @each('admin.messenger.partials.thread', $threads, 'thread', 'admin.messenger.partials.no-threads')
</table>
@stop
    
