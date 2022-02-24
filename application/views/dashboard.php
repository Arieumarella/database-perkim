<!-- End Page Title -->
<style>
  .card-title {
    padding: 20px 0 15px 25px;
    
  }

  .card-tinggi {
    height: 450px;
  }
</style>


    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          

          <div class="row">
            <!-- Reports -->
            <div class="col-12">
              <div class="card">
            
                <!-- <div class="filter">
                  <a class="icon" href="<?php echo base_url();?>#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="<?php echo base_url();?>#">Today</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url();?>#">This Month</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url();?>#">This Year</a></li>
                  </ul>
                </div> -->


                <div class="card-body card-tinggi">
                  <div class="row">
                    <div class="col-3">  
                        <h5 class="card-title">Grafik Kegiatan</h5>
                    </div>
                    <div class="col-3">  
                        <select name="" id="" class=" form-select form-select-sm  mt-3 text-center">
                          <option value="">
                             -- Pilih Kegiatan --
                          </option>
                          <option value="">
                            sadasdsa
                          </option>
                        </select>
                    </div>
                    <div class="col-3">  
                        <select name="" id="" class=" form-select form-select-sm  mt-3 text-center">
                          <option value="">
                             -- Pilih Lokpri --
                          </option>
                          <option value="">
                            sadasdsa
                          </option>
                        </select>
                    </div>
                  </div>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->
          </div>

          <div class="row">
            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="<?php echo base_url();?>#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="<?php echo base_url();?>#">Today</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url();?>#">This Month</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url();?>#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body card-tinggi">
                  <h5 class="card-title">Grafik Lokpri</h5>

                  <!-- Line Chart -->
                  <div id="reportsChart2"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->
          </div>          
        </div><!-- End Left side columns --> 

      </div>
    </section>

    <script type="text/javascript">
      $( document ).ready(function() {
        
       
       $(".card-tinggi").LoadingOverlay("show")


        getKegiatan()
        function getKegiatan(){
          $.ajax({
              url: base_url()+'C_dashboard/getKegiatan',
              type: "post",
              dataType: 'json',
              success: async function (res) {
                dataRK = await getNilaiRK();
                var tahun = [];
                var dataKegiatan = [];
                var dataNilaiRK = [];

                for(let i = 0; i < res.length; i++){
                  tahun.push(res[i].tahun);
                  dataKegiatan.push({
                      x: res[i].tahun,
                      y: res[i].nilai_ususlan,
                      product: 'name',
                      info: 'info',
                      site: 'name'
                    });

                  dataNilaiRK.push({
                      x: dataRK[i].tahun,
                      y: dataRK[i].nilaiRK,
                      product: 'name',
                      info: 'info',
                      site: 'name'
                    });
                }

              var series = [
                  {
                    name: 'Dana Kegiatan Tahunan',
                    data: dataKegiatan,
                  },
                  {
                    name: 'Dana Nilai RK',
                    data: dataNilaiRK,
                  }
                ]
                
                chartKegiatan(tahun, series); 
                $(".card-tinggi").LoadingOverlay("hide")
              },
              error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                error('Error', 'Ada yang Error Silahkan Hubungi Developer')
              }
          });
        }


       
        
    async  function getNilaiRK(){
      var data;
        await $.ajax({
              url: base_url()+'C_dashboard/getNilaiRk',
              type: "post",
              dataType: 'json',
              success: function (res) {
               data = res
              },
              error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                error('Error', 'Ada yang Error Silahkan Hubungi Developer')
                
              }
          });
          return data;
     }

              
        chartLokpri()

        function chartKegiatan(tahun, series) {
          new ApexCharts(document.querySelector("#reportsChart"), {
                        series: series,
                        chart: {
                          height: 350,
                          type: 'line',
                          toolbar: {
                            show: true
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "solid",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'straight',
                          width: 4
                        },
                        xaxis: {
                          type: 'String',
                          categories: tahun
                        },
                        tooltip: {
                          y: {
                            formatter: function(value) {
                              return   "Rp. " + formatRupiah(value);
                            }
                          }
                         
                        }
                        }).render();
        }

        function chartLokpri() {
          new ApexCharts(document.querySelector("#reportsChart2"), {
                        series: [{
                          name: 'Sales',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Revenue',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Customers',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        },
                        {
                          name: 'Hayu',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
        }

        function formatRupiah(angka){
          const format = angka.toString().split('').reverse().join('');
          const convert = format.match(/\d{1,3}/g);
          const rupiah = convert.join('.').split('').reverse().join('');
          return rupiah;
        }

      })
    </script>