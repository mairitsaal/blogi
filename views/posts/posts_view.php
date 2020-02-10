<div class="row">
    <div class="col-lg-8">
        <h1><?php echo $post['post_subject']?></h1>
        <p class="lead">by <?php echo $post['name'];?></p>
        <hr>
        <p>Posted on <?php echo $post['post_created'];?></p>
        <p>
            Tags:
            <span class="badge badge-danger">alice</span>
            <span class="badge badge-success">story</span>
            <span class="badge badge-warning">blog</span>
            <span class="badge badge-primary">personal</span>
        </p>
        <hr>
        <p><?php echo $post['post_text'];?></p>
    </div>
</div>