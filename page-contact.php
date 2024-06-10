<?php get_header(); ?>

<main class="contact">
    <div class="cmn-mv"></div>
    <div class="breadcrumb">
<?php
breadcrumb( $post->ID );
?>
    </div>

    <section class="contact-section cmn-section">
        <div class="form-area">
            <h2 class="cmn-title">
                <span class="main">お問い合わせ</span>
                <span class="sub">contact</span>
            </h2>
            <div class="contact-form">
<?php
while( have_posts() ) {
    the_post();
    the_content();
}
?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
