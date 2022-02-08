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
    line-height: 25px;


  }

  .select.form-control-sm~.select2-container--default .select2-selection--single {
    height: calc(1.8125rem + 2px);
     margin-top: 70px;

  }

  .select2-container  {
    width: 225px !important;
  }

  .select-biasa  {
    width: 220px !important;
  }

  #prov,#kab,#desa2,#kecamatan2,#tbl,#formUploadExcel {
    
    display: none;
  }

  table.dataTable td {
    font-size: 90%;
    font-family: tahoma;
  }

 

</style>
  <!-- End Page Title -->

    <section class="section">
     <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pilih Wilayah</h5>


              <!-- Horizontal Form -->
              <form>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Pilih Bidang :</label>
                  <div class="col-sm-3">
                    <select id="inputState" class="form-select form-select-sm">
                    <option selected>--- Pilih Bidang ---</option>
                    <?php  foreach ($dataBidang as $data) {?>
                        
                    <option value="<?php echo $data->idx; ?>"><?php echo $data->nama_bidang; ?></option>

                    <?php  } ?>
                  </select>
                  </div>
                </div>
                <fieldset class="row mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Pilih Wilayah :</legend>
                  <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="allWilayah" name="wilayah" value="allWilayah">
                      <label class="form-check-label" for="allWilayah">
                        all wilayah
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="provinsi" name="wilayah" value="provinsi">
                      <label class="form-check-label" for="provinsi">
                        Provinsi
                      </label>
                    </div>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input" type="radio"  id="kabKota" name="wilayah" value="kota">
                      <label class="form-check-label" for="kabKota">
                        Kab/Kota
                      </label>
                    </div>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input" type="radio" id="kecamatan" name="wilayah" value="kecamatan">
                      <label class="form-check-label" for="kecamatan">
                        Kecamatan
                      </label>
                    </div>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input" type="radio" id="desa" name="wilayah" value="desa">
                      <label class="form-check-label" for="desa">
                        Desa
                      </label>
                    </div>

                  </div>
                </fieldset>
                <div id="prov">
                <div class="row mb-3" >
                  <label for="provinsiSelect" class="col-sm-2 col-form-label">Pilih Provinsi :</label>
                  <div class=" col-sm-3 " >
                    <select  class="form-select form-select-sm select2"  name="provSelect" id="provinsiSelect">
                     <option selected disabled value="default">--- Pilih Provinsi ---</option>
                    <?php foreach ($dataProvinsi as $data ) { ?>
                          <option value="<?php echo $data->kd_prov; ?>"><?php echo $data->nama_prov; ?></option>
                     <?php } ?>
                  </select>
                  </div>
                </div>
                </div>
                <div id="kab">
                <div class="row mb-3" >
                  <label for="kabSelect" class="col-sm-2 col-form-label">Pilih Kab/Kota :</label>
                  <div class="col-sm-3">
                    <select class="form-select form-select-sm select2" name="kota" id="kabSelect">
                     
                    
                  </select>
                  </div>
                </div>
                </div>
                <div id="kecamatan2">
                <div class="row mb-3" >
                  <label for="kecamatanSelect" class="col-sm-2 col-form-label">Pilih Kecamatan :</label>
                  <div class="col-sm-3">
                    <select  class="form-select form-select-sm select2" name="kecamatan" id="kecamatanSelect">
                     
                    <option>--- Pilih Kecamatan ---</option>

                  </select>
                  </div>
                </div>
                </div>
                <div id="desa2">
                <div class="row mb-3" >
                  <label for="desaSelect" class="col-sm-2 col-form-label">Pilih Desa :</label>
                  <div class="col-sm-3">
                    <select  class="form-select form-select-sm select2" name="desa" id="desaSelect">
                      <option >--- Pilih Desa ---</option>
                  </select>
                  </div>
                </div>
                </div>
                <div class="text-center" style="margin-right:59%;" onclick="">
                  
                  
                </div>

              </form><!-- End Horizontal Form -->

               <div class="row mb-3" >
                 <div class="col-sm-2"></div>
                  <div class="col-sm-3">

                    <button  class="btn btn-primary btn-sm" id="tbl" onclick="getData()"><i class="bi bi-check-lg"></i> <b>Tampilkan Form</b> </button>  
                  </div>
                </div>

            </div>
          </div>
        </div>
      </div>

      <div id="formUploadExcel">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Input Data Excel</h5>
                <div class="mb-3">
                  
                  <input class="form-control" type="file"  accept=".xls,.xlsx, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-excel" id="formFile">
                </div>
                <div class="mb-2">
                  <a href="#" class="btn btn-sm btn-success"><i class="bi bi-upload"></i> <b>Upload Data</b></a>
                </div>
            </div>
            <br>
             
          </div>
        </div>
      </div>
    </div>

    </section>
