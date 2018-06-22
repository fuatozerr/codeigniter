<div class="row">

    <div class="col-md-12">
        <div class="widget p-lg">
            <h4 class="m-b-lg">Ürünleri Listele
                <a href="#" class="btn btn-outline btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Yeni Ekle</a></h4>

            <?php if(empty($items)) { ?>
            <div class="alert alert-info text-center">
                <p>Kayıt bulunamadı. Veritabanından çekince burası otomatik silinecek.</p>
            </div> <?php  } else {?>
            <table class="table table-hover ">
                <thead>

                <th>#id</th>
                <th>Url</th>
                <th>Başlık</th>

                <th>Açıklama</th>

                <th>Durum</th>
                <th>İşlem</th>
                </thead>

                <tbody>
                <?php  foreach ($items as $listele) {?>
                <tr>

                    <td>#<?php echo $listele->id ?></td>
                    <td><?php echo $listele->url ?></td>
                    <td><?php echo $listele->title ?></td>
                    <td><?php echo $listele->description ?></td>
                    <td><input 
                               type="checkbox"
                               data-switchery
                               data-color="#01c469"
                               <?php echo ($listele->isActive) ? "checked" :"" ; ?> /></td>
                    <td><a href="#" class="btn btn-sm btn-outline btn-danger"><i class="fa fa-warning"></i>Sil</a>
                        <a href="#" class="btn btn-sm btn-outline btn-primary"><i class="fa fa-pencil-square-o"></i>Güncelle</a></td>
                </tr> <?php }?>
                </tbody>
            </table> <?php } ?>
        </div><!-- .widget -->
    </div><!-- END column -->

</div>