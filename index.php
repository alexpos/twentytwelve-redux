<?php
/**
 * Template Name: Show Text Options
 *
 */

get_header(); ?>
<div id="primary" class="site-content-full">
<div id="content" role="main">
<article>

<?php if (! is_dir(trailingslashit( CHILD_THEME_DIR ) . 'admin/')): ?>
<h1>Add the Redux framework to the theme, see the readme!</h1>
<?php else: ?>

  <header class="entry-header">
    <h3 class="fold">Redux Options Framework</h3>
  </header><!-- .entry-header -->

  <div class="entry-content">

  <p>To start we will call the default our options with the default <b>opt_name:</b> <b>twenty_eleven2</b> (line 113 in options.php)</p>

  <?php $options = get_option('twenty_eleven2'); ?>

  <h3 class="fold"><a>Text Fields</a></h3>
    <div class="section">

    <p>Text fields are pretty much all the same, here several examples, the big difference with the other ones a is validation in the admin-screen, not getting back the info later.</p>

    <dl>
    <dt>type: text</dt>
    <dd>echo $options['1']: <?php echo $options['1']; ?></dd>
    </dl>

    <dl>
    <dt>type: multi-text</dt>
    <dd>Mult-text should be looped: foreach ($options['multi_text'] as $key => $value) {echo $key . ' - ' . $value; }</dd>
    <dd>
    <?php
    if ( is_array($options['multi_text']) ) {
        echo '<ul>';
        foreach ($options['multi_text'] as $key => $value) {
          echo '<li>$options[\'multi_text\']' . ' [' . $key . '] = ' . $value . '</li>';
        }
        echo '</ul>';
    } else {
        echo '<p>There are no saved values yet, add some value to see how multi-text behaves.</p>';
    }
    ?>
    </dd>
    </dl>

    <dl>
    <dt>type: textarea</dt>
    <dd>echo $options['5']: <?php echo $options['5']; ?></dd>
    </dl>

    </div>

  <h3 class="fold"><a>Radio/Checkbox Fields</a></h3>
    <div class="section">

    <dl>
      <dt>type: checkbox</dt>
      <dd>echo $options['10']: <?php echo ($options['10']); ?></dd>
    </dl>

    <dl>
      <dt>type: multi_checkbox</dt>
      <dd>Mult-checkbox should be looped: foreach ($options['11'] as $key => $value) {echo $key . ' - ' . $value; } </dd>
      <dd>
        <?php
        echo '<ul>';
        foreach ($options['11'] as $key => $value) {
          echo '<li>$options[11]' . ' [' . $key . '] = ' . $value . '</li>';
        }
        echo '</ul>';
        ?>
      </dd>
    </dl>

    </div>
    <h3 class="fold"><a>Select Fields</a></h3>
    <div class="section">

    <dl>
      <dt>type: select</dt>
      <dd>echo $options['14']: <?php echo ($options['14']); ?></dd>
    </dl>

    <dl>
      <dt>type: multi_select</dt>
      <dd>Mult-select should be looped: foreach ($options['15'] as $key => $value) {echo $key . ' - ' . $value; } </dd>
      <dd>
        <?php
        echo '<ul>';
        foreach ($options['15'] as $key => $value) {
          echo '<li>$options[15]' . ' [' . $key . '] = ' . $value . '</li>';
        }
        echo '</ul>';
        ?>
      </dd>
    </dl>

    </div>
    <h3 class="fold"><a>Custom Fields</a></h3>
    <div class="section">

    <dl>
      <dt>type: color</dt>
      <dd>echo $options['16']: <?php echo $options['16']; ?>
      <div class="box" style="background-color:<?php echo ($options['16']); ?>;"><?php echo ($options['16']); ?></div> </dd>
    </dl>

    <dl>
      <dt>type: color_gradient</dt>
      <dd>echo $options['color_gradient'][from] / [to]: <?php echo $options['color_gradient'][from]." / ".$options['color_gradient'][to]; ?>
      <style type="text/css" media="screen">
            .gradbox {

         /* fallback/image non-cover color */
         background-color: <?php echo $options['color_gradient'][to]; ?>;

         /* fallback image - should be used, just not in this demo */
         /*background-image: url(images/fallback-gradient.png);*/

         /* Safari 4+, Chrome 1-9 */
         background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(<?php echo $options['color_gradient'][from]; ?>), to(<?php echo $options['color_gradient'][to]; ?>));

         /* Safari 5.1+, Mobile Safari, Chrome 10+ */
         background-image: -webkit-linear-gradient(top, <?php echo $options['color_gradient'][from]; ?>, <?php echo $options['color_gradient'][to]; ?>);

         /* Firefox 3.6+ */
         background-image: -moz-linear-gradient(top, <?php echo $options['color_gradient'][from]; ?>, <?php echo $options['color_gradient'][to]; ?>);

         /* IE 10+ */
         background-image: -ms-linear-gradient(top, <?php echo $options['color_gradient'][from]; ?>, <?php echo $options['color_gradient'][to]; ?>);

         /* Opera 11.10+ */
         background-image: -o-linear-gradient(top, <?php echo $options['color_gradient'][from]; ?>, <?php echo $options['color_gradient'][to]; ?>);
      }
      </style>
      <div class="box gradbox"></div>
      </dd>
    </dl>

    <dl>
      <dt>type: upload</dt>
      <dd>echo $options['19']: <?php echo $options['19']; ?>
    </dl>

    <dl>
      <dt>type: pages_select (or posts_select)</dt>
      <dd>echo $options['pages_select']: <?php echo "id: " . $options['pages_select'] . " title: " . get_the_title($options['pages_select']); ?>
    </dl>

    <dl>
      <dt>type: pages_multi_select (or posts_multi_select)</dt>
      <dd>Pages_multi_select should be looped: foreach ($options['pages_multi_select'] as $key => $value) {echo $key . ' - ' . $value; } </dd>
      <dd>
        <?php
        echo '<ul>';
        foreach ($options['pages_multi_select'] as $key => $value) {
          echo '<li>$options[pages_multi_select]' . ' [' . $key . '] = ' . $value . ' title: ' . get_the_title($value) . '</li>';
        }
        echo '</ul>';
        ?>
      </dd>
    </dl>

    <dl>
      <dt>type: tags_select</dt>
      <dd>echo $options['19']: <?php echo $options['tags_select']; //TODO: no idea how to get a tag title from an id ?>
    </dl>

    <dl>
      <dt>type: tags_multi_select</dt>
      <dd>Tags_multi_select should be looped: foreach ($options['tags_multi_select'] as $key => $value) {echo $key . ' - ' . $value; } </dd>
      <dd>
        <?php
        echo '<ul>';
        foreach ($options['tags_multi_select'] as $key => $value) {
          echo '<li>$options[tags_multi_select]' . ' [' . $key . '] = ' . $value . '</li>';
        }
        echo '</ul>';
        ?>
      </dd>
    </dl>

    <dl>
      <dt>type: cats_select</dt>
      <dd>echo $options['19']: <?php echo $options['cats_select'] . ' title: ' . get_the_category_by_id($options['cats_select']); ?>
    </dl>

    <dl>
      <dt>type: cats_multi_select</dt>
      <dd>Cats_multi_select should be looped: foreach ($options['pages_multi_select'] as $key => $value) {echo $key . ' - ' . $value; }
        <?php
        echo '<ul>';
        foreach ($options['cats_multi_select'] as $key => $value) {
          echo '<li>$options[cats_multi_select]' . ' [' . $key . '] = ' . $value . ' title: ' . get_the_category_by_id($value) . '</li>';
        }
        echo '</ul>';
        ?>
      </dd>
    </dl>

    <dl>
      <dt>type: menu_select</dt>
      <dd>echo $options['menu_select']: <?php echo $options['menu_select']; ?>
      <br/>To actually use the menu, use:
      <pre>$menu_ID = $options['menu_select'];<br/>$menu_args = array('menu' => $menu_ID );<br/>wp_nav_menu( $menu_args );</pre></dd>
    </dl>

    <dl>
      <?php
        //TODO: Use something likr this: http://wptheming.com/2012/06/loading-google-fonts-from-theme-options/
        $gf='http://fonts.googleapis.com/css?family='.$options['google_webfonts'];
        wp_register_style('googleFonts', $gf );
        wp_enqueue_style( 'googleFonts');
      ?>
      <style type="text/css" media="screen">
      .gfstyle {
        font-family: "<?php echo str_replace( "+"," ",$options['google_webfonts']); ?>", Serif;
        }
      </style>
      <dt>type: google_webfonts</dt>
      <dd>echo $options['google_webfonts']: <span class="gfstyle"><?php echo $options['google_webfonts']; ?></span></dd>
    </dl>

    </div>

  </div>

</article>
</div><!-- #content -->
</div><!-- #primary -->
<script>
  jQuery( document ).ready( function( $ ) {
    $('.section').hide();
    $("h3.fold").click(function () {
      $(this).toggleClass("active");
      $(this).nextUntil(".fold").slideToggle("fast");
    });

  } );
</script>
<?php endif; ?>
<?php get_footer(); ?>
