<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>
<!--
<div class="media alert {{ $class }}">
    <h4 class="media-heading">
        <a href="{{ route('admin.messages.show', $thread->id) }}">{{ $thread->subject }}</a>
        ({{ $thread->userUnreadMessagesCount(Auth::id()) }} unread)</h4>
    <p>
        {{ $thread->latestMessage->body }}
    </p>
    <p>
        <small><strong>Creator:</strong> {{ $thread->creator()->name }}</small>
    </p>
    <p>
        <small><strong>Participants:</strong> {{ $thread->participantsString(Auth::id()) }}</small>
    </p>
</div>
-->
<tbody>
<tr>
    <td>
    <a href="{{ route('admin.messages.show', $thread->id) }}">{{ $thread->subject }}</a>
        ({{ $thread->userUnreadMessagesCount(Auth::id()) }} unread)
    </td>
    <td>
    {{ $thread->latestMessage->body }}
    </td>
    <td>
    {{ $thread->creator()->name }}
    </td>
    <td>
    {{ $thread->participantsString(Auth::id()) }}
    </td>
</tr>
</tbody>