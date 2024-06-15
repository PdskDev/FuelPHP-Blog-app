<?php if (Session::get_flash('success')): ?>
  <div class="alert alert-success">
    <?php echo Session::get_flash('success'); ?>
  </div>
<?php endif;?>

<?php if (Session::get_flash('error')): ?>
  <div class="alert alert-danger">
    <?php echo Session::get_flash('error'); ?>
  </div>
<?php endif;?>

<?php foreach ($posts as $post): ?>
  <div class="blog-post">
    <h2 class="blog-post-title"><?php echo $post->title; ?></h2>
    <br><?php echo $post->created_date; ?>
    <br><?php echo $post->category; ?>
    <p><?php echo Str::truncate($post->body, 200); ?></p>
    <p><?php echo $post->tags; ?></p>
    <a class="btn btn-default" href="/post/view/<?php echo $post->id; ?>">View more</a>
  </div>
<?php endforeach;?>
