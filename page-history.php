<?php
    /*
        Template Name: Наша история
    */
?>

<?php
    get_header();
?>

<div class="aboutus">
    <div class="container">
        <h1 class="title"><?php the_field('history_title'); ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history-card_first_title'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history-card_first_descr'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                    <?php
                    $image = get_field('history-card_first_img');

                    if (!empty($image)): ?>
                                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="aboutus__img">
                        <?php endif;
                    ?>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                    <?php
                    $image = get_field('history-card_second_img');

                    if (!empty($image)): ?>
                                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="aboutus__img">
                        <?php endif;
                    ?>
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history-card_second_title'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history-card_second_descr'); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history-card_third_title'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history-card_third_descr'); ?>
                </div>
            </div>
            <div class="col-lg-6">
            <?php
            $image = get_field('history-card_third_img');

            if (!empty($image)): ?>
                                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="aboutus__img">
                        <?php endif;
            ?>
            </div>
        </div>
    </div>
</div>

<?php
    get_footer();
?>