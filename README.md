# Bootstrap-Modal-Gravity-Form

A simple function to output a bootstrap modal with a gravity form embedded

This can be easily adapted to add modals for any other purpose.

You call this function in a template like so:

$array = array( 'modal_id' => 'Name of Gravity Form', 'modal_id_2' => 'Name of second form' );

output_gravity_form_modal( $modal_array );
