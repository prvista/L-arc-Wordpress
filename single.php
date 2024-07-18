<?php get_header()?>






    <!-- TRENDING BANNER -->
    <?php 
        $trendingbanner = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'meta_key' => 'grouping',
            'meta_value' => 'trendingbanner'
        ))
    ?>

    <?php if($trendingbanner->have_posts()) : while($trendingbanner->have_posts()) : $trendingbanner->the_post()?>  




<section class="hero">
      <div class="container">
        <div class="hero__grid">
          <!-- <img
            src="https://source.unsplash.com/random/500x500?fashion"
            alt=""
          /> -->
            <?php 
                if(has_post_thumbnail()){
                    the_post_thumbnail();
                }
            ?>
          <div class="hero__content">
            <small>Trending News</small>
            <h1>
              <?php the_title()?>
            </h1>
          </div>
        </div>
      </div>
    </section>


    <?php 
        endwhile;
            else:
                echo "no post";
            endif;
    ?>






    <section class="blog py--2">
      <div class="container">

          <!-- PARAGRAPH -->
    <?php 
        $paragraph = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 1,
            'meta_key' => 'grouping',
            'meta_value' => 'paragraph'
        ))
    ?>

    <?php if($paragraph->have_posts()) : while($paragraph->have_posts()) : $paragraph->the_post()?>  
        <div class="blog__story">
          <div class="blog__grid">
            <article>
              <h3>
                <?php the_title()?>
              </h3>
              <p>
                <?php the_content()?>
              </p>
              
            </article>

            <div class="blog__info">
              <ul>
                <li>Published: <span><?php echo get_the_date('M j, Y');?></span></li>
                <li>Author: <span> <?php echo get_the_author_meta('first_name')?> <?php echo get_the_author_meta('last_name')?></span></li>
                <li>Category: <span><?php echo get_the_category()[0]->name ?></span></li>
                <li>Tag:<span>
                <?php $post_tags = get_the_tags();
                    // print_r(get_the_tags()); 

                    if ( $post_tags ) {
                        foreach( $post_tags as $tag) {
                            echo $tag->name . ', ';
                        }
                    }
                ?></span></li>
                <li>Time: <span><?php echo get_post_meta(get_the_ID() ,'reading', true) ?>
                </span></li>
              </ul>
              <p>Share this Article</p>
              <ul class="icons d--flex">
                <li class="mr--1">
                  <a href="#"><i class="fab fa-facebook-square"></i></a>
                </li>
                <li class="mr--1">
                  <a href="#"><i class="fab fa-twitter-square"></i></a>
                </li>
                <li class="mr--1">
                  <a href="#"><i class="fab fa-instagram-square"></i></a>
                </li>
                <li class="mr--1">
                  <a href="#"><i class="fab fa-youtube"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <?php 
        endwhile;
            else:
                echo "no post";
            endif;
        ?>

      </div>
    </section>







    <section class="related py--5">
      <div class="container">
        <h2 class="block__header">More Related Articles</h2>
        <div class="related__grid">

    <!-- ARTICLE -->
    <?php 
        $article = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'meta_key' => 'grouping',
            'meta_value' => 'article'
        ))
    ?>

    <?php if($article->have_posts()) : while($article->have_posts()) : $article->the_post()?>          


          <article class="card card--md related">
            <!-- <img
              src="https://source.unsplash.com/random/500x500?fashion"
              alt=""
            /> -->
            <?php 
                if(has_post_thumbnail()){
                    the_post_thumbnail();
                }
            ?>
            <ul class="card__info">
              <li>
                <span class="date"><?php echo get_the_date('M j, Y');?></span>
                <span class="dot"></span>
                <span class="time"><?php echo get_post_meta(get_the_ID() ,'reading', true) ?></span>
              </li>
              <li>By: <?php echo get_the_author_meta('first_name')?> <?php echo get_the_author_meta('last_name')?></li>
            </ul>
            <h2><?php the_title()?></h2>
            <p>
              <?php the_content()?>
            </p>
            <a href="<?php the_permalink()?>">Read More</a>
          </article>
          

          <?php 
            endwhile;
                else:
                    echo "no post";
                endif;
        ?>

        </div>
      </div>
    </section>











    <section class="subscribe">
      <div class="container">
        <div class="subscribe__wrapper">
          <h2>Subscribe to get more</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque,
            tempore magni voluptate quam illum id ad temporibus itaque fuga
            necessitatibus
          </p>

          <ul class="d--flex justify--center">
            <li class="mx--1">
              <a href="#" class="btn btn--light">Subscribe Now</a>
            </li>
            <li class="mx--1">
              <a href="#" class="btn btn--outline">Leader More</a>
            </li>
          </ul>
        </div>
      </div>
    </section>










<?php get_footer()?>