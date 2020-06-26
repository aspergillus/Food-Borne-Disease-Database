<style>
    .dotted_line {
        border: 0 none;
        border-top: 2px dotted #322f32;
        background: none;
        height: 0;
        margin-top: 10px;
        margin-bottom: 10px;
    }
        .forum_message {
            resize: none;
        }
</style>

<div class="form">
    <form class="contact-form" action="question_post.php?actions=query_form" method="post">
        <?php
            include('index.php');
        ?>
        <div class="dotted_line"></div>
        <div class="button text-right">
            <button class="contact-form-btn" name="submit">Submit Your Query</button>
        </div>
    </form>
</div>

<textarea name="forum_question" class="form-control forum_message  contact-form1" placeholder="Post Your Query"
            style="height: 100px;"></textarea>