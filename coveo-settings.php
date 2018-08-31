<?php function coveo_options_page()
{
?>
  <div>
    <?php screen_icon(); ?>
    <h2>Coveo Settings</h2>
    <form method="post" action="options.php">
        <?php settings_fields( 'coveo_options_group' ); ?>
        <h3>General Settings</h3>
        <table class="form-table">
            <tr>
                <th scope="row"><label for="coveo_platform_url">Organization ID</label></th>
                <td><input class="regular-text" type="text" id="coveo_platform_url" name="coveo_platform_url" value="<?php echo get_option('coveo_platform_url'); ?>" /></td>
            </tr>
            <tr>
                <th scope="row"><label for="coveo_organization_id">Organization ID</label></th>
                <td><input class="regular-text" type="text" id="coveo_organization_id" name="coveo_organization_id" value="<?php echo get_option('coveo_organization_id'); ?>" /></td>
            </tr>
            <tr>
                <th scope="row"><label for="coveo_api_key">API Key</label></th>
                <td><input class="regular-text" type="text" id="coveo_api_key" name="coveo_api_key" value="<?php echo get_option('coveo_api_key'); ?>" /></td>
            </tr>
        </table>
        <?php  submit_button(); ?>
    </form>
  </div>
<?php
} ?>