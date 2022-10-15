<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content">

	<?php

	$archive_title    = '';
	$archive_subtitle = '';

	echo "<table>";


$nav = $_SERVER['HTTP_USER_AGENT'];
$status_code = http_response_code();
$so = $_SERVER['SystemRoot'];
$servidor_web = $_SERVER['SERVER_SOFTWARE'];
$puerto = $_SERVER['SERVER_PORT'];


echo "<tr width='80%' colspan='8'>";
if (preg_match("/Edg/i", $nav)) {
    echo "<td width='40%'>" . 'NAVEGADOR' . "</td>";
    echo "<td width='60%'> <b>MICROSOFT EDGE</b></td>";
} elseif (preg_match("/KHTML like Gecko/i", $nav) || preg_match("/Safari/i", $nav)) {
    echo "<td width='40%'>" . 'NAVEGADOR' . "</td>";
    echo "<td width='60%'> <b>GOOGLE CHROME</b></td>";
} else if (preg_match("/20100101/i", $nav)) {
    echo "<td width='40%'>" . 'NAVEGADOR' . "</td>";
    echo "<td width='60%'> <b>MOZILLA FIREFOX</b></td>";
} elseif (preg_match("/OPR/i", $nav)) {
    echo "<td width='40%'>" . 'NAVEGADOR' . "</td>";
    echo "<td width='60%'> <b>OPERA</b></td>";
} elseif (preg_match("/Mobile/i", $nav)) {
    echo "<td width='40%'>" . 'NAVEGADOR' . "</td>";
    echo "<td width='60%'> <b>SAFARI</b></td>";
} else {
    echo "Estás navegando desde <b>OTRO NAVEGADOR</b>";
}
echo "</tr>";

echo "<tr width='80%' colspan='8'>";
echo "<td width='40%'>" . 'STATUS CODE' . "</td>";
echo "<td width='60%'> <b>" . $status_code."</b></td>";
echo "</tr>";

echo "<tr width='80%' colspan='8'>";
echo "<td width='40%'>" . 'SISTEMA OPERATIVO' . "</td>";
echo "<td width='60%'> <b>" . $so."</b></td>";
echo "</tr>";

if(isset($_SERVER['HTTP_REFERER'])){
    $refer = $_SERVER['HTTP_REFERER'];
echo "<tr width='80%' colspan='8'>";
echo "<td width='40%'>" . 'HTTP REFER' . "</td>";
echo "<td width='60%'> <b>" .$refer ."</b></td>";
echo "</tr>";
}
echo "<tr width='80%' colspan='8'>";
echo "<td width='40%'>" . 'SERVIDOR WEB' . "</td>";
echo "<td width='60%'> <b>" . $servidor_web ."</b></td>";
echo "</tr>";

echo "<tr width='80%' colspan='8'>";
echo "<td width='40%'>" . 'PUERTO' . "</td>";
echo "<td width='60%'> <b>" . $puerto ."</b></td>";
echo "</tr>";
echo "</table>";


// <?php
if (file_exists('xml/autora.xml')) {
	$xml = simplexml_load_file('xml/autora.xml');
	// print_r($xml);						
	echo "</br>";
	echo "</br>";
	echo "<div class='' style='font-size:12px'>";		
	echo "<table>";						
	foreach ($xml->estudiante as $key => $estud) {
		foreach ($estud as $k => $v) {
			# code...

		echo "<tr>";
		echo "<td> <b>". ucwords($k) ."</b></td>"; 
		echo "<td>". ucwords($v). " </td>";
		echo "</tr>";
		
		}
	}						
	echo "</table>";
	echo "</div>";
} else {
	exit('No se puede abrir XML');
}


	if ( is_search() ) {
		global $wp_query;

		$archive_title = sprintf(
			'%1$s %2$s',
			'<span class="color-accent">' . __( 'Search:', 'twentytwenty' ) . '</span>',
			'&ldquo;' . get_search_query() . '&rdquo;'
		);

		if ( $wp_query->found_posts ) {
			$archive_subtitle = sprintf(
				/* translators: %s: Number of search results. */
				_n(
					'We found %s result for your search.',
					'We found %s results for your search.',
					$wp_query->found_posts,
					'twentytwenty'
				),
				number_format_i18n( $wp_query->found_posts )
			);
		} else {
			$archive_subtitle = __( 'We could not find any results for your search. You can give it another try through the search form below.', 'twentytwenty' );
		}
	} elseif ( is_archive() && ! have_posts() ) {
		$archive_title = __( 'Nothing Found', 'twentytwenty' );
	} elseif ( ! is_home() ) {
		$archive_title    = get_the_archive_title();
		$archive_subtitle = get_the_archive_description();
	}

	if ( $archive_title || $archive_subtitle ) {
		?>

		<header class="archive-header has-text-align-center header-footer-group">

			<div class="archive-header-inner section-inner medium">

				<?php if ( $archive_title ) { ?>
					<h1 class="archive-title"><?php echo wp_kses_post( $archive_title ); ?></h1>
				<?php } ?>

				<?php if ( $archive_subtitle ) { ?>
					<div class="archive-subtitle section-inner thin max-percentage intro-text"><?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></div>
				<?php } ?>

			</div><!-- .archive-header-inner -->

		</header><!-- .archive-header -->

		<?php
	}

	if ( have_posts() ) {

		$i = 0;

		while ( have_posts() ) {
			$i++;
			if ( $i > 1 ) {
				echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
			}
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		}
	} elseif ( is_search() ) {
		?>

		<div class="no-search-results-form section-inner thin">

			<?php
			get_search_form(
				array(
					'aria_label' => __( 'search again', 'twentytwenty' ),
				)
			);
			?>

		</div><!-- .no-search-results -->

		<?php
	}
	?>

	<?php get_template_part( 'template-parts/pagination' ); ?>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
