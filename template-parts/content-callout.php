<div class="row">
	<div class="col-md-12 callout">
		<div class="row">
			<?php 
			$check1 = get_field('call_out_text'); 
			$check2 = get_field('button_text');
			$check3 = get_field('button_link');
			?>
			<div class="col-sm-9 callouttable">
				<p style="color:#420f16;font-size:16px;text-transform:uppercase;"><?php if($check){echo $check}else{echo the_field('call_out_text',4);} ?></p>
			</div>
			<div class="col-sm-3 callouttable-button">						
				<a class="btn btn-primary" href="<?php if($check3){echo $check3}else{echo the_field('button_link',4);} ?>"><?php if($check2){echo $check2}else{echo the_field('button_text',4);} ?></a>
			</div>
		</div>
	</div>
</div>