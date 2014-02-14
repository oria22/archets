<?php

$lieu=get_post_meta(get_the_ID(),'wpcf-lieu',true);
$beneficiaire=get_post_meta(get_the_ID(),'wpcf-beneficiaire',true);
$recette=get_post_meta(get_the_ID(),'wpcf-recette',true);
$musiciens=get_post_meta(get_the_ID(),'wpcf-musiciens',true);?>
 <div class="meta">
         <?php if(!empty($lieu)){?>
         <span><strong>Lieu :</strong><?php echo $lieu; ?></span><br> 
          <?php } ?>
          <?php if(!empty($beneficiaire)){?>
         <span><strong>Bénéficiaire :</strong><?php echo $beneficiaire; ?></span><br>
         <?php } ?>
          <?php if(!empty($recette)){?>
         <span><strong>Recette :</strong><?php echo $recette; ?></span><br>
         <?php } ?>
          <?php if(!empty($musiciens)){?>
         <span><strong>Musiciens :</strong><?php echo $musiciens; ?></span>
 		<?php } ?>

 </div>
