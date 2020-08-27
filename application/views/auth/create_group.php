<div class="">
	<div class="page-title">
		<div class="title_left">
			<h3>Tambah Level User</h3>
		</div>
	</div>
	<div class="clearfix"></div>
	<div id="infoMessage"><?php echo $message; ?></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Form Tambah Level User</h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					<!--Form Ganti Password -->
					<form class="form-horizontal form-label-left" action="<?= base_url() ?>auth/create_group" method="post">
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Level User<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="group_name" name="group_name" class="form-control col-md-7 col-xs-12" required="required">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Deskripsi Level User<span class="required">&nbsp; :</span></label>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="description" name="description" class="form-control col-md-7 col-xs-12" required="required">
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-3">
								<button type="reset" class="btn btn-default">Reset</button>
								<input type="submit" class="btn btn-success" value="Simpan" name="submit">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
