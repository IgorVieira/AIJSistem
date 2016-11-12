<?php
    get_header();
?>


  
  <?php if( have_posts() ) {
                    while( have_posts() ) {
                        the_post(); 
        ?>

            
       
           
       
           
 
        <?php
            }
        }
        ?>

       <?php if(is_page('contato')) {?>
        
            <div class="container">
                <div class="flex-container">
                    <div class="flex-boxcontact">
                         <form method="post">
                            <label for="">Nome</label><br>
                            <input type="text" required="true">
                            <br>
                            <label for="">Email</label><br>
                            <input type="email" required="true">
                            <br>
                            <br>
                            <label for="">Telefone</label><br>
                            <input type="text" required="true">
                            <br>
                            <label for="">Comentário</label><br>
                            <textarea name="" id="" cols="30" rows="10"></textarea><br>
                            <input type="submit" class="btn" value="Enviar">
                         </form>  
                    </div>
                    <div class="flex-boxcontact">
                   
                            <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyC52idm_ehO4-tAoIeqXoJoBn6JbU6qqqQ'></script><div style='overflow:hidden;height:100%;width:100%;'><div id='gmap_canvas' style='margin-top:40px;height:350px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='http://maps-generator.com/pt'>www.maps-generator.com</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=87ac97c936835a7e467cb593c3f9e487d93ae81e'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(-16.604870525352705,-49.31619206017092),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-16.604870525352705,-49.31619206017092)});infowindow = new google.maps.InfoWindow({content:'<strong>Localização AIJSISTEM</strong><br>Rua RB 2-A, 47-351 - Residencial Recanto do Bosque<br> 74474-308 Goiânia<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                     
                    </div>
                </div>

                
            </div>
         <?php  }  ?>


         <?php if(is_page('empresa')) {?>
            
            <div class="container">
                <div class="flex-container">
                    <div class="flex-page">
                          <p> <?php the_content(); ?></p>
                    </div>
                </div>
                
            </div>  
       
         <?php  }  ?>


    <?php if(is_page('home')) {?>

      <?php the_content(); ?>
        
        <div class="container">
            <ul class="flex-container">
                <li class="flex-item">
                    <p class="text-title">Nota Fiscal Eletronica</p>
                    <p class="text-content">
                        Arquivadas automaticamente em subdiretórios por ano e mês. Gerando a comodidade e organização que o seu negócio tanto precisa.
                    </p>
                </li>
                <li class="flex-item">
                    <p class="text-title">Gestão de Informações</p>
                    <p class="text-content">
                        Tenha todas as informações das suas vendas e movimentações de modo fácil e simples. A AIJSISTEM leva seus dados onde vocês estiver.
                    </p>
                </li>
                <li class="flex-item">
                    <p class="text-title">Sistemas</p>
                    <p class="text-content">
                        Soluções integrada para controle de suas vendas, estoque e financeiro. Software para emissão de Nota Fiscal Eletrônica, NFCe e Sped Fiscal.
                    </p>

                </li>
            </ul>		  
        </div>  
     <?php  }  ?>
<?php
get_footer();
?>




        



