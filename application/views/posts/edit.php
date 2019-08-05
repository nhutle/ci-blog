<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?php echo $post['title']; ?>">
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea name="body" class="form-control" placeholder="Add Body" id="editor1"><?php echo $post['body']; ?></textarea>
    </div>
    <div class="form-group">
        <label>Category</label>
        <select name="category_id" class="form-control">
            <?php foreach ($categories as $category) { ?>
                <option <?php if ($post['category_id'] == $category['id']) echo "selected"; ?> value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
            <?php } ?>
        </select>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
<?php echo form_close(); ?>