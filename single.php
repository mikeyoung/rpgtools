<?php
/**
 * The template for displaying all single posts.
 *
 * @package Libre
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<table class="thac0-table">
				<tr>
					<th>1</th>
					<th>2</th>
					<th>3</th>
					<th>4</th>
					<th>5</th>
				</tr>
				<tr>
					<td>19</td>
					<td>18</td>
					<td>17</td>
					<td>16</td>
					<td>15</td>
				</tr>
			</table>
			<table class="thac0-table">
				<tr>
					<th>6</th>
					<th>7</th>
					<th>8</th>
					<th>9</th>
					<th>10</th>
				</tr>
				<tr>
					<td>14</td>
					<td>13</td>
					<td>12</td>
					<td>11</td>
					<td>10</td>
				</tr>
			</table>
			<table class="thac0-table">
				<tr>
					<th>11</th>
					<th>12</th>
					<th>13</th>
					<th>14</th>
					<th>15</th>
				</tr>
				<tr>
					<td>9</td>
					<td>8</td>
					<td>7</td>
					<td>6</td>
					<td>5</td>
				</tr>
			</table>
			<table class="thac0-table">
				<tr>
					<th>16</th>
					<th>17</th>
					<th>18</th>
					<th>19</th>
					<th>20</th>
				</tr>
				<tr>
					<td>4</td>
					<td>3</td>
					<td>2</td>
					<td>1</td>
					<td>0</td>
				</tr>
			</table>
			<br class="clear" />

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
