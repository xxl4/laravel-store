@extends('admin.messenger.layouts.master')

@section('content')
<section class="content-header">
    <div class="col-md-6">
        <h1>{{ $thread->subject }}</h1>
        @each('admin.messenger.partials.messages', $thread->messages, 'message')

        @include('admin.messenger.partials.form-message')
    </div>
</section>
@stop