<?php
/**
* Template Name: Contact page
*
* @package WordPress
* @subpackage Justgreat
*/
?>

<?php get_header() ?>




<div class="content ml-2 mt-4 mb-4">
            <p class="h3">Contact us</p>
            <form action="" method="POST" class="mt-4 ml-4">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Email</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Object</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Why do you contact us">
                  </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Your message</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Send</button>
              </form>
              <p class="p-3 mb-2 ml-4 bg-danger text-white"><?php _e('NOTE: A contact form such as this would require some way of emailing the input to an email address. In a close futur this won\'t be necessary but for now you\'ll have to install a form extension', 'justgreat') ?></p>
        </div>



<?php get_footer() ?>