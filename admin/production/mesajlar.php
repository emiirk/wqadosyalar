<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$mesajsor=$db->prepare("SELECT * FROM mesaj");
$mesajsor->execute();

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
						<h2>Mesajlar <small>

							<?php 

							if (@$_GET['durum']=="ok") {?>

							<b style="color:green;">İşlem Başarılı...</b>

							<?php } elseif (@$_GET['durum']=="no") {?>

							<b style="color:red;">İşlem Başarısız...</b>

							<?php } ?>


						</small></h2>

						<div class="clearfix"></div>

						<!--<div align="right">
							<a href="egitim-kategorisi-ekle.php"><button class="btn btn-success btn-xs"> <i class="fa fa-plus"></i> Yeni Egitim Kategorisi Ekle</button></a>

						</div>-->
					</div>






					<div class="x_content">
						<p class="text-muted font-13 m-b-30">

						</p>
						<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>S.No</th>
									<th>Konu</th>
									<th>İsim</th>
									<th>E-Posta</th>
									<th>Mesaj</th>
									<th class="text-center">İşlemler</th>
								</tr>
							</thead>
							<tbody>

								<?php 

								$say=0;

								while($mesajcek=$mesajsor->fetch(PDO::FETCH_ASSOC)) { $say++?>

								<tr>
									<td><?php echo $say ?></td>
									<td><?php echo $mesajcek['mesaj_konu']; ?></td>
									<td><?php echo $mesajcek['mesaj_isim']; ?></td>
									<td><?php echo $mesajcek['mesaj_mail']; ?></td>
									<td style="word-wrap:break-word;"><?php echo $mesajcek['mesaj_icerik']; ?></td>
									<td class="text-center">
										<a onclick="return confirm('Bu mesajı silmek istediğinize emin misiniz?')" href="../netting/adminislem.php?mesaj_id=<?php echo $mesajcek['mesaj_id']; ?>&mesaj_sil=ok">
											<button class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Mesajı Sil"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
