<div class="author-info  w-100 d-flex flex-row  ">
    <div class="avatar-author ">
        <img src="{{ asset('img/logo.jpg') }}" alt="" class="avt-author">
    </div>
    <div class="name-author ps-3 d-flex flex-column ">
        <div class="name-author_name">
            @foreach($users as $user)
            @if($user->user_id == $blog->user_id)
            {{ $user-> name }}
            @endif
            @endforeach
        </div>
        <div class="posting-date">Posted on {{ $formattedDate }}</div>
    </div>
</div>