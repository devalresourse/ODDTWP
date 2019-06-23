<div class="hcf_box">
    <style scoped>
        .hcf_box{
            display: grid;
            grid-template-columns: max-content 1fr;
            grid-row-gap: 10px;
            grid-column-gap: 20px;
        }
        .hcf_field{
            display: contents;
        }

    </style>
    <p class="meta-options hcf_field">
        <lebal for="hcf_contact_name">Contact Name</lebal>
        <input id="hcf_contact_name" type="text" name="hcf_contact_name"
        value="<?php echo esc_attr( get_post_meta(get_the_ID(), 'hcf_contact_name',true));?>">
    </p>
    <p class="meta-options hcf_field">
        <lebal for="hcf_contact_email">Contact Email </lebal>
        <input id="hcf_contact_email" type="text" name="hcf_contact_email" value="<?php echo esc_attr(get_post_meta( get_the_ID(),true
        ));?>">
    </p>
    <p class="meta-options hcf_field">
        <lebal for="hcf_contact_number">Contact Phone No </lebal>
        <input id="hcf_contact_number" type="text" name="hcf_contact_number" value="<?php echo esc_attr(get_post_meta( get_the_ID(),true
        ));?>">
    </p>
    <p class="meta-options hcf_field">
        <lebal for="hcf_date">Date</lebal>
        <input id="hcf_date" type="date" name="hcf_date"
        value="<?php echo esc_attr( get_post_meta(get_the_ID(),'hcf_date', true)); ?>">
    </p>
</div>


