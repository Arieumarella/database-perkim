
<section class="section">
     

    <div id="cardDataKegiatan">
      <div class="row" id="cardDataKegiatan2">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body" >
              <h5 class="card-title">Data Kegiatan</h5>
              <div id="hayuk">
              <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Check</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control dtp">
                  </div>
              </div>
              </div>
              

              <div class="row mb-3">
                  <button class="btn btn-sm btn-primary" onclick="tambah()">Tambah</button>
              </div>
            
            </div>
            <br>
             
          </div>
        </div>
      </div>
    </div>

    </section>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

    <script type="text/javascript">
      $( document ).ready(function() {
        $( ".dtp" ).datepicker();

        tambah = function () {
          $("#hayuk").append(`<div class="row mb-3">
                              <label for="inputEmail" class="col-sm-2 col-form-label">Check</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control dtp">
                              </div>
                          </div>`);
           $( ".dtp" ).datepicker();
        }


      })
    </script>