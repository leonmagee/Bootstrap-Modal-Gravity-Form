<?php

/**
*  Function to output Bootstrap Form Modals with embedded Gravity Form
*
*  Array contains key value pairs, key is the modal ID, value is the Name of the Gravity Form and the title
*  which will appear in the modal. Sample:
*  $modal_array = array( 'schedule_a_showing' => 'Schedule a Showing', 'ask_a_question' => 'Ask a Question' );
*/

function output_gravity_form_modal( $modal_array ) {

foreach ( $modal_array as $id => $name ) { ?>

<!-- Modal -->
<div class="modal modal-gravity-form fade" id="<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title" id="myModalLabel"><?php echo $name; ?></h4>

            </div>

            <div class="modal-body">

                <?php gravity_form( $name, false ); ?>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>

        </div>

    </div>

</div>

<?php }
}