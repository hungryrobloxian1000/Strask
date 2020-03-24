<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=1170">
        <?php
            require $_SERVER['DOCUMENT_ROOT'].'/inc/req.head.php';
         ?>
         <script>
         $(document).ready(function(){
           $('.ui .item').on('click', function() {
             $('.ui .item').removeClass('active');
             $(this).addClass('active');
           });
         });
       </script>
      </head>
      <body>
        <a name="top"></a>

<div id="app">
           <?php
           include_once $_SERVER['DOCUMENT_ROOT'].'/inc/inc.nav.php';
            ?>
            <section class="hero is-primary is-bold ui raised segment" style="margin-top:-20px; border: 0px !important; border-bottom-left-radius: 5px !important; border-bottom-right-radius: 5px !important;">
            <div class="hero-body is-bold">
<div class="container has-text-centered">
<h1 class="title is-size-3">Catalogue</h1>
</div>
</div>
</section>
<nav class="navbar ui menu " style="margin-top:-20px; border: 0px !important; border-bottom-left-radius: 5px !important; border-bottom-right-radius: 5px !important;">
  <div class="container is-centered">
    <div class="navbar-tabs">
      <a class="navbar-item is-tab is-primary is-active" position="is-centered" href="#" data-toggle="tab" class="item">
        Microsoft
      </a>
      <a class="navbar-item is-primary is-tab" position="is-centered" href="#" data-toggle="tab" class="item">
        Apple
      </a>
      <a class="navbar-item is-primary is-tab" position="is-centered" href="#" data-toggle="tab" class="item">
        Linux
      </a>
      <a class="navbar-item is-primary is-tab" position="is-centered" href="#" data-toggle="tab" class="item">
        Other
      </a>
    </div>
    <div class="navbar-end">
      <div class="navbar-item">
        <a class="ui simple floating link dropdown navbar-item" style="border-radius: 5px 5px 5px 5px !important;">
  <i class="filter icon"></i>
  <span class="text">Filter</span>
  <div class="menu">
    <div class="header">
      Search Issues
    </div>
    <div class="ui left icon input">
      <i class="search icon"></i>
      <input type="text" name="search" placeholder="Search...">
    </div>
    <div class="header">
      <i class="tags icon"></i>
      Filter by tag
    </div>
    <div class="divider"></div>
    <div class="item">
      <div class="ui red empty circular label"></div>
      Important
    </div>
    <div class="item">
      <div class="ui blue empty circular label"></div>
      Announcement
    </div>
    <div class="item">
      <div class="ui black empty circular label"></div>
      Discussion
    </div>
  </div>
</a>
      </div>
    </div>
  </div>
</nav>
    <div class="content" style="margin-top: 20px;">
      <div class="columns is-fullheight">
  <div class="column is-2 is-sidebar-menu">
    <aside class="menu sticky">
      <div id="app" class="container">
        <b-menu>
       <b-menu-list has-text-weight-bold label="Microsoft">
         <div class="ui vertical pointing menu" style="border-radius: 5px 5px 5px 5px !important; display: inline-block;">
   <div class="navbar-item" style="background: #fff; border-radius: 5px 5px 5px 5px !important;">
  <div class="ui transparent icon input">
    <input class="prompt" type="text" placeholder="Search Microsoft...">
    <i class="search link icon"></i>
  </div>
  <div class="results"></div>
   </div>

      <a class="item">Windows</a>

   <a class="item">
     MS-DOS
   </a>
   <div class="ui simple pointing dropdown link item">
     Others
     <i class="dropdown icon"></i>
     <div class="menu" style="left: 14%;">
       <a class="item">Windows Server</a>
       <a class="item">Windows Embedded Edition</a>
       <a class="item">Windows Mobile Edition</a>
     </div>
   </div>
 </div>
</b-menu-list>
</b-menu>
    </div>
</aside> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="ui bottom fixed compact segment" style="background: #fff;">
  <a href="#top" role="button" class="sidebar-btt"><span class="icon is-small"><i class="mdi mdi-arrow-expand-up" style="bottom: 0;"></i></span> <span>Back to top</span></a>
