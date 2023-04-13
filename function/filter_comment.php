<?php
//Comment Field Order
add_filter('comment_form_default_fields', 'mo_comment_fields_custom_html');
function mo_comment_fields_custom_html( $fields ) {
   //$comment_field = $fields['comment'];
   // $author_field = $fields['author'];
   //$email_field = $fields['email'];
   //$url_field = $fields['url'];
   //$cookies_field = $fields['cookies'];
   // first unset the existing field
   unset( $fields['comment_field'] );
   unset( $fields['author'] );
   unset( $fields['email'] );
   unset( $fields['url'] );
   
//$fields = [
//   'auther'=>'<p class="form-group col-md-4">'.
//   '<input placeholder="نام شما(الزامی)" id ="auther" name="auther" type="text" value="'.esc_attr($commenter),
//   'email'=>'<p class="form-group col-md-4">'.
//   '<input placeholder="ایمیل شما(الزامی)" id ="email" name="email"'.($html5 ? 'type="url"': 'type="text"'),
//   'url'=>'<p class="form-group col-md-4">'.
//   '<input placeholder=" وب سایت" id ="url" name="url"'.($html5 ? 'type="url"': 'type="text"'),
//   'comment_field'=>'<p class="form-group col-md-4">'.
//   '<textarea placeholder=" شما شما... " id ="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true"',
//];
//   // done ordering, now return the fields:
//   return $fields;
}
//add_filter('comment_form_defaults', 'mo_remove_default_comment_field',10,1)

?>