  
<br>
<style type="text/css">
  label {
    font-weight: normal !important;
  }

  .custom-control {
  /* no padding defined */
  /*align-items: left;*/
  margin-right: 25px;
  }
  .custom-control-description {
    0.1rem;
  }

  .select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 20px;
  }

  .select.form-control-sm~.select2-container--default .select2-selection--single {
    height: calc(1.8125rem + 2px);
  }

  .select2-container  {
    width: 220px !important;
  }

  .select-biasa  {
    width: 220px !important;
  }


  #prov,#kab,#desa2,#kecamatan2,#tbl,#dataTabel {
    display: none;
  }
</style>
    <section class="content d-print-none">
      <div class="container-fluid">

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header" style="background-color: #F5F5F5;">
                <h5 class="card-title"><i class="fas fa-globe-americas " style="color:#FF8C00"></i> <b class="ml-2">PILIH WILAYAH</b> </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group row list-inline" style="margin-left: 50px;  margin-bottom: 10px;">
                    <p class="list-inline-item"><b>Pilih Tahun :</b></p>
                    <div class="list-inline-item ml-3">
                    <select class="form-control form-control-sm list-inline-item select-biasa">
                          <option value="2019">2019</option>
                          <option value="2020">2020</option>
                          <option value="2021">2021</option>
                          <option value="2022">2022</option>
                    </select>
                    </div>
               </div>
               <div class="form-group row list-inline" style="margin-left: 45px;  margin-bottom: 10px;">
                    <p class="list-inline-item"><b>Pilih Bidang :</b></p>
                    <div class="list-inline-item ml-3" >
                    <select class="form-control form-control-sm list-inline-item select-biasa" >
                         <?php  foreach ($dataBidang as $data) {?>
                        
                          <option value="<?php echo $data->idx; ?>"><?php echo $data->nama_bidang; ?></option>

                         <?php  } ?>
                    </select>
                    </div>
               </div>
                <div class="row" style="margin-left: 30px;  margin-bottom: 10px;" >
                  
                    <p style="margin-right:20px;"><b>Pilih Wilahayh :</b></p>
                  
                   
                      <div class="custom-control custom-radio">
                       <input class="custom-control-input" type="radio" id="allWilayah" name="wilayah" value="allWilayah">
                       <label for="allWilayah" class="custom-control-label">all wilayah</label>
                    </div>                

                    <div class="custom-control custom-radio">
                       <input class="custom-control-input" type="radio" id="provinsi" name="wilayah" value="provinsi">
                       <label for="provinsi" class="custom-control-label">Provinsi</label>
                    </div>

                    <div class="custom-control custom-radio">
                       <input class="custom-control-input" type="radio" id="kabKota" name="wilayah" value="kota">
                       <label for="kabKota" class="custom-control-label">Kab/Kota</label>
                    </div>

                    <div class="custom-control custom-radio">
                       <input class="custom-control-input" type="radio" id="kecamatan" name="wilayah" value="kecamatan">
                       <label for="kecamatan" class="custom-control-label">Kecamatan</label>
                    </div>

                    <div class="custom-control custom-radio">
                       <input class="custom-control-input" type="radio" id="desa" name="wilayah" value="desa">
                       <label for="desa" class="custom-control-label">Desa</label>
                    </div>    
                    
                </div>
                <div class="form-group row list-inline" style="margin-left: 39px;  margin-bottom: 10px;" id="prov">
                    <p class="list-inline-item"><b>Pilih Provinsi :</b></p>
                    <div class="list-inline-item ml-2">
                    <select class="form-control form-control-sm select2 list-inline-item" name="provSelect"  id="provinsiSelect">
                      <option selected disabled value="">--- Pilih Provinsi ---</option>
                        <?php foreach ($dataProvinsi as $data ) { ?>
                          <option value="<?php echo $data->kd_prov; ?>"><?php echo $data->nama_prov; ?></option>
                        <?php } ?>
                    </select>
                    </div>
               </div>
               <div class="form-group row list-inline" style="margin-left: 31px;  margin-bottom: 10px;" id="kab">
                    <p class="list-inline-item"><b>Pilih Kab/Kota :</b></p>
                    <div class="list-inline-item ml-2">
                    <select class="form-control form-control-sm select2 list-inline-item" name="kota" id="kabSelect"  >
                        
                    </select>
                    </div>
               </div>
               <div class="form-group row list-inline" style="margin-left: 19px;  margin-bottom: 10px;" id="kecamatan2">
                    <p class="list-inline-item"><b>Pilih Kecamatan :</b></p>
                    <div class="list-inline-item ml-2">
                    <select class="form-control form-control-sm select2 list-inline-item" name="kecamatan" id="kecamatanSelect">
                    <option>--- Pilih Kecamatan ---</option>
                    <option value="1">opn 1</option>
                      <option value="2">opn 2</option>
                    </select>
                    </div>
               </div>
               <div class="form-group row list-inline" style="margin-left: 64px;  margin-bottom: 10px;" id="desa2">
                    <p class="list-inline-item"><b>Pilih Desa :</b></p>
                    <div class="list-inline-item ml-2">
                    <select class="form-control form-control-sm select2 list-inline-item" name="desa" id="desaSelect">
                          <option >--- Pilih Desa ---</option>
                          <option value="1">opn 1</option>
                          <option value="2">opn 2</option>
                    </select>
                    </div>
               </div>
               <div class="form-group row" style="margin-left: 160px;  margin-bottom: 10px;" id="tbl">
                    <a href="javascript: void(0);" class="btn btn-primary btn-sm" onclick="getData();"><i class="fas fa-check"></i>  <b>Tampilkan</b></a>
               </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        
        <div class="row mt-4" id="dataTabel">
          <div class="col-12">
            <div class="card">
              <div class="card-header" style="background-color: #F5F5F5;">
                <h5 class="card-title"><i class="fas fa-database " style="color:#FF8C00"></i> <b class="ml-2">DATA</b> </h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="Tabelmenu" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Provinsi</th>
                    <th>Kabupaten/Kota</th>
                    <th>Kecamatan</th>
                    <th>Desa</th>
                    <th>Menu</th>
                    <th>Rincian</th>
                    <th>Volume</th>
                    <th>Nilai Usulan</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  </tbody>
                  <tfoot>
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Modal Tambah -->
    <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Bidang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="formTambah">
            <div class="form-group">
              <label for="namaBidang" class="col-form-label">Nama Bidang:</label>
              <input type="text" class="form-control" name="namaBidang" id="namaBidang">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-success" onclick="save()">Save</button>
        </div>
      </div>
    </div>
  </div>

    <!-- End Moadl Tambah -->

