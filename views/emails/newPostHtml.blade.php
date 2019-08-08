Ciao {!! $user->display_name !!}!
<br><br>
<i>{!! $blueprint->post->user->display_name !!}</i> ha risposto alla discussione
<a href="{!! app()->url() !!}/d/{!! $blueprint->post->discussion_id !!}/{!! $blueprint->post->number !!}">
<i>{!! $blueprint->post->discussion->title !!}</i></a>.
<br><br>
---
<br><br>
{!! $blueprint->post->content !!}
<br><br>
---
<br><br>
<i>Non riceverai ulteriori notifiche per questa discussione finché non avrai visualizzato i nuovi messaggi.</i>
