<?php $facebook_url = "https://www.facebook.com/sharer.php?u=" . get_the_permalink();
$linkedin_url = "https://www.linkedin.com/sharing/share-offsite/?url=" . get_the_permalink();
$twitter_url = add_query_arg(
    [
        'text' => urlencode(get_the_title()),
        'url' => get_the_permalink(),

    ],
    "https://www.twitter.com/intent/tweet?"
);
$mail_body = get_the_content() . " For details, link here : " . get_the_permalink();

$gmail_url = add_query_arg(
    [
        'view' => 'cm',
        'fs' => 1,
        'to' => '',
        'su' => urlencode(get_the_title()),
        'body' => urlencode($mail_body),
        'bcc' => ''
    ],
    "https://mail.google.com/mail/"
);

?>
<ul class="share-buttons">
    <li><a class="fb-share" href="<?= $facebook_url; ?>"><i class="social_facebook"></i>
            Share</a></li>
    <li><a class="twitter-share" href="<?= $twitter_url; ?>"><i class="social_twitter"></i>
            Tweet</a></li>
    <li><a class="gplus-share" href="<?= $gmail_url ?>"><i class="social_googleplus"></i>
            Share</a></li>
</ul>