<?php
get_header();
/* Template name: Portfolio */
?>
    <ul id="filter-buttons">
      <li><a href="#" data-filter="*" class="selected">show all</a></li>
      <li><a href="#" data-filter=".web">web</a></li>
      <li><a href="#" data-filter=".print">print</a></li>
      <li><a href="#" data-filter=".design">design</a></li>
      <li><a href="#" data-filter=".photo">photo</a></li>
    </ul>
    <!-- Filter container -->
    <ul id="filter-container" class="feature cf">
      <li class="web print"> <a href="project.html" class="thumb"><img src="<?php echo get_template_directory_uri();?>/img/dummies/430x500a.jpg" alt="">
        <div class="date"><span class="d">23</span><span class="m">Jan</span></div>
        </a>
        <div class="caption">Lorem ipsum dolor amet</div>
      </li>
      <li class="print"> <a href="project.html" class="thumb"><img src="<?php echo get_template_directory_uri();?>/img/dummies/430x500b.jpg" alt="">
        <div class="date"><span class="d">23</span><span class="m">Jan</span></div>
        </a>
        <div class="caption">Lorem ipsum dolor amet</div>
      </li>
      <li class="web"> <a href="project.html" class="thumb"><img src="<?php echo get_template_directory_uri();?>/img/dummies/430x500c.jpg" alt="">
        <div class="date"><span class="d">23</span><span class="m">Jan</span></div>
        </a>
        <div class="caption">Lorem ipsum dolor amet</div>
      </li>
      <li class="web design photo"> <a href="project.html" class="thumb"><img src="<?php echo get_template_directory_uri();?>/img/dummies/430x500d.jpg" alt="">
        <div class="date"><span class="d">23</span><span class="m">Jan</span></div>
        </a>
        <div class="caption">Lorem ipsum dolor amet</div>
      </li>
      <li class="design"> <a href="project.html" class="thumb"><img src="<?php echo get_template_directory_uri();?>/img/dummies/430x500e.jpg" alt="">
        <div class="date"><span class="d">23</span><span class="m">Jan</span></div>
        </a>
        <div class="caption">Lorem ipsum dolor amet</div>
      </li>
      <li class="print photo"> <a href="project.html" class="thumb"><img src="<?php echo get_template_directory_uri();?>/img/dummies/430x500f.jpg" alt="">
        <div class="date"><span class="d">23</span><span class="m">Jan</span></div>
        </a>
        <div class="caption">Lorem ipsum dolor amet</div>
      </li>
    </ul>
    <!-- ENDS Filter container -->
<?php
get_footer();
?>