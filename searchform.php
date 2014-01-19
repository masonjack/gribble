<?php
/**
 * The template for the search form.
 *
 * @package WordPress
 * @subpackage gribble 
*/
?>

<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <input type="text" value="" name="s" id="s" placeholder="Search terms go here" />
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
</form>