</div>

  </div>
  <div class="column is-main-content">
    <div class="ui raised segment" style="margin-top:-20px; border-bottom-left-radius: 10px !important; border-bottom-right-radius: 10px !important; border-top-left-radius: 0px !important; border-top-right-radius: 0px !important; border-top: none;">
      <div class="tab-content">
      <div class="tab-pane active" id="windows">
        <div class="segmentcontent">
        <div class="tile is-ancestor">
  <div class="tile is-vertical is-8">
    <div class="tile">
      <div class="tile is-parent is-vertical">
        <article class="tile is-child notification is-primary">
          <p class="title">Lorem</p>
          <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </article>
        <article class="tile is-child notification is-warning">
          <p class="title">ipsum</p>
          <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </article>
      </div>
      <div class="tile is-parent">
        <article class="tile is-child notification is-info">
          <p class="title">sit</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Tellus elementum sagittis vitae et leo duis ut diam quam. Massa tempor nec feugiat nisl pretium fusce. Mattis enim ut tellus elementum sagittis vitae et. Molestie ac feugiat sed lectus. Donec ac odio tempor orci dapibus. At elementum eu facilisis sed odio. Potenti nullam ac tortor vitae purus faucibus. Tincidunt ornare massa eget egestas purus viverra. Ipsum suspendisse ultrices gravida dictum fusce ut placerat orci. Molestie ac feugiat sed lectus vestibulum. Tortor at auctor urna nunc id cursus. Ac turpis egestas sed tempus. Est ullamcorper eget nulla facilisi etiam dignissim diam. Viverra orci sagittis eu volutpat odio facilisis.

Ut etiam sit amet nisl purus. In egestas erat imperdiet sed. Etiam dignissim diam quis enim. Mi tempus imperdiet nulla malesuada pellentesque elit eget gravida. Enim nunc faucibus a pellentesque. Sit amet consectetur adipiscing elit pellentesque habitant morbi. Ullamcorper a lacus vestibulum sed arcu non. Eu tincidunt tortor aliquam nulla facilisi cras fermentum. Mi eget mauris pharetra et ultrices neque ornare. Rutrum quisque non tellus orci ac auctor augue. Aenean sed adipiscing diam donec adipiscing tristique. Aliquet sagittis id consectetur purus. Purus gravida quis blandit turpis cursus in hac. Id nibh tortor id aliquet lectus proin nibh nisl condimentum. Aenean vel elit scelerisque mauris pellentesque pulvinar.</p>
        </article>
      </div>
    </div>
    <div class="tile is-parent">
      <article class="tile is-child notification is-danger" style="margin-bottom: 0em;">
        <p class="title">dolor</p>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
        </div>
      </article>
    </div>
  </div>
  <div class="tile is-parent">
    <article class="tile is-child notification is-success">
        <p class="title">amet,</p>
        <p class="subtitle">consectetur</p>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
          <p>Suspendisse varius ligula in molestie lacinia. Maecenas varius eget ligula a sagittis. Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, et sollicitudin felis neque sit amet erat. Maecenas imperdiet felis nisi, fringilla luctus felis hendrerit sit amet. Aenean vitae gravida diam, finibus dignissim turpis. Sed eget varius ligula, at volutpat tortor.</p>
          <p>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam ut aliquet lacus, quis faucibus libero. Quisque non semper leo.</p>
        </div>
      </div>
    </article>
  </div>
</div>
     </div>
   </div>
     <div class="tab-pane" id="macintosh">

    </div>
    <div class="tab-pane" id="linux">
                        </div>
   </div>
  </div>
  </div>
</div>
    </div>
</div>
<script>
        $(document).ready(function(){
  $('.ui .item').on('click', function() {
     $('.ui .item').removeClass('active');
     $(this).addClass('active');
  });
});
$(document).ready(function(){
$('.is-tab').on('click', function() {
$('.is-tab').removeClass('is-active');
$(this).addClass('is-active');
});
});
$(".openbtn").on("click", function() {
  $(".ui.sidebar").toggleClass("very thin icon");
  $(".asd").toggleClass("marginlefting");
  $(".sidebar z").toggleClass("displaynone");
  $(".ui.accordion").toggleClass("displaynone");
  $(".ui.dropdown.item").toggleClass("displayblock");

  $(".logo").find('img').toggle();

})
$(".ui.dropdown").dropdown({
  allowCategorySelection: true,
  transition: "fade down",
  context: 'sidebar',
  on: "hover"
});

$('.ui.accordion').accordion({
  selector: {

  }
});

$(window).scroll(function() { // when the page is scrolled run this
    if($(this).scrollTop() != 0) { // if you're NOT at the top
        $('#top').fadeIn("fast"); // fade in
    } else { // else
        $('#top').fadeOut("fast"); // fade out
    }
});
$('.ui.dropdown')
  .dropdown();

        </script>
<div class="bottomcontent">
   <?php
   include_once $_SERVER['DOCUMENT_ROOT'].'/inc/inc.footer.php';
    ?>
</div>
      </body>
</html>
