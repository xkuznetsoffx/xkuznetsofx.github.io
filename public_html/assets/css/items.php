	<? if(count($items)): foreach($items as $item): ?>	
	
                <div style="padding: 12px;">
                    <div class="demo-card-square mdl-card mdl-shadow--2dp" style="width: 232px; height: 336px;">
                        <div class="mdl-card__title mdl-card--expand" style=" color: #fff; background: url('<? echo $item->iconurl; ?>')  no-repeat #46B6AC;    height: 139px;    background-size: 100% 100%, auto;">
                            <h2 class="mdl-card__title-text"><? echo $item->name; ?></h2>
                            <a href="<?php echo base_url("product/".$item->id); ?>" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored" data-upgraded=",MaterialButton" style="margin-top: 101px;margin-right: -10px;    background: rgb(83,109,254);">
                                <i class="material-icons">&#xE8CC;</i>
                            </a>
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mp-product-info" data-upgraded=",MaterialButton,MaterialRipple"><? echo round($item->price_final*100)/100;?> <i class="fa fa-rub"></i>
                     <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>
                            <a href="<?php echo base_url("product/".$item->id); ?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" data-upgraded=",MaterialButton,MaterialRipple">Купить
                     <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></a>
                        </div>
                    </div>
                </div>
<? endforeach; ?>
<? else: ?>
<div class="">
Товаров пока нет...Приходите позже!
</div>
<? endif; ?>