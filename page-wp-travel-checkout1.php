<?php
//get_header();
print_r($_POST);
echo do_shortcode('[contact-form-7 id="415" title="Reservations"]');
//get_footer();
$trip_id = $_POST['trip_id']
?>
<a href="<?php echo esc_html( get_permalink( $trip_id ) ); ?>">
	<?php echo wp_kses( wp_travel_get_post_thumbnail( $trip_id ), wp_travel_allowed_html( array( 'img' ) ) ); ?>
</a>
