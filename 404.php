<?php get_header(); ?>

<div class="container-404">
  <h2 class="page-heading">Oh! What?? 404?</h2>
  <img src="http://source.unsplash.com/640x480/?dogs">
  <h3>I think you are lost, please try the following links:</h3>
  <ul>
    <li>
      <a href="<?php echo site_url('/carti'); ?>">Carti</a>
    </li>
    <li>
      <a href="<?php echo site_url('/projects'); ?>">Toate Proiectele</a>
    </li>
    <li>
      <a href="<?php echo site_url('/about'); ?>">About Me</a>
    </li>
    <li>
      <a href="<?php echo site_url(''); ?>">Home Page</a>
    </li>
  </ul>
</div>
<?php get_footer(); ?>
