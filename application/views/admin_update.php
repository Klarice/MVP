
    <h1><?php echo $title; ?> Update Your Challenge </h1>
    <?php foreach($post as $p): ?> 
    <?php echo form_open('update/update_post/' . $p['id']) ?>
       <label>Title</label>
       <input type="text" name="title" value= "<?php echo $p['title']; ?>">

       <label>Content</label>
       <textarea name="content"> <?php echo $p['content']; ?> </textarea> 

       <label>Categories</label>
       <textarea name="categories"> <?php echo $p['categories']; ?> </textarea> 
       <input type="submit" name="submit" value="Save">
     </form>
    

     <?php endforeach; ?>