{{ $event->user->name }} favorited a post, <a href="/posts/{{ $event->subject_id}}">{{ $event->subject->title}}</a>, {{ $event->created_at->diffForHumans() }}
