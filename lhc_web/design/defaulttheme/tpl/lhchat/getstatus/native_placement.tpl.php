document.getElementById('<?php echo $chatCSSPrefix?>_status_container').innerHTML = '<p class="<?php echo $chatCSSPrefix?>-status-native-'+(this.isOnline == true ? 'online' : 'offline')+'"><a href="#" onclick="return lh_inst.lh_openchatWindow()">'+(this.isOnline == true ? '<img src="<?php if ($theme !== false && $theme->online_image_url !== false) : print $theme->online_image_url; else : ?><?php echo erLhcoreClassModelChatConfig::fetch('explicit_http_mode')->current_value?>//<?php echo $_SERVER['HTTP_HOST']?><?php echo erLhcoreClassDesign::design('images/icons/user_green_chat.png');?><?php endif;?>" alt="" /><?php if ($theme !== false && $theme->online_text !== '') : print htmlspecialchars_decode($theme->online_text,ENT_QUOTES); else : ?><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/getstatus','Live help is online...')?><?php endif?>' : '<img src="<?php if ($theme !== false && $theme->offline_image_url !== false) : print $theme->offline_image_url; else : ?><?php echo erLhcoreClassModelChatConfig::fetch('explicit_http_mode')->current_value?>//<?php echo $_SERVER['HTTP_HOST']?><?php echo erLhcoreClassDesign::design('images/icons/user_gray_chat.png');?><?php endif;?>" alt="" /><?php if ($theme !== false && $theme->offline_text != '') : print htmlspecialchars_decode($theme->offline_text,ENT_QUOTES); else : ?><?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('chat/getstatus','Live help is offline...')?><?php endif;?>')+'</a></p>';