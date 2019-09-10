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
    			<h1>Développeur - Intégrateur Web junior</h1>
    		</div>
    		<div class="col-md-4">
    			<img src="http://placekitten.com/200/200" alt="">
    			<p>Prénom Nom</p>
    			<p>Mail</p>
    			<p>Tél</p>
    			<p>Permis B</p>
    		</div>
    		<div class="col-md-8">
    			<p>Sed (saepe enim redeo ad Scipionem, cuius omnis sermo erat de amicitia) querebatur, quod omnibus in rebus homines diligentiores essent; capras et oves quot quisque haberet, dicere posse, amicos quot haberet, non posse dicere et in illis quidem parandis adhibere curam, in amicis eligendis neglegentis esse nec habere quasi signa quaedam et notas, quibus eos qui ad amicitias essent idonei, iudicarent. Sunt igitur firmi et stabiles et constantes eligendi; cuius generis est magna penuria. Et iudicare difficile est sane nisi expertum; experiendum autem est in ipsa amicitia. Ita praecurrit amicitia iudicium tollitque experiendi potestatem.</p>
    		</div>
    	</div>
    </div>
</section>

<section id="journey">
    <div class="container-fluid">
    	<div class="row">
			<div class="col-md-4">
				<h2>Mon parcours</h2>
				<p>Sed (saepe enim redeo ad Scipionem, cuius omnis sermo erat de amicitia) querebatur, quod omnibus in rebus homines diligentiores essent; capras et oves quot quisque haberet, dicere posse, amicos quot haberet, non posse dicere et in illis quidem parandis adhibere curam, in amicis eligendis neglegentis esse nec habere quasi signa quaedam et notas, quibus eos qui ad amicitias essent idonei, iudicarent. Sunt igitur firmi et stabiles et constantes eligendi; cuius generis est magna penuria. Et iudicare difficile est sane nisi expertum; experiendum autem est in ipsa amicitia. Ita praecurrit amicitia iudicium tollitque experiendi potestatem.</p>
			</div>
			<div class="col-md-4">
				<h2>Mes compétences</h2>
				<p>Sed (saepe enim redeo ad Scipionem, cuius omnis sermo erat de amicitia) querebatur, quod omnibus in rebus homines diligentiores essent; capras et oves quot quisque haberet, dicere posse, amicos quot haberet, non posse dicere et in illis quidem parandis adhibere curam, in amicis eligendis neglegentis esse nec habere quasi signa quaedam et notas, quibus eos qui ad amicitias essent idonei, iudicarent. Sunt igitur firmi et stabiles et constantes eligendi; cuius generis est magna penuria. Et iudicare difficile est sane nisi expertum; experiendum autem est in ipsa amicitia. Ita praecurrit amicitia iudicium tollitque experiendi potestatem.</p>
			</div>
			<div class="col-md-4">
				<h2>Mes expériences</h2>
				<p>Sed (saepe enim redeo ad Scipionem, cuius omnis sermo erat de amicitia) querebatur, quod omnibus in rebus homines diligentiores essent; capras et oves quot quisque haberet, dicere posse, amicos quot haberet, non posse dicere et in illis quidem parandis adhibere curam, in amicis eligendis neglegentis esse nec habere quasi signa quaedam et notas, quibus eos qui ad amicitias essent idonei, iudicarent. Sunt igitur firmi et stabiles et constantes eligendi; cuius generis est magna penuria. Et iudicare difficile est sane nisi expertum; experiendum autem est in ipsa amicitia. Ita praecurrit amicitia iudicium tollitque experiendi potestatem.</p>
			</div>
		</div>
    </div>
</section>

<section id="production">
    <div class="container-fluid">
        <div class="row">
        	<div class="col-md-12">
        		<h2>Mes réalisations</h2>
        	</div>	
				<?php
				$args = [
					'post_type' 		=> 'devPortfolio',
					// 'posts_per_page' 	=> 3, 
					'orderby' 			=> 'date', 
					'order'				=> 'DESC' 
				];

				$ma_boucle = new WP_Query($args);	
					if( $ma_boucle->have_posts()) :	
						while( $ma_boucle->have_posts() ) : $ma_boucle->the_post();
				?>
							<div class="col-md-6">
								<?php the_title(); ?>
								<?php the_content(); ?>
								<?php the_post_thumbnail('medium', ['class' => 'card-mg-top']); ?>
							</div>
					<?php endwhile; endif; ?>
        </div>	
    </div>
</section>

<section id="contact_form">
    <div class="container-fluid">
        	<p>Sed (saepe enim redeo ad Scipionem, cuius omnis sermo erat de amicitia) querebatur, quod omnibus in rebus homines diligentiores essent; capras et oves quot quisque haberet, dicere posse, amicos quot haberet, non posse dicere et in illis quidem parandis adhibere curam, in amicis eligendis neglegentis esse nec habere quasi signa quaedam et notas, quibus eos qui ad amicitias essent idonei, iudicarent. Sunt igitur firmi et stabiles et constantes eligendi; cuius generis est magna penuria. Et iudicare difficile est sane nisi expertum; experiendum autem est in ipsa amicitia. Ita praecurrit amicitia iudicium tollitque experiendi potestatem.

			Haec igitur prima lex amicitiae sanciatur, ut ab amicis honesta petamus, amicorum causa honesta faciamus, ne exspectemus quidem, dum rogemur; studium semper adsit, cunctatio absit; consilium vero dare audeamus libere. Plurimum in amicitia amicorum bene suadentium valeat auctoritas, eaque et adhibeatur ad monendum non modo aperte sed etiam acriter, si res postulabit, et adhibitae pareatur.

			Ciliciam vero, quae Cydno amni exultat, Tarsus nobilitat, urbs perspicabilis hanc condidisse Perseus memoratur, Iovis filius et Danaes, vel certe ex Aethiopia profectus Sandan quidam nomine vir opulentus et nobilis et Anazarbus auctoris vocabulum referens, et Mopsuestia vatis illius domicilium Mopsi, quem a conmilitio Argonautarum cum aureo vellere direpto redirent, errore abstractum delatumque ad Africae litus mors repentina consumpsit, et ex eo cespite punico tecti manes eius heroici dolorum varietati medentur plerumque sospitales.</p>
    </div>
</section>

<?php 
get_footer(); ?>
