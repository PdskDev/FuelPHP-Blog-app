<h1>Post Add page</h1>
    <?php echo Form::open('/post/add'); ?>
<div class="form-group">
    <?php echo Form::label('Title', 'title'); ?>
    <?php echo Form::input('title', Input::post('title', isset($post) ? $post->title : ''),
    array('class' => 'form-control')); ?>
</div>
<div class="form-group">
    <?php echo Form::label('Category', 'category'); ?>
    <?php echo Form::select('category', 'none',
    array(
        'none' => 'None',
        'Web design' => "Web design",
        'Graphic design' => "Graphic design",
        'Frontend' => "Frontend",
        'Backend' => "Backend",
        'Fullstack' => "Fullstack",
        'API Rest' => "API Rest",
        'API GraphQL' => "API GraphQL",
        'Database' => "Database",
        'Testing' => "Testing",
        'DevOps' => "DevOps",
        'Programming' => "Programming",
        'Security' => "Security",
    ),
    array('class' => 'form-control'));
?>
</div>
<div class="form-group">
    <?php echo Form::label('Tags', 'tags'); ?>
    <?php echo Form::input('tags', Input::post('tags', isset($post) ? $post->tags : ''),
    array('class' => 'form-control')); ?>
</div>
<div class="form-group">
    <?php echo Form::label('Body', 'body'); ?>
    <?php echo Form::textarea('body', Input::post('body', isset($post) ? $post->body : ''),
    array('class' => 'form-control')); ?>
</div>
<div class="actions">
    <?php echo Form::submit('submit', 'Save',
    array('class' => 'btn btn-primary')) ?>
</div>
    <?php echo Form::close(); ?>
