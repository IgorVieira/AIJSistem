<?php

 add_theme_support( 'post-thumbnails' );

 function registrar_menu_navegacao(){
	register_nav_menu('header-menu', 'main-menu');
}


add_action('init', 'registrar_menu_navegacao');


function enviar_e_checar_email($nome, $email, $mensagem, $fone) {
        return wp_mail( 'jhonathan@aijsistem.com.b', 'Email AIJSistem', 'Nome: ' . $nome . "\n" . $mensagem  . "\n" . $fone );
}



