<div class="comments_list_wrapper" style="padding-left:2.5em;">

    @foreach($comments as $comment)

        <div class="comments_wrapper">
            <div class="author_avatar">
                {{ mb_substr($comment->name, 0, 1,'UTF-8') }}
            </div>

            <div class="author_name">
                {{$comment->name}}
            </div>

            <div></div>

            <div class="content_wrapper">
                <div class="content_text">
                    {{$comment->content}}
                </div>

                <div class="content_actions_wrapper">
                    <button
                            type="button"
                            class="blog_comment_answer"
                            onclick="showCommentAnswerArea(`answer_comment_block_{{$comment->id}}`)"
                    >
                        Ответить
                    </button>

                    <div class="answer_comment_block" id="answer_comment_block_{{$comment->id}}">
                        <div id="user_info">
                            <div>
                                <p style="margin: 0"> Name </p>
                                <input id="user-name-{{$comment->id}}" class="user_info_sections" type="text" name="example_input" placeholder="Enter your name here">
                            </div>
                            <div>
                                <p style="margin: 0"> Email </p>
                                <input id="user-email-{{$comment->id}}" class="user_info_sections" type="text" placeholder="Enter your email here">
                            </div>
                        </div>

                        <div class="comments-editor_title">
                            Комментарий
                        </div>

                        <textarea class="area_for_comments_answer" id="area_for_comments_answer_{{$comment->id}}"></textarea>

                        <input
                                tabindex="10"
                                value="Ответить"
                                class="send_button"
                                type="button"
                                name="sub-post"
                                id="post-button-answer-{{$comment->id}}"
                                onclick="submitCommentAnswer({{$post->id}}, {{$comment->id}})"
                        >

                    </div>

                    {{--                        <span class="blog_comment_edit">--}}
                    {{--                            <a href=""> Редактировать </a>--}}
                    {{--                        </span>--}}
                    {{--                        <span class="blog_comment_show">--}}
                    {{--                            <a href=""> Скрыть </a>--}}
                    {{--                        </span>--}}
                    {{--                        <span class="blog_comment_delete">--}}
                    {{--                            <a href=""> Удалить </a>--}}
                    {{--                        </span>--}}
                </div>
            </div>
        </div>

        @if(count($comment->childes) > 0)
            @include('site.v3.templates.blog.comments.comment-replies', ['comments' => $comment->childes])
        @endif

    @endforeach
</div>

<script>

    function clearUserInfo() {
        const userInfoSections = document.getElementsByClassName('user_info_sections');
        const userInfoSectionsArray = Array.from(userInfoSections);

        userInfoSectionsArray.forEach(function(inputElement) {
            inputElement.value = '';
        });
    }

    function clearBlockForCommentsAnswer() {
        const blockForCommentsAnswer = document.getElementsByClassName('answer_comment_block');
        const blockForCommentsAnswerArray = Array.from(blockForCommentsAnswer);

        blockForCommentsAnswerArray.forEach(function(inputElement) {
            inputElement.style.display = 'none';
        });
    }

    function clearBlockAreasCommentsAnswer() {
        const blockAreasCommentsAnswer = document.getElementsByClassName('area_for_comments_answer');
        const blockAreasCommentsAnswerArray = Array.from(blockAreasCommentsAnswer);

        blockAreasCommentsAnswerArray.forEach(function(inputElement) {
            inputElement.value = '';
        });
    }

    function clearBlockForComments(id)
    {
        const blockForComment = document.getElementById('add_comment_block');
        const blockAreaComment = document.getElementById('area_for_comments');

        blockForComment.style.display = 'none';
        blockAreaComment.value = '';

        const blockForComments = document.getElementById(id);

        blockForComments.style.display = 'block';
    }

    function showCommentAnswerArea(id) {
        clearUserInfo();
        clearBlockForCommentsAnswer();
        clearBlockAreasCommentsAnswer();
        clearBlockForComments(id);

        @auth
        @else
        const blockUserInfo = document.getElementById('user_info');
        blockUserInfo.style.display = 'block';
        @endauth

    }

    function submitCommentAnswer(postId, commentId = null) {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        const comment = document.getElementById(`area_for_comments_answer_${commentId}`).value;

        let userName;
        let userEmail;

        @auth
            userName = '{{ Auth::user()->name }}';
            userEmail = '{{ Auth::user()->email }}';
        @else
            userName = document.getElementById(`user-name-${commentId}`).value;
            userEmail = document.getElementById(`user-email-${commentId}`).value;
        @endauth

        const data = {
            content: comment,
            post_id: postId,
            parent_id: commentId,
            name: userName,
            email:userEmail
        };

        console.log(data);

        fetch(`/${postId}/comments`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
            },
            body: JSON.stringify(data),
        })
            .then(response => response.json())
            .then(data => {
                if (data.errors && data.errors.message) {
                    alert(data.errors.message)
                }
                window.location.reload()
            })
            .catch(error => {
                alert('Something went wrong');
                console.error('Error:', error);
            });
    }

