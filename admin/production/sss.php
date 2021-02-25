<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$sorusor=$db->prepare("SELECT * FROM soru");
$sorusor->execute();

/*$egitimsor2=$db->prepare("SELECT * FROM egitimicerik order by egitim_belge_sira ASC");
$egitimsor2->execute();
$egitimcek2=$egitimsor2->fetch(PDO::FETCH_ASSOC)
*/
?>


<!-- page content -->
<div class="right_col" role="main">
	<div class="">

		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Sıkça Sorular Sorular<small>

							<?php 

							if (@$_GET['durum']=="ok") {?>

							<b style="color:green;">İşlem Başarılı...</b>

							<?php } elseif (@$_GET['durum']=="no") {?>

							<b style="color:red;">İşlem Başarısız...</b>

							<?php } ?>


						</small></h2>

						<div class="clearfix"></div>

						<div align="right">
							<a href="yeni-soru-ekle.php"><button class="btn btn-success btn-xs"> <i class="fa fa-plus"></i> Yeni Soru Ekle</button></a>

						</div>
					</div>






					<div class="x_content">
						<p class="text-muted font-13 m-b-30">

						</p>
						<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>S.No</th>
									<th>Soru</th>
									<th>Cevap</th>
									<th>Durum</th>
									<th class="text-center">İşlemler</th>
								</tr>
							</thead>
							<tbody>

								<?php 

								$say=0;

								while($sorucek=$sorusor->fetch(PDO::FETCH_ASSOC)) { $say++?>

								<tr>
									<td><?php echo $say ?></td>
									<td><?php echo $sorucek['soru_soru']; ?></td>
									<td><?php echo $sorucek['soru_icerik'] ?></td>
									<td>
										<?php if ($sorucek['soru_durum']=="1") { ?>
										<span class="label label-success">Aktif</span>
										<?php } else {?>
										<span class="label label-danger">Pasif</span>
										<?php } ?>
									</td>
									<td class="text-center">
										<!--<a href="egitim-belgesi-icerik-ekle.php?egitim_belge_id=<?php echo $egitimcek['egitim_belge_id']; ?>">
											<button class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="İçerik Ekle"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
										</a>
										<a href="egitim-belgesi-icerik-duzenle.php?egitim_belge_id=<?php echo $egitimcek['egitim_belge_id']; ?>&egitim_icerik_id=<?php echo $egitimcek2['egitim_icerik_id']; ?>">
											<button class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="İçeriği Düzenle"><i class="fa fa-file-text" aria-hidden="true"></i></button>
										</a>-->
										<a href="soru-duzenle.php?soru_id=<?php echo $sorucek['soru_id']; ?>">
											<button class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Soruyu Düzenle"><i class="fa fa-pencil" aria-hidden="true"></i></button>
										</a>
										<a onclick="return confirm('Bu ürünü silmek istediğinize emin misiniz?')" href="../netting/adminislem.php?soru_id=<?php echo $sorucek['soru_id']; ?>&soru_sil=ok">
											<button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Belgeyi Sil"><i class="fa fa-trash" aria-hidden="true"></i></button>
										</a>
									</td>
								</tr>

								<?php } ?>
							</tbody>
						</table>

					</div>




				</div>
			</div>
		</div>




	</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
