<?php
/*
Template Name: Archives Template

Description: Template for displaying all posts, grouping by published month.
*/

get_header();
?>

      <div id=""primary>

         <?php
		$months = array(
			"January", "February", "March", "April", "May", "June", "July",
			"August", "September", "October", "November", "December");

		$current_year = "";
		$current_month = 0 ;

		$posts = get_posts();
		foreach ($posts as $post) :

			$post_date = $post->post_date;
			$space_index = strrpos($post_date, " ");
			$post_date_small = substr($post_date, 0, $space_index);

			$month = substr($post_date_small, 5, 2);
			$month_int = (int) $month;

			$year = substr($post_date, 0, 4);

			if ($year !== $current_year || $current_month !== $month_int) :
				$current_year = $year;
				$current_month = $month_int;
				echo "<h2>" . $months[$month_int - 1] . " " .  $year . "</h2>";
			endif;

			$link = '<article id="post-' . $post->ID . '">'; 
                        $link .= '<a href="' . get_permalink( $post->ID ) . '">';
                        $link .= $post->post_title;
                        $link .= '</a>';
			$link .= '</article>';

			echo $link;
		endforeach;

         ?>

      </div>

<?php
get_sidebar();
get_footer();
?>