</script>

<style>
    body {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        padding: 8px 8px 8px 18px;
        box-sizing: border-box;
        margin: 0 auto;
    }

    .answer_comment_block {
        display: none;
    }

    .answer_comment_block {
        margin-top: 50px;
    }

    .comments-editor_title {
        margin-top: 24px;
        margin-bottom: 8px;
        font-size: 16px;
        line-height: 24px;
        color: #101820;
    }

    .area_for_comments_answer {
        width: 524px;
        min-height: 156px;
        border-radius: 8px;
        border: 1px solid #D9D9D9;
        font-size: 14px;
        resize: none;
        display:block;
    }

    .area_for_comments_answer:focus {
        outline: none !important;
        border: 2px solid #469ED7;
    }

    .send_button {
        margin-top: 20px;
        font-weight: 500;
        padding: 16px 80px;
        font-size: 18px;
        color: #FFFFFF;
        background: #469ED7;
        line-height: 22px;
        text-align: center;
        border: 1px solid #469ED7;
        border-radius: 42px;
        cursor: pointer;
        outline: none;
    }


    .send_button:hover {
        background: #2185C6;
    }

    .author_avatar {
        grid-area: img;
        width: 56px;
        height: 56px;
        background: #F5F5F5;
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        text-transform: uppercase;
        font-size: 24px;
        font-weight: 500;
        line-height: 30px;
    }

    .comments_list_wrapper {
        margin-top: 30px;
        display: flex;
        flex-direction: column;
        row-gap: 50px;
    }

    .comments_wrapper {
        max-width: 1200px;
        display: grid;
        grid-template-columns: auto 1fr;
        grid-template-areas:"img title" "none content";
        column-gap: 20px;
        align-items: center;
    }

    .author_name {
        grid-area: title;
        font-weight: 600;
        font-size: 18px;
        line-height: 22px;
    }

    .content_wrapper {
        display: flex;
        flex-direction: column;
    }

    .content_text {
        grid-area: content;
        font-size: 18px;
        line-height: 28px;
        font-weight: 400;
        display: block;
        overflow: hidden;
        padding-top: 0.5em;
    }

    .content_actions_wrapper {
        margin-top: 24px;
        grid-area: content;
        font-size: 18px;
        line-height: 28px;
        font-weight: 400;
        display: block;
        overflow: hidden;
        padding-top: 0.5em;
    }

    .user_info {
        display: none;
    }
    .user_info_sections {

        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;

    }

    .blog_comment_answer {
        color: black !important;
        padding: 8px 50px;
        line-height: 18px;
        font-size: 14px;
        border: 1px solid #101820;
        border-radius: 27px;
        cursor: pointer;
    }

    .blog_comment_answer:hover {
        text-decoration: underline;
    }

    .blog_comment_edit > a,
    .blog_comment_show > a,
    .blog_comment_delete > a {
        color: #969696;
        text-decoration: none;
    }

    .blog_comment_answer > a:hover,
    .blog_comment_edit > a:hover,
    .blog_comment_show > a:hover,
    .blog_comment_delete > a:hover {
        text-decoration: underline;
    }
</style>