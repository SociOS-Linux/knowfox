<div class="blog-post">
    @if (!empty($concept->image_thumbnail))
        <a href="/{{$concept->slug}}/">
            <img class="blog-post-thumbnail thumbnail" src="{{$concept->image_thumbnail}}">
        </a>
    @endif
    <h2 class="blog-post-title"><a href="{{$url_prefix}}/{{$concept->slug}}/">{{$concept->title}}</a></h2>

    @if ($show_date)
        <p class="blog-post-meta">{{ strftime('%Y-%m-%d', strtotime($concept->created_at)) }} by {{$concept->owner->name}}</p>
    @endif

    <p>{{$concept->summary}}</p>
</div>
