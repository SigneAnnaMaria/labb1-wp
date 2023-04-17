<div class="mobile-search">

    <form id="searchform" class="searchform" method="get" action="<?php echo esc_url(home_url('/')); ?>">

        <div>
            <label class="screen-reader-text" for="s"><?php _e('Sök efter:', 'textdomain'); ?></label>
            <input type="text" name="s" id="s" placeholder="<?php esc_attr_e('Sök efter', 'textdomain'); ?>" />
            <input type="submit" value="<?php esc_attr_e('Sök', 'textdomain'); ?>" />
        </div>

    </form>
</div>