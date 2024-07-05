<?php
get_header();
?>
<div class="" style="display: flex; flex-wrap:wrap; justify-content:space-between;">
    <!-- posts list -->
    <?php if(have_posts()) : ?>
    <div id="posts-list" class="cf">
      <?php while(have_posts()) : the_post();
       get_template_part('/template-parts/posts/post-card');
       endwhile;
       else : ?>
       <p>Nothing not found</p>
       <?php endif; ?>
      <!-- page-navigation -->
      <div class="page-navigation cf">
        <div class="nav-next"><a href="#">Older Entries</a></div>
        <div class="nav-previous"><a href="#">Newer Entries</a></div>
      </div>
      <!--ENDS page-navigation -->
    </div>

    <!-- ENDS posts list -->
    <!-- sidebar -->
    <aside id="sidebar">
      <ul>
        <li class="block">
          <h4 class="heading">Sponsors</h4>
          <div class="ads cf"> <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/dummies/themeforest.gif" alt=""></a> <a href="#" class="last"><img src="<?php echo get_template_directory_uri();?>/img/dummies/mojo.jpeg" alt=""></a> <a href="#"><img src="<?php echo get_template_directory_uri();?>/img/dummies/themeforest.gif" alt=""></a> <a href="#" class="last"><img src="<?php echo get_template_directory_uri();?>/img/dummies/mojo.jpeg" alt=""></a> </div>
        </li>
        <li class="block">
          <h4 class="heading">Text Widget</h4>
          Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. </li>
        <li class="block">
          <h4 class="heading">Categories</h4>
          <ul>
            <li class="cat-item"><a href="#">Film and video<span class="post-counter"> (2)</span></a></li>
            <li class="cat-item"><a href="#">Print<span class="post-counter"> (2)</span></a></li>
            <li class="cat-item"><a href="#">Photo and lomo<span class="post-counter"> (2)</span></a></li>
            <li class="cat-item"><a href="#">Habitant morbi<span class="post-counter"> (2)</span></a></li>
            <li class="cat-item"><a href="#">Film and video<span class="post-counter"> (2)</span></a></li>
            <li class="cat-item"><a href="#">Print<span class="post-counter"> (2)</span></a></li>
            <li class="cat-item"><a href="#">Photo and lomo<span class="post-counter"> (2)</span></a></li>
            <li class="cat-item"><a href="#">Habitant morbi<span class="post-counter"> (2)</span></a></li>
          </ul>
        </li>
      </ul>
    </aside>
    <!-- ENDS sidebar -->
    </div>
<?php
get_footer();
?>