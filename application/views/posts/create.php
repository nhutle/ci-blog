<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="Add Title">
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea name="body" class="form-control" placeholder="Add Body" id="editor1"></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
<?php echo form_close(); ?>