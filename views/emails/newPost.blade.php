Ciao {!! $user->display_name !!}!

{!! $blueprint->post->user->display_name !!} ha risposto alla discussione "{!! $blueprint->post->discussion->title !!}"

{!! app()->url() !!}/d/{!! $blueprint->post->discussion_id !!}/{!! $blueprint->post->number !!}

---

{!! $blueprint->post->content !!}

---

Non riceverai ulteriori notifiche per questa discussione finché non avrai visualizzato i nuovi messaggi.
