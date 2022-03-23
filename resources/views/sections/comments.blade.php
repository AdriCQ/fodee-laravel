<div id="fh5co-sayings">
    <div class="container">
        <div class="row to-animate">
            <div class="flexslider">
                <ul class="slides">
                    @foreach ($comments as $comment)
                    <li>
                        <blockquote>
                            <p>&ldquo;{{ $comment->message }}&rdquo;</p>
                            <p class="quote-author">&mdash; {{ $comment->name }}</p>
                        </blockquote>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</div>