<!-- Modal Edit -->
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Event</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="formEdit">
            <div class="form-group">
              <label for="namabidang2" class="col-form-label">Nama Bidang:</label>
              <input type="text" class="form-control" name="namaBidang" id="namabidang2">
              <input type="hidden" name="id_slug" id="id_slug">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-success" onclick="saveEdit()">Save</button>
        </div>
      </div>
    </div>
  </div>
<script type="text/javascript">
  $( document ).ready(function() {
    var nomorGlobal = 0;
    $.LoadingOverlaySetup({
    background      : "rgba(0, 0, 0, 0.1)",
    image           : base_url()+"assets/gift/loading.gif",
    // fontawesome     : "fas fa-sync-alt fa-spin",
    
});
   
    $('input[type=radio][name=wilayah]').change(function() {
       reset()
      if (this.value == 'allWilayah') {
         $("#tbl").css("display", "block");
         $("#prov").css("display", "none");
         $("#kab").css("display", "none");
         $("#desa2").css("display", "none");
         $("#kecamatan2").css("display", "none");
      }
      else{
        $("#tbl").css("display", "none");
        $("#prov").css("display", "block");
        $("#kab").css("display", "none");
        $("#desa2").css("display", "none");
        $("#kecamatan2").css("display", "none");
      }
      
    });


    $('#provinsiSelect').change(function(){ 
      var value = $(this).val();
      var lvl = $('input[name=wilayah]:checked').val();

      if (lvl == 'provinsi') {
          $("#tbl").css("display", "block");
      }else{
         setOption(value);
         $("#kab").css("display", "block");
         
      }
    });

    $('#kabSelect').change(function(){ 
      var value = $(this).val();
      var lvl = $('input[name=wilayah]:checked').val();
      if (lvl == 'kota') {
          $("#tbl").css("display", "block");
      }else{
         $("#kecamatan2").css("display", "block");
         
      }
    });

    $('#kecamatanSelect').change(function(){ 
      var value = $(this).val();
      var lvl = $('input[name=wilayah]:checked').val();
     
      if (lvl == 'kecamatan') {
          $("#tbl").css("display", "block");
      }else{
         $("#desa2").css("display", "block");
         
      }
    });


    $('#desaSelect').change(function(){ 
      var value = $(this).val();
      var lvl = $('input[name=wilayah]:checked').val();
     $("#tbl").css("display", "block");
      
    });

   function setOption(idProv, idKab, idKec, idDes){
    $.ajax({
        url: base_url()+'C_dashboard/getDaerah',
        type: "post",
        dataType: 'json',
        beforeSend: $.LoadingOverlay("show"),
        data: {idProv:idProv, idKab:idKab, idKec:idKec, idDes:idDes},
        success: function (res) {
         console.log(res[0]);
        var html = '<option>--- Pilih Kabupaten/Kota ---</option>';
        for(let i = 0; i < res.length; i++){
          html += `<option value="`+res[i].kd_kab+`">`+res[i].nama_kab+`</option>`;

        }

         $("#kabSelect").html(html);
         $.LoadingOverlay("hide")
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
           error('Error', 'Ada yang Error Silahkan Hubungi Developer')
        }
    });
   } 

   getData = async function() {
       var lvl = $('input[name=wilayah]:checked').val();
       await ajaxTabel(nomorGlobal);
       nomorGlobal++;
       await $("#dataTabel").css("display", "block");
       $('html, body').animate({scrollTop:$('#dataTabel').position().top}, 'slow')
    
   }

testBasat = function () {
 
var lvl = $('input[name=wilayah]:checked').val();
 provinsi = (lvl != 'allWilayah') ? $('select[name=provSelect] option:selected').val():null;
 kota = (lvl != 'provinsi') ? $('select[name=kota] option:selected').val():null;
 kecamatan = (lvl == 'kecamatan' || lvl == 'desa') ? $('select[name=kecamatan] option:selected').val():null;
 desa = (lvl == 'desa') ? $('select[name=desa] option:selected').val():null;



console.log(provinsi, +' '+ kota, +' '+ kecamatan, +' '+ desa);

}

var lvl = $('input[name=wilayah]:checked').val();
$('#Tabelmenu').DataTable({ 
        "responsive": true,
        "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "processing": false, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
        "orderable": false,
        bAutoWidth: false,
        aoColumns : [
          
          { sWidth: 'auto' },
          { sWidth: 'auto' },
          { sWidth: 'auto' },
          { sWidth: 'auto' },
          { sWidth: 'auto' },
          { sWidth: 'auto' },
          { sWidth: 'auto' },
          { sWidth: '15%' },
          
        ],
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('C_dashboard/get_data_tables')?>",
            "type": "POST",
            "dataType": 'json',
            "async":true, 
            "data": function ( data ) {
                data.provinsi = (lvl != 'allWilayah') ? $('select[name=provSelect] option:selected').val():null;
                data.kota = (lvl != "allWilayah" || lvl != 'provinsi') ? $('select[name=kota] option:selected').val():null;
                data.kecamatan = (lvl == 'kecamatan' || lvl == 'desa') ? $('select[name=kecamatan] option:selected').val():null;
                data.desa = (lvl == 'desa') ? $('select[name=desa] option:selected').val():null; 
            }
          },
 
        // Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0,1,2,3,4,5,6,7], //first column / numbering column
            "className": "text-center",
            "orderable": false
        }
        ],
        "aoColumnDefs" : [

        ]
 
    });




ajaxTabel = async  function(nomorGlobal) {  
$.ajaxSetup({
   "beforeSend" :  $.LoadingOverlay("show"),
   "complete": function (data) {
                $.LoadingOverlay("hide")
                
            }
});

  await $('#Tabelmenu').DataTable().ajax.reload();

}

function reset() {
  $('#provinsiSelect').prop('selectedIndex',0);
  $('#kabSelect').prop('selectedIndex',0);
  $('#kecamatanSelect').prop('selectedIndex',0);
  $('#desaSelect').prop('selectedIndex',0);
}

})
</script>