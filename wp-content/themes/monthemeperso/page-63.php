<?php get_header(); ?> <!-- ici on appel le fichier header.php -->
JE SUIS SUR MA PAGE 63
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> <!-- ici on va demander à notre BDD si elle dispose de post ( PAGE,ARTICLE ) si OUI du coup elle va les postes dans ( the_content ) -->

<h2 class="titrepost"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><!-- the_title permet d'afficher le titre de la PAGE,ARTICLE que le client à choisi ( CLIQUER ) / the_permalink permet de creer un lien permanant suivant le clque du client  -->

<div class="entry">
  <?php  the_content(); ?> <!-- c'est ici ou s'affiche le contenue de mon ARTILCE,PAGE -->
</div>

<?php endwhile; else: ?>

 <p> Contenu non trouvée </p>

<?php endif; ?>

<?php get_footer(); ?><!-- ici on appel le footer de notre page -->

