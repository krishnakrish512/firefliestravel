<?php
add_filter('post_thumbnail_html', 'remove_thumbnail_width_height', 10, 5);

function remove_thumbnail_width_height($html)
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

//update itinerary mail body
function firefilestravel_wpcf7_itinerary_mail_update($WPCF7_ContactForm)
{

    if ($WPCF7_ContactForm->id != get_field('itinerary_mail', 'option')) {
        return $WPCF7_ContactForm;
    }

    $wpcf7 = WPCF7_ContactForm:: get_current();
    $submission = WPCF7_Submission::get_instance();

    if ($submission) {
        $posted_data = $submission->get_posted_data();
    }

    $post_id = $posted_data['_wpcf7_container_post'];

    $mail = $wpcf7->prop('mail');

    $message = "<h1>Itinerary for " . get_the_title($post_id) . "</h1><br/><hr/><br/>";

    if (have_rows('itinerary_repeater', $post_id)):
        while (have_rows('itinerary_repeater', $post_id)):
            the_row();
            $message .= "<strong>" . get_sub_field('heading', $post_id) . "</strong><br/>";
            $message .= get_sub_field('paragraph', $post_id) . "<br/><br/>";
        endwhile;
    endif;

    $message .= "For more details visit " . get_the_permalink($post_id);

    $message .= "<br/><hr/><br/>";
    $message .= "<p><strong>" . get_bloginfo('name') . "</strong></p>";

    $contact = get_field('contact', 'option');
    $message .= "<p><strong>Email : </strong>" . $contact['header_email'] . "</p>";
    $message .= "<p><strong>Phone Number : </strong><a href='tel:" . $contact['phone_number'] . "'>" . $contact['phone_number'] . "</a></p>";
    $message .= "<p><strong>Website : </strong>" . get_home_url() . "</p>";

    $mail['body'] = $message;

    $WPCF7_ContactForm->set_properties(["mail" => $mail]);

    return $wpcf7;
}

add_action("wpcf7_before_send_mail", "firefilestravel_wpcf7_itinerary_mail_update");


/**
 * add capability to editor to view flamingo messages
 */

add_filter('flamingo_map_meta_cap', 'firefilestravel_flamingo_map_meta_cap');

function firefilestravel_flamingo_map_meta_cap($meta_caps)
{
    $meta_caps = array_merge($meta_caps, array(
        'flamingo_edit_contacts' => 'edit_pages',
        'flamingo_edit_inbound_message' => 'edit_pages',
        'flamingo_edit_inbound_messages' => 'edit_pages',
    ));

    return $meta_caps;
}
