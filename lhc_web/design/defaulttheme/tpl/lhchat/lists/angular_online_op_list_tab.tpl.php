<?php include(erLhcoreClassDesign::designtpl('lhchat/lists/angular_online_op_list_tab_pre.tpl.php')); ?>
<?php if ($chat_lists_online_operators_enabled == true) : ?>
<li role="presentation" class="nav-item"><a class="nav-link" title="<?php echo erTranslationClassLhTranslation::getInstance()->getTranslation('front/default','Online operators');?>" href="#onlineoperators" aria-controls="onlineoperators" role="tab" data-toggle="tab"><i class="material-icons chat-operators mr-0">account_box</i><span> <span class="msg-nm" ng-if="online_op.op_cc > 0">({{online_op.op_cc}})</span> {{online_op.list.length != false && online_op.list.length > 0 ? online_op.list.length : ''}}</span></a></li>
<?php endif;?>