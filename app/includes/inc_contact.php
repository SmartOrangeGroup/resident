<div class="contact">
	<div class="contact__inner">
		<div class="contact__page-heading">
			<div class="contact__page-heading-top">
			
				<<?H1H2($mes['contact-h1'])?> class="contact__heading"><?=$mes['contact-h1']?> </<?H1H2($mes['contact-h1'])?>>
			</div>
			<div class="contact__page-heading-bot">
				<h2 class="contact__caption"><?=$mes['У Вас виникли запитання']?></h2>
			</div>
		</div>
		<!--/END contact__page-heading-->

		<div class="contact__form-wrap">
			<?/*<form action="" class="contact__form">
				<input class="contact__form-input" type="text" placeholder="Ім’я:">
				<input class="contact__form-input" type="tel" placeholder="Телефон:">
				<input class="contact__form-input" type="email" placeholder="E-mail:">
				<textarea class="contact__message" name="" id="" placeholder="Повідомлення:"></textarea>
				<button class="contact__form-btn" type="submit">Надіслати</button>
			</form>*/?>
				<?php /*** modules/inc/form/ */ FormInclude('contact__form');?>
		</div>
		<!--/END contact__form-wrap-->

		<div class="contact__list-wrap">
			<ul class="contact__list">
				<li class="contact__item">
					<a class="contact_tel" href='tel:<?=$mes['tel']?>'><span class="contact__item-text" data-contact-text="1"><?=$mes['tel']?></span></a>
				</li>
				<li class="contact__item">
					<p class="contact__item-caption"><?=$mes['menu-sales']?></p>
                    <span class="contact__item-text" data-contact-text="2"><?=$mes['adres-sales']?></span>
                    <p class="contact__item-caption"><?=$mes['location-mainheading']?>:</p>
                    <span class="contact__item-text" data-contact-text="2"><?=$mes['adres-contact']?></span>
				</li>
				<li class="contact__item">
					<span class="contact__item-text" data-contact-text="3"><?=$mes['email']?></span>
				</li>
			</ul>
		</div>
		<!--/END contact__list-wrap-->

	</div>
</div>
<!--/END contact-->