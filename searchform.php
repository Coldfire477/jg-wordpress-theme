<form class="form-inline my-2 my-lg-0" action="<?php echo esc_url(home_url('/')) ?>">
    <input class="form-control mr-sm-2" name="s" type="search" placeholder="<?php esc_attr_e('Search', 'justgreat') ?>" aria-label="<?php esc_attr_e('Search', 'justgreat') ?>" value="<?php echo get_search_query() ?>">
    <button class="btn btn-light my-2 my-sm-0" type="submit"><?php esc_html_e('Search', 'justgreat') ?></button>
</form> 

