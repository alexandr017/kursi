<div>
    <div>
        <button
                type="button"
                class="add_comment_button"
                onclick="showCommentArea()"
        >
            Добавить комментарий
        </button>

        <div id="add_comment_block">
            <div class="blog-comment-field blog-comment-field-user">

                <div class="blog-comment-field blog-comment-field-author">
                    <div class="blog-comment-field-text comments-editor_title">
                        <label for="user_name">
                            Ваше имя
                        </label>
                        <span class="blog-required-field">*</span>
                    </div>
                    <input maxlength="255" size="30" tabindex="3" type="text" name="user_name" id="user-name" value="">
                </div>

                <div class="blog-comment-field blog-comment-field-email">
                    <div class="blog-comment-field-text comments-editor_title">
                        <label for="">E-mail</label>
                    </div>
                    <input maxlength="255" size="30" tabindex="4" type="text" name="user_email" id="user-email" value="">
                </div>

            </div>


            <div class="comments-editor_title">
                Комментарий
            </div>
            <textarea id="area_for_comments"></textarea>

            <input
                    tabindex="10"
                    value="Отправить"
                    class="send_button"
                    type="button"
                    name="sub-post"
                    id="post-button"
                    onclick="submitCommentNew({{$post->id}})"
            >
        </div>
    </div>

    @if(count($post->comments) > 0)
        @include('site.v3.templates.blog.comments.comment-replies', ['comments' => $post->comments])
    @endif

</div>


<script>
    function showCommentArea() {
        const blockForCommentsAnswer = document.getElementsByClassName('answer_comment_block');

        const blockForCommentsAnswerArray = Array.from(blockForCommentsAnswer);

        blockForCommentsAnswerArray.forEach(function(inputElement) {
            inputElement.value = '';
            inputElement.style.display = 'none';
        });

        const blockForComments = document.getElementById('add_comment_block');

        blockForComments.style.display = 'block';
    }

    function submitCommentNew(postId) {
        const comment = document.getElementById('area_for_comments').value;
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        let userName;
        let userEmail;

        @auth
            userName = '{{ Auth::user()->name }}';
            userEmail = '{{ Auth::user()->email }}';
        @else
            userName = document.getElementById('user-name').value;
        userEmail = document.getElementById('user-email').value;
        @endauth

        const data = {
            content: comment,
            post_id: postId,
            name: userName,
            email:userEmail
        };

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
                console.error('Error:', error);
            });
    }

</script>

<style>
    body {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        box-sizing: border-box;
        margin: 0 auto;
    }

    .add_comment_button {
        margin-top: 20px;
        font-size: 16px;
        padding: 10px 60px;
        text-decoration: unset;
        font-weight: 500;
        line-height: 22px;
        text-align: center;
        border: 1px solid #469ED7;
        border-radius: 42px;
        cursor: pointer;
        outline: none;
        color: #469ED7;
        background: #FFFFFF;
    }

    .add_comment_button:hover {
        background: #469ED7;
        color: #FFFFFF;
    }

    #add_comment_block{
        display: none;
    }

    .comments-editor_title {
        margin-top: 24px;
        margin-bottom: 8px;
        font-size: 16px;
        line-height: 24px;
        color: #101820;
    }

    #area_for_comments {
        width: 100%;
        min-height: 156px;
        border-radius: 8px;
        border: 1px solid #D9D9D9;
        font-size: 14px;
        resize: none;
        display:block;
    }

    #area_for_comments:focus {
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

    .kursi_blog .blog-comment-field.blog-comment-field-user {
        display: inline-flex;
        flex-direction: column;
    }

    div.blog-comment-field-user {
        width: 100%;
        padding-bottom: 5px;
    }
    div.blog-comment-field {
    }

    .kursi_blog .blog-comment-field.blog-comment-field-user > div {
        width: 100%;
    }

    div.blog-comment-field-author, div.blog-comment-field-email {
        float: left;
        width: 47%;
    }

    .kursi_blog .comments-editor_title {
        margin-top: 24px;
        margin-bottom: 8px;
        font-size: 16px;
        line-height: 24px;
        color: #101820;
    }

    div.blog-comment-field-text {
        padding-bottom: 0.2em;
        width: 100%;
    }

    .blog-required-field {
        color: red;
    }

    .kursi_blog .blog-comment-field input {
        padding: 13px;
        border-radius: 8px;
        border: 1px solid #D9D9D9;
        outline: none;
    }

    div.blog-comment-field-author input, div.blog-comment-field-email input {
        width: 100%;
    }

    .kursi_blog #add_comment_block {
        width: 50%;
        min-width: 350px;
    }

    @media screen and (max-width: 400px) {
        .kursi_blog #add_comment_block {
            width: 100%;
            min-width: unset;
        }
    }
</style>
