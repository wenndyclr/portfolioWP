<?php
    /*
    *Template Name: Home
    */

get_header();
?>

<section id="presentation">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Dévéloppeur/Intégrateur web junior</h1>
            </div>
            <div class="col-md-4">
                <img src="http://placekitten.com/200/200">
                <p>Prénom - Nom</p>
                <p>Adresse mail</p>
                <p>Tel</p>
                <p>Permis B</p>
            </div>
            <div class="col-md-8">
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker. </p>
            </div>
        </div>
    </div>
</section>

<section id="journey">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <h2>Expériences</h2>
                <p> Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page</p>
            </div>
            <div class="col-md-4">
                <h2>Compétences</h2>
                <p> Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page</p>
            </div>
            <div class="col-md-4">
                <h2>Formations</h2>
                <p> Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page</p>
            </div>
        </div>
    </div>
</section>

<section id="production">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Mes réalisations</h2>
            </div>

            <?php
            $args = [
            'post_type'         => 'devPortfolio', 
            //'posts_per_page'    => 3, 
            'orderby'           => 'date', 
            'order'             => 'DESC' 
            ];
            ?>
            <?php $ma_boucle = new WP_Query($args); 
                if( $ma_boucle->have_posts() ) :
                    while( $ma_boucle->have_posts() ) : $ma_boucle->the_post();
            ?>
            <div class="col-md-6">
                <?php the_post_thumbnail('medium'); ?>
                <?php the_title(); ?>
                <?php the_content(); ?>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>

<section id="contact_form">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
get_footer(); ?>
