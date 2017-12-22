<footer class="footer">
	<div class="footer__inner">
		<div class="footer__left">
			<p class="footer__text"><?= $mes['fut-mes1'] ?></p>
		</div>
		<div class="footer__right">
			<div class="smart">
				<div class="smart__logo-wrap">
					<div class="smart__text"><?= $mes['fut-mes2'] ?></div>
					<a href="http://smartorange.com.ua" class="smart__link">smart-link</a>
				</div>
			</div>
			<!--/END smart-->
		</div>
	</div>
</footer>
<!--/END footer-->

<script id="main-form-tamplate" type="text/template">
		<?php /*** modules/inc/form/ */ FormInclude('main__form');?>
</script>

</div>
<!--/END all_wrapper-->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCb1nF3LPA_ZOACIAdwgtrh0nrQd4NYybA&sensor=false"></script>
<script  src="<?scripts('js/scripts.min.js')?>"></script>
<style>
.succses__form_text-error{
	margin-top: -20px;
    font-size: 14px;
    font-family: RobotoRegular,sans-serif;
    font-style: italic;
    text-align: center;
    padding: 2px 0 10px;
	display: none;
	color:red;
	width: 100%;
}
/*.for-sale__link {
        pointer-events: none;
}*/
.navigation__tel {
    pointer-events: auto;
}
.main__bot-link{
	 pointer-events: auto;
}
.contact_tel{
	    text-decoration: none;
}
.advantage__list-wrap .slick-prev::before {
    content: '<?=$mes['назад']?>';
}
.advantage__list-wrap .slick-next::before {
	content: '<?=$mes['вперед']?>';
}
</style>
