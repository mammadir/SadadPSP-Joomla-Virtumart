<?php
defined ('_JEXEC') or die();
?>
<div class="post_payment_order_number" style="width: 100%">
	<span class="post_payment_order_number_title"><?php echo vmText::_ ('شماره سفارش  '); ?> </span>
	<?php echo  $viewData["order_number"]; ?>
</div>
<div  style="width: 100%">
	<span ><?php echo 'کد پیگیری شما  '; ?> </span>
	<?php echo  $viewData['tracking_code']; ?>
</div>
<div  style="width: 100%">
	<span ><?php echo 'وضعیت  '; ?> </span>
	<?php echo  $viewData['status']; ?>
</div>
<a class="vm-button-correct" href="<?php echo JRoute::_('index.php?option=com_virtuemart&view=orders&layout=details&order_number='.$viewData["order_number"].'&order_pass='.$viewData["order_pass"], false)?>"><?php echo vmText::_('مشاهده سفارش'); ?></a>