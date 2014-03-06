    <h1><?php echo $title; ?> | Admin Page</h1>
    <?php echo form_open('Admin/create') ?>
       <label>Title:</label><br>
       <input type="text" name="title"><br>
       <label>Content:</label><br>
       <textarea name="content"></textarea><br>
       <label>Categories:</label><br>
       <textarea name="categories"></textarea><br>
       <input type="submit" name="submit" value="Create">
     </form>
      <h2>Edit Posts Below</h2> 
<ul> 
  <?php foreach($posts as $post): ?> 
<li><a href="/~ccit1581/CCT460/index.php/Admin/update/<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a> | <a href="/~ccit1581/CCT460/index.php/Admin/delete/<?php echo $post['id']; ?>">delete post</a></li>

  <?php endforeach; ?> 
</ul>

<a href="http://phoenix.sheridanc.on.ca/~ccit1581/CCT460/index.php/blog">Wanna Check Out Your Blogs? | Click Here</a>









   