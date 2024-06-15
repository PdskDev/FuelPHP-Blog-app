
<div class="blog-post">
  <h2 class="blog-post-title"><?php echo $post->title; ?></h2>
  <br><?php echo $post->created_date; ?>
  <br><?php echo $post->category; ?>
  <p class="text-justify"><?php echo $post->body; ?></p>
  <p><?php echo $post->tags; ?></p>
  <a class="btn btn-default" href="/post/edit/<?php echo  $post->id; ?>">Edit</a>
  <a class="btn btn-danger" href="/post/delete/<?php echo  $post->id; ?>">Delete</a>
</div>
