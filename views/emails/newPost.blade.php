Ciao {!! $user->display_name !!}!

{!! $blueprint->post->user->display_name !!} ha risposto alla discussione "{!! $blueprint->post->discussion->title !!}", a cui sei iscritto.

{!! app()->url() !!}/d/{!! $blueprint->post->discussion_id !!}/{!! $blueprint->post->number !!}

---

{!! $blueprint->post->content !!}

---

Non riceverai ulteriori notifiche per questa discussione finché non avrai visualizzato i nuovi messaggi.

Puoi revisionare le impostazioni di notifica via email qua: {!! app()->url() !!}/settings
