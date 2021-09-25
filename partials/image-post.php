<div data-post-id="<?php echo $args['codicePost']; ?>" class="js-post single-post single-post-image card my-2">

    <div class="card-header container d-flex justify-content-between align-items-center">
        <a href="<?php echo $args['blog_url']; ?>" class="d-flex align-items-center link-dark text-decoration-none" aria-expanded="false">
            <img src="<?php echo $args['posizioneImgProfilo']; ?>" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong><?php echo $args['nomeBlog']; ?></strong>
        </a>

        <p class="m-0"><?php echo $args['dataOra']; ?></p>
    </div>

    <div class="single-post-featured-content">
        <?php includiComponente("single-post-carousel", array("post" => $args, "imgs" => $args['listaAllegati'])); ?>
    </div>

    <div class="card-body">

        <?php if( !isset( $args['disable_options'] ) ){ ?>
            <?php includiComponente("single-post-options", $args); ?>
        <?php } ?>

        <h5 class="card-title"><?php echo $args['titolo']; ?></h5>

        <div class="card-text mb-4">
            <p><?php echo $args['testo']; ?></p>
        </div>

        <?php if( !isset( $args['disable_votes'] ) ){ ?>
            <?php includiComponente("single-post-vote", $args); ?>
        <?php } ?>

    </div>
    <?php if( !isset( $args['disable_comments'] ) ){ ?>
        <?php includiComponente("single-post-comments", array("comments_limit" =>  $args['comments_limit'], "current_author" => $args['current_author'], "comments" => $args['comments']) ); ?>
    <?php } ?>
</div>