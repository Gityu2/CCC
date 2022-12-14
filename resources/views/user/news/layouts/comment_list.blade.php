<li class="row comment-list-item pt-4 pb-3">
    <div class="col-2 col-sm-1">
        @if ($comment->user->avatar)
            <a href="{{ route('user.profile.show', $comment->user->id) }}" class="text-decoration-none text-muted"><img src="{{ asset('images/avatars/' . $comment->user->avatar) }}" alt="User Avatar" class="avatar"></a>
        @else
            <a href="{{ route('user.profile.show', $comment->user->id) }}" class="text-decoration-none text-muted"><i class="fa-solid fa-circle-user fa-2x profile-icon"></i></a>
        @endif
    </div>
    <div class="col-10 col-sm-11">
        <!-- Comment header -->
        <div class="profile">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="fw-bold"><a href="{{ route('user.profile.show', $comment->user->id) }}" class="username text-dark">{{ $comment->user->username }}</a></h6>
                <div class="comment-reaction d-flex align-items-center">
                    @auth
                        @if ($comment->user_id === Auth::user()->id)
                            <button type="button" class="comment-delete text-danger border-0 bg-transparent" data-commentid="{{ $comment->id }}">Delete</button>
                        @endif
                    @endauth
                    <div class="comment-reaction-like">
                        <span class="comment-likes-count">{{ $comment->commentLikes()->count() }}</span>
                        <i class="fa-heart comment-like-btn @if($comment->isLiked()) fa-solid comment-liked @else fa-regular @endif" data-commentid="{{ $comment->id }}"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Comment body -->
        <div class="comment-content mt-3">
            <p>{{ $comment->body }}</p>
        </div>
    </div>
</li>
