<form class="form-inline my-2 my-lg-0" action="<?= esc_url(home_url('/')) ?>">
    <input class="form-control mr-sm-2" name="s" type="search" placeholder="<?php _e('Search', 'justgreat') ?>" aria-label="<?php _e('Search', 'justgreat') ?>" value="<?= get_search_query() ?>">
    <button class="btn btn-light my-2 my-sm-0" type="submit"><?php _e('Search', 'justgreat') ?></button>
</form> 

