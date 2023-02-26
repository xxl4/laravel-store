@section('content')
    @include('admin.messenger.partials.flash')
    @each('admin.messenger.partials.thread', $threads, 'thread', 'admin.messenger.partials.no-threads')
@stop