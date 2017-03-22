<div id="footerSlide">
<div class="owl-carousel {{-- owl-theme --}}" id="owlfooter">
@foreach ($footer_images as $count => $img)
	<div  style="width:296px">	
		<img src="{{ $img }}" class="picla" data-label-class="label-image-footer"  alt="{{ $desc_footer_images[$count] }}" height="220" />
	</div>
@endforeach
</div>
</div>