<?php get_header()?>


  
    <section class="latest ">
          <div class="container">
              <div class="latest__grid">
                  <div class="latest__main">
                  <!-- MAIN BANNER -->
                  <?php 
                    $main = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_key' => 'grouping',
                        'meta_value' => 'bannermain'
                    ))
                  ?>

                  <?php if($main->have_posts()) : while($main->have_posts()) : $main->the_post()?>  


                      <article class="card card--md latest--md">
                          <!-- <img src="https://source.unsplash.com/random/500x500?fashion" alt=""> -->

                          <?php 
                            if(has_post_thumbnail()){
                                the_post_thumbnail();
                            }
                          ?>

                          <ul class="card__info">
                              <li>
                                  <span class="date"><?php the_date()?></span>
                                  <span class="dot"></span> 
                                  <span class="time"><?php echo get_post_meta(get_the_ID() ,'reading', true) ?>
                                  </span> 
                              </li>
                              <li>
                                By: <?php echo get_the_author_meta('first_name')?> <?php echo get_the_author_meta('last_name')?>
                              </li>
                          </ul>
                          <h2><?php the_title()?></h2>
                          <p><?php the_content()?></p>
                      </article>


                      <?php 
                          endwhile;
                      else:
                          echo "no post";
                      endif;
                      ?>

                    <!-- END OF MAIN BANNER -->


                  </div>
                  <div class="latest__side">


                <!-- START SIDE BANNER -->
                <?php 
                    $bannerside = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 2,
                        'meta_query' => array(
                            array(
                                'key' => "grouping",
                                'value' => "bannerside",
                                'compare' => "="
                            )
                        )
                    ))
                ?>
                <?php if($bannerside->have_posts()) : while($bannerside->have_posts()) : $bannerside->the_post()?>

                      <article class="card card--sm latest--sm">
                          <!-- <img src="https://source.unsplash.com/random/300x310?fashion" alt=""> -->
                          <?php 
                            if(has_post_thumbnail()){
                                the_post_thumbnail('', array(
                                    'class' => 'img-sm',
                                    'alt' => get_the_title()
                                ));
                            }
                          ?>

                          <ul class="card__info">
                              <li>
                                  <span class="date"><?php echo get_the_date('M j, Y');?></span>
                                  <span class="dot"></span> 
                                  <span class="time"><?php echo get_post_meta(get_the_ID() ,'reading', true) ?>
                                  </span> 
                              </li>
                              <li>
                                By: <?php echo get_the_author_meta('first_name')?> <?php echo get_the_author_meta('last_name')?>
                              </li>
                          </ul>
                          <h4><?php the_title()?></h4>
                          <p><? the_content()?></p>
                      </article>



                      <?php
                            endwhile;
                        else:
                            echo "No more post";
                        endif;         
                      ?>


                  <!-- END OF BANNER SIDE -->



                  </div>
              </div>
          </div>
    </section>



    <section class="trending py--10">
        <div class="container">
            <h2 class="block__header align--left">Hot Trending Arcticle</h2>
                      
            <!-- START SIDE TRENDING -->
                <?php 
                    $trending = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'meta_query' => array(
                            array(
                                'key' => "grouping",
                                'value' => "trending",
                                'compare' => "="
                            )
                        )
                    ))
                ?>
                <?php if($trending->have_posts()) : while($trending->have_posts()) : $trending->the_post()?>



            <div class="trending__card card card--full">
                <ul class="card__info--full">
                    <li><small>Fashion</small></li>
                    <li><span><?php echo get_the_date('m.d.y');?></span>  <span>by: <?php echo get_the_author_meta('first_name')?> <?php echo get_the_author_meta('last_name')?></span></li>
                </ul>
                <h3><?php the_title()?></h3>
                <!-- <img src="https://source.unsplash.com/random/419x209?fashion" alt=""> -->

                <?php 
                  if(has_post_thumbnail()){
                      the_post_thumbnail('', array(
                          'class' => 'img-sm',
                          'alt' => get_the_title()
                      ));
                  }
                ?>
            </div>

            <?php
                endwhile;
              else:
                  echo "No more post";
              endif;         
            ?>


          <!-- END OF TRENDING -->



        </div>
    </section>

    <section class="story py--5">
        <div class="container">
            <h2 class="block__header align--center">The Latest Stories</h2>

            <div class="story__grid">
              <!-- START SIDE LATEST -->
                <?php 
                    $latest = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_query' => array(
                            array(
                                'key' => "grouping",
                                'value' => "latest",
                                'compare' => "="
                            )
                        )
                    ))
                ?>
                <?php if($latest->have_posts()) : while($latest->have_posts()) : $latest->the_post()?>

                <article class="card card--xs story-a">
                    <!-- <img src="https://source.unsplash.com/random/370x230?fashion" alt=""> -->
                    <?php 
                      if(has_post_thumbnail()){
                          the_post_thumbnail('', array(
                              'class' => 'img-sm',
                              'alt' => get_the_title()
                          ));
                      }
                    ?>
                    <ul class="card__info">
                        <li>
                            <span class="date"><?php echo get_the_date('M j, Y');?></span>
                            <span class="dot"></span> 
                            <span class="time"><?php echo get_post_meta(get_the_ID() ,'reading', true) ?></span> 
                        </li>
                        <li>
                            By: <?php echo get_the_author_meta('first_name')?> <?php echo get_the_author_meta('last_name')?>
                        </li>
                    </ul>
                    <h4><?php the_content()?></h4>
                
                </article>

                <?php
                      endwhile;
                    else:
                        echo "No more post";
                    endif;         
                ?>




                <?php 
                  $latest2 = new WP_Query(array(
                      'post_type' => 'post',
                      'posts_per_page' => 1,
                      'meta_query' => array(
                        array(
                            'key' => "grouping",
                            'value' => "latest2",
                            'compare' => "="
                        )
                      )
                  ))
                ?>
                <?php if($latest2->have_posts()) : while($latest2->have_posts()) : $latest2->the_post()?>
                <article class="card card--xs story-b">
                    <!-- <img src="https://source.unsplash.com/random/370x630?fashion" alt=""> -->
                    <?php 
                      if(has_post_thumbnail()){
                          the_post_thumbnail('', array(
                              'class' => 'img-sm',
                              'alt' => get_the_title()
                          ));
                      }
                    ?>
                    <ul class="card__info">
                        <li>
                            <span class="date"><?php echo get_the_date('M j, Y');?></span>
                            <span class="dot"></span> 
                            <span class="time"><?php echo get_post_meta(get_the_ID() ,'reading', true) ?></span> 
                        </li>
                        <li>
                            By: <?php echo get_the_author_meta('first_name')?> <?php echo get_the_author_meta('last_name')?>
                        </li>
                    </ul>
                    <h4><?php the_content()?></h4>
                
                </article>

                <?php
                      endwhile;
                    else:
                        echo "No more post";
                    endif;         
                ?>


                <?php 
                  $latest3 = new WP_Query(array(
                      'post_type' => 'post',
                      'posts_per_page' => 1,
                      'meta_query' => array(
                        array(
                            'key' => "grouping",
                            'value' => "latest3",
                            'compare' => "="
                        )
                      )
                  ))
                ?>
                <?php if($latest3->have_posts()) : while($latest3->have_posts()) : $latest3->the_post()?>
                <article class="card card--xs story-c">
                    <!-- <img src="https://source.unsplash.com/random/370x231?fashion" alt=""> -->
                    <?php 
                      if(has_post_thumbnail()){
                          the_post_thumbnail('', array(
                              'class' => 'img-sm',
                              'alt' => get_the_title()
                          ));
                      }
                    ?>
                    <ul class="card__info">
                        <li>
                            <span class="date"><?php echo get_the_date('M j, Y');?></span>
                            <span class="dot"></span> 
                            <span class="time"><?php echo get_post_meta(get_the_ID() ,'reading', true) ?></span> 
                        </li>
                        <li>
                            By: <?php echo get_the_author_meta('first_name')?> <?php echo get_the_author_meta('last_name')?>
                        </li>
                    </ul>
                    <h4><?php the_content()?></h4>
                
                </article>

                <?php
                      endwhile;
                    else:
                        echo "No more post";
                    endif;         
                ?>


                <?php 
                  $latest4 = new WP_Query(array(
                      'post_type' => 'post',
                      'posts_per_page' => 1,
                      'meta_query' => array(
                        array(
                            'key' => "grouping",
                            'value' => "latest4",
                            'compare' => "="
                        )
                      )
                  ))
                ?>
                <?php if($latest4->have_posts()) : while($latest4->have_posts()) : $latest4->the_post()?>
                <article class="card card--xs story-d">
                    <!-- <img src="https://source.unsplash.com/random/370x232?fashion" alt=""> -->
                    <?php 
                      if(has_post_thumbnail()){
                          the_post_thumbnail('', array(
                              'class' => 'img-sm',
                              'alt' => get_the_title()
                          ));
                      }
                    ?>
                    <ul class="card__info">
                        <li>
                            <span class="date"><?php echo get_the_date('M j, Y');?></span>
                            <span class="dot"></span> 
                            <span class="time"><?php echo get_post_meta(get_the_ID() ,'reading', true) ?></span> 
                        </li>
                        <li>
                            By: <?php echo get_the_author_meta('first_name')?> <?php echo get_the_author_meta('last_name')?>
                        </li>
                    </ul>
                    <h4><?php the_content()?></h4>
                
                </article>

                <?php
                      endwhile;
                    else:
                        echo "No more post";
                    endif;         
                ?>


                <?php 
                  $latest5 = new WP_Query(array(
                      'post_type' => 'post',
                      'posts_per_page' => 1,
                      'meta_query' => array(
                        array(
                            'key' => "grouping",
                            'value' => "latest5",
                            'compare' => "="
                        )
                      )
                  ))
                ?>
                <?php if($latest5->have_posts()) : while($latest5->have_posts()) : $latest5->the_post()?>
                <article class="card card--xs story-e">
                    <!-- <img src="https://source.unsplash.com/random/370x233?fashion" alt=""> -->

                    <?php 
                      if(has_post_thumbnail()){
                          the_post_thumbnail('', array(
                              'class' => 'img-sm',
                              'alt' => get_the_title()
                          ));
                      }
                    ?>
                    <ul class="card__info">
                        <li>
                            <span class="date"><?php echo get_the_date('M j, Y');?></span>
                            <span class="dot"></span> 
                            <span class="time"><?php echo get_post_meta(get_the_ID() ,'reading', true) ?></span> 
                        </li>
                        <li>
                            By: <?php echo get_the_author_meta('first_name')?> <?php echo get_the_author_meta('last_name')?>
                        </li>
                    </ul>
                    <h4><?php the_content()?></h4>
                
                </article>

                <?php
                      endwhile;
                    else:
                        echo "No more post";
                    endif;         
                ?>



            </div>
        </div>
    </section>

    <section class="subscribe">
        <div class="container">
            <div class="subscribe__wrapper">
                <h2>Subscribe to get more</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, tempore magni voluptate quam illum id ad temporibus itaque fuga necessitatibus</p>

                <ul class="d--flex justify--center">
                    <li class="mx--1"><a href="#" class="btn btn--light">Subscribe Now</a></li>
                    <li class="mx--1"><a href="#" class="btn btn--outline">Leader More</a></li>
                </ul>
            </div>
        </div>
    </section>

















<?php get_footer() ?>