<script type='text/javascript' src='http://techstumbling.com/wp-includes/js/jquery/jquery.js?ver=1.8.3'></script>
<script type="text/javascript">
$( document ).ready(function() {

    var nomorGlobal = 0;

     $('input[type=radio][name=wilayah]').change(function() {
       reset()
       $("#formUploadExcel").css("display", "none");
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
      $("#formUploadExcel").css("display", "none");
      if (lvl == 'provinsi') {
          $("#tbl").css("display", "block");
      }else{
         setOption(value, '', '', '', 1);
         $("#kab").css("display", "block");
         $("#tbl,#kecamatan2,#desa2").css("display", "none");
      }

      
    });

    $('#kabSelect').change(function(){ 
      var value = $(this).val();
      var idProv = $( "#provinsiSelect option:selected" ).val(); 
      $("#formUploadExcel").css("display", "none");          
      var lvl = $('input[name=wilayah]:checked').val();
      if (lvl == 'kota') {
          $("#tbl").css("display", "block");
      }else{
         setOption(idProv, value, '', '', 2);
         $("#kecamatan2").css("display", "block");
         $("#tbl,#desa2").css("display", "none");
      }

      
    });

    $('#kecamatanSelect').change(function(){ 
     $("#formUploadExcel").css("display", "none");
      var value = $(this).val();
      var idProv = $( "#provinsiSelect option:selected" ).val(); 
      var idKec = $( "#kabSelect option:selected" ).val(); 

      var lvl = $('input[name=wilayah]:checked').val();
     
      if (lvl == 'kecamatan') {
          $("#tbl").css("display", "block");
      }else{
        setOption(idProv, idKec, value, '', 3);
         $("#desa2").css("display", "block");
         $("#tbl").css("display", "none");
      }
    
    });


    $('#desaSelect').change(function(){ 
      var value = $(this).val();
      $("#formUploadExcel").css("display", "none");
      var lvl = $('input[name=wilayah]:checked').val();
     $("#tbl").css("display", "block");
      
    });

    function setOption(idProv, idKab, idKec, idDes, lvl){
    var dataParam;
    var htmlAwal;
    var idTempel
    var namaWilayah;
     switch (lvl) {
      case 1:
        dataParam = {idProv:idProv,lvl:lvl};
        htmlAwal = '<option value="default">--- Pilih Kabupaten/Kota ---</option>';
        idTempel = "#kabSelect";
        break;
      case 2:
        dataParam = {idProv:idProv, idKab:idKab, lvl:lvl};
        htmlAwal = '<option>--- Pilih Kecamatan ---</option>';
        idTempel = "#kecamatanSelect";
        break;
      case 3:
        dataParam = {idProv:idProv, idKab:idKab, idKec:idKec, lvl:lvl};
        htmlAwal = '<option>--- Pilih Desa ---</option>';
        idTempel = "#desaSelect";
      break;
    }
     // console.log(dataParam);

    $.ajax({
        url: base_url()+'C_dr/getDaerah',
        type: "post",
        dataType: 'json',
        beforeSend: $.LoadingOverlay("show"),
        data: dataParam,
        success: function (res) {
         // console.log(res);
        var html = htmlAwal;
        var idTest;
        for(let i = 0; i < res.length; i++){
          var cekNama = (lvl == 1) ? res[i].nama_kab : (lvl == 2) ? res[i].nam_kec : (lvl == 3) ? res[i].nama_desa : '';
          var cekId = (lvl == 1) ? res[i].kd_kab : (lvl == 2) ? res[i].kd_kec : (lvl == 3) ? res[i].kd_desa : '';
          html += `<option value="`+cekId+`">`+cekNama+`</option>`;
          idTest += cekId;
        }
         // console.log(idTest);
         $(idTempel).html(html);
         $.LoadingOverlay("hide")
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
           error('Error', 'Ada yang Error Silahkan Hubungi Developer')
        }
    });
   } 

   getData = async function() {  
      $("#formUploadExcel").css("display", "block");
   }

   function scroolOk(argument) {
      $('html, body').animate({scrollTop:$('#cardDataKegiatan2').position().top}, 'slow')
   }

   function reset() {
    $('#kabSelect').val('');
    $('#kecamatanSelect').val('');
    $('#desaSelect').val('');
    // $('#provinsiSelect').val('').trigger('change');
    $("#provinsiSelect").select2().val("default","All").trigger("change");
    $("#kabSelect").select2().val("default","All").trigger("change");

  }

    $('.select2').select2({theme: "bootstrap-5"})

  })
    </script>