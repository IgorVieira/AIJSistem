<?php
    get_header();
?>

 <section class="description">
    <hr class="style-eight"></hr>
        <?php if( have_posts() ) {
                    while( have_posts() ) {
                        the_post(); 
        ?>

            
       
             <p> <?php the_content(); ?></p>
       

        <?php
            }
        }
        ?>

        <?php if(is_page('contato')) {?>
             <form action="">
            <label for="">Nome</label>
            <input type="text" required="true">
            <br>
            <label for="">Email</label>
            <input type="text" required="true">
            <br>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="contact_button" value="Enviar">
            </form>   
       
         <?php  }  ?>

<?php
get_footer();
?>

</section>


        



