<?php
    /*
     *      Osclass – software for creating and publishing online classified
     *                           advertising platforms
     *
     *                        Copyright (C) 2012 OSCLASS
     *
     *       This program is free software: you can redistribute it and/or
     *     modify it under the terms of the GNU Affero General Public License
     *     as published by the Free Software Foundation, either version 3 of
     *            the License, or (at your option) any later version.
     *
     *     This program is distributed in the hope that it will be useful, but
     *         WITHOUT ANY WARRANTY; without even the implied warranty of
     *        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     *             GNU Affero General Public License for more details.
     *
     *      You should have received a copy of the GNU Affero General Public
     * License along with this program.  If not, see <http://www.gnu.org/licenses/>.
     */
?>
</div><!-- content -->
<?php osc_run_hook('after-main'); ?>
</div>
<div id="responsive-trigger"></div>
<!-- footer -->
<div class="clear"></div>
<div id="footer">
    <ul class="resp-toogle">
        <?php if( osc_is_web_user_logged_in() ) { ?>
            <li>
                <?php echo sprintf(__('Hi %s', 'bender'), osc_logged_user_name() . '!'); ?>  &middot;
                <strong><a href="<?php echo osc_user_dashboard_url(); ?>"><?php _e('My account', 'bender'); ?></a></strong> &middot;
                <a href="<?php echo osc_user_logout_url(); ?>"><?php _e('Logout', 'bender'); ?></a>
            </li>
        <?php } else { ?>
            <li><a href="<?php echo osc_user_login_url(); ?>"><?php _e('Login', 'bender') ; ?></a></li>
            <?php if(osc_user_registration_enabled()) { ?>
                <li>
                    <a href="<?php echo osc_register_account_url() ; ?>"><?php _e('Register for a free account', 'bender'); ?></a>
                </li>
            <?php } ?>
        <?php }; ?>
        <li class="publish">
            <a href="<?php echo osc_item_post_url_in_category() ; ?>"><?php _e("Publish your ad for free", 'bender');?></a>
        </li>
    </ul>
    <ul>
    <li>
        <a href="<?php echo osc_contact_url(); ?>"><?php _e('Contact', 'bender') ; ?></a>
    </li>
    <?php
    osc_reset_static_pages() ;
    while( osc_has_static_pages() ) {
        if( !in_array(osc_static_page_slug(), array('publish_ok')) ) { ?>
            <li>
                <a href="<?php echo osc_static_page_url() ; ?>"><?php echo osc_static_page_title() ; ?></a>
            </li>
    <?php
        }
    }
    ?>
    </ul>
    <?php
    if( osc_get_preference('footer_link', 'modern_theme') ) {
        _e('This website is proudly using the <a title="OSClass web" href="http://osclass.org/">classifieds scripts</a> software <strong>OSClass</strong>', 'bender');
    }
    ?>
</div>
<?php osc_run_hook('footer') ; ?>