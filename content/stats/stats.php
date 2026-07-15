<?php 
	$strt = new DateTime("1999-10-01"); $today = new DateTime(date("Y")); $interval = $strt->diff($today);$years = $interval->y;
	$cupss = $years * 208; $cups =  number_format($cupss,0,",",".");
	$codes = $years * 208 * 128.5; $code =  number_format($codes,0,",",".");

?>
<section id="stats" class="stats dark"><div class="container">
	<div class="row multi-columns-row">
        	<div class="col-sm-3 col-md-3 col-lg-3">
			<i class="fa fa-code staticon"></i>
			<div class="number">
				<p>
					<span class="prefix"></span>
					<span class="counter"><?php echo $code ; ?></span>
					<span class="sufix"></span>
				</p>
			</div>
			<p>Zeilen mit Code</p>
		</div>
		<div class="col-sm-3 col-md-3 col-lg-3">
			<i class="fa fa-coffee staticon"></i>
			<div class="number">
				<p>
					<span class="prefix"></span>
					<span class="counter"><?php echo $cups; ?></span>
					<span class="sufix"></span>
				</p>
			</div>
			<p>Tassen Kaffee</p>
		</div>
		<div class="col-sm-3 col-md-3 col-lg-3">
			<i class="fa fa-calendar staticon"></i>
			<div class="number">
				<p>
					<span class="prefix"></span>
					<span class="counter"><?php echo $years; ?></span>
					<span class="sufix">+</span>
				</p>
			</div>
			<p>Jahre im Gesch&auml;ft</p>
		</div>
		<div class="col-sm-3 col-md-3 col-lg-3">
			<i class="fa fa-users staticon"></i>
			<div class="number">
				<p>
					<span class="prefix"></span>
					<span class="counter">99</span>
					<span class="sufix">%</span>
				</p>
			</div>
			<p>Kundenzufriedenheit</p>
		</div>            	
	</div>
</div></section><!--stats-->









