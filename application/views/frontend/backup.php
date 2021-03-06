<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Light on</title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/introjs.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

      <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
      crossorigin="" />

      

    <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend/css/style.css">
      

    
    


    


</head>

<body>
    <header>
        <div class="container-fluid d-flex align-items-center  custom-flex">
          
            <div class="logoHolder">

                <span class="LogoText">
                    LightOn
                </span>
            </div>
            <?php
              $error=	$this->session->flashdata('msg');
               if($error){ ?>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 <div class="alert alert-info alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Message!!!!</strong> <?php echo $error ; ?>
                      </div>
               <?php
               }
                ?>
            <div class="switch right ">

                <input type="checkbox" id="id-name--1" name="set-name" class="switch-input toglbtn">
                <label for="id-name--1" class="switch-label"><span class="toggle--on">Darkmode</span><span class="toggle--off">Lightmode</span></label>
            </div>

        </div>



    </header>
    <div class="mainholder">
      <div class="sideData">
            <div class="arowIcon">
                <i class="fa fa-arrow-right"></i>
            </div>

            <div id="chart1" style="height:200px"></div>
            <div id="chart2" style="height:200px"></div>
            <div class="charts"></div>

            <!-- progress report -->
            <div class="progress-report">

              <!-- progress reportOne -->
              <div class="progressOne">
                <div class="progressWrapper">
                  <h4>Solar Light<span class="total-count">5000</span></h4>
                    <div class="progress-content">
                        <h5>function</h5>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                            <span class="popOver" data-toggle="tooltip" data-placement="top">85%</span>
                        </div>
                        <div class="datashow">
                            <label>Solar light : </label><span class="progress-value">85%</span>
                        </div>
                    </div>
                </div>
                <div class="progressWrapper">
                    <div class="progress-content">
                        <h5>Non-functional</h5>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                            <span class="popOver" data-toggle="tooltip" data-placement="top">0</span>
                        </div>
                        <div class="datashow">
                            <label>Non-functional : </label><span class="progress-value">0</span>
                        </div>
                    </div>
                </div>
              </div>

              <!-- progress reportTwo -->
              <div class="progressTwo">
                <div class="progressWrapper">
                  <h4>Electric Light<span class="total-count">5000</span></h4>
                    <div class="progress-content">
                        <h5>function</h5>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                            <span class="popOver" data-toggle="tooltip" data-placement="top">0</span>
                        </div>
                        <div class="datashow">
                            <label>Function : </label><span class="progress-value">0</span>
                        </div>
                    </div>
                </div>
                <div class="progressWrapper">
                    <div class="progress-content">
                        <h5>Non-functional</h5>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                            <span class="popOver" data-toggle="tooltip" data-placement="top">0</span>
                        </div>
                        <div class="datashow">
                            <label>Non-functional : </label><span class="progress-value">0</span>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          
          <!-- progress report end -->

            <div class="btnflex">
              <button class="export-btn"> Data</button>
              <button class="nextprev mt30 aboutbtn">
                  <span> About US</span>
              </button>
            </div>

                <h1 data-step="3" data-intro="Click to find out more about Project!"></h1>
        </div>
        <section class="main" id="mapid">

        
        </section>
        
        <div class="fixedfooter">
            <h1 data-step="1" data-intro="Click and add Markers to map!"></h1>
            <button class="maptopBtn" type="button" data-toggle="modal" data-target="#modal1">
                <i class="fa fa-lightbulb">

                </i>
                <span>ADD LIGHT TO MAP</span>
                <img class="bulb" src="<?php echo base_url()?>assets/frontend/image/light.svg" alt="">

            </button>
        </div>

        <!--Lagend start -->
        <div class="legends">

          <!-- filter section Upadated-->
            <div class="filter">
                <form>
                    <ul>
                        <li>
                          <!-- sub filter -->
                          <div class="toggle-subfilter">
                            <h5>Solar Light </h5>
                            <!-- filter -->
                            <div class="toggle-filter">
                              <p>functional</p>
                              <div class="switch">
                                  <input type="checkbox" id="function-btn">
                                  <label for ="function-btn"></label>
                              </div>
                            </div>

                            <!-- filter -->
                            <div class="toggle-filter">
                              <p>Non-functional</p>
                              <div class="switch">
                                  <input type="checkbox" id="nonfunction-btn">
                                  <label for ="nonfunction-btn"></label>
                              </div>
                            </div>

                          </div>
                        </li>
                        <li>
                          <!-- sub filter -->
                          <div class="toggle-subfilter">
                            <h5>Electric Light</h5>
                            <!--filter -->
                            <div class="toggle-filter">
                              <p>functional</p>
                              <div class="switch">
                                  <input type="checkbox" id="electric-btn">
                                  <label for ="electric-btn"></label>
                              </div>
                            </div>

                            <!--filter -->
                            <div class="toggle-filter">
                              <p>Non-functional</p>
                              <div class="switch">
                                  <input type="checkbox" id="nonelectric-btn">
                                  <label for ="nonelectric-btn"></label>
                              </div>
                            </div>
                          </div>
                        </li>
                    </ul>
            
                </form>
            </div>
        </div>

        <!--lagend end -->

        <h1 data-step="2" data-intro="Click and find in the map  different types of lights being used"></h1>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Adding Light </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div id="iframeMap" style="height:500px;width:100%;">
                                <!-- <iframe class="if" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41859.45387494911!2d85.29525368777576!3d27.710926335140037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu+44600!5e0!3m2!1sen!2snp!4v1550050391018"
                                    width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                            </div>

                        </div>

                        <div class="col-md-5">

                            <div>
                                <div id="rootwizard">
                                    <div class="navbar">
                                        <div class="navbar-inner">

                                            <ul>
                                                <li><a href="#tab1" data-toggle="tab">First</a></li>
                                                <li><a href="#tab2" data-toggle="tab">Second</a></li>
                                                <li><a href="#tab3" data-toggle="tab">Third</a></li>
                                                <li><a href="#tab4" data-toggle="tab">Forth</a></li>
                                                <li><a href="#tab5" data-toggle="tab">Fifth</a></li>
                                                <li><a href="#tab6" data-toggle="tab">Sixth</a></li>
                                                <li><a href="#tab7" data-toggle="tab">Seventh</a></li>
                                                <li><a href="#tab8" data-toggle="tab">Eighth</a></li>
                                                <li><a href="#tab9" data-toggle="tab">Ninth</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                    <div id="bar" class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 0%;"></div>
                                    </div>

                                    <div class="tab-content">
                                        <div class="tab-pane" id="tab1">
                                          <form action="" method="POST" enctype="multipart/form-data">
                                            <div class="question">
                                                <h5> 1. Who is your area coordinator? </h5>
                                                <select name="who_is_your_area_coordinator">
                                                    <option value="ramSharma">Ram Sharma</option>
                                                    <option value="KrishnaParsad">Krishna Parsad</option>

                                                </select>


                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab2">

                                              <div class="question">
                                                  <h5> 2. Where is this street light located? </h5>
                                                  <div class="choice d-flex   flex-column  ">
                                                      <label class="rc mr30">Highway
                                                          <input type="radio" value="highway" name="where_is_this_street_light_located">
                                                          <span class="checkmark"></span>
                                                      </label>
                                                      <label class="rc mr30">Road
                                                          <input type="radio" value="road" name="where_is_this_street_light_located">
                                                          <span class="checkmark"></span>
                                                      </label>
                                                      <label class="rc mr30">Alley
                                                          <input type="radio" value="alley" name="where_is_this_street_light_located">
                                                          <span class="checkmark"></span>
                                                      </label>
                                                  </div>
                                              </div>

                                            </div>


                                        <div class="tab-pane" id="tab3">
                                            <div class="question">
                                                <h5> 3. What is your area number? </h5>
                                                <select name="what_is_your_area_number">
                                                    <option value="a1">Area 1</option>
                                                    <option value="a2">Area 2</option>

                                                </select>


                                            </div>
                                        </div>

                                        <div class="tab-pane" id="tab4">
                                          <div class="question">
                                              <h5> 4. Type of Street Light </h5>
                                              <div class="choice   morechoice d-flex flex-column">
                                                  <label class="rc mr30 rm1">Electric
                                                      <input type="radio" value="electric" name="type_of_street_light">
                                                      <span class="checkmark"></span>
                                                  </label>
                                                  <label class="rc mr30 rm1">Solar
                                                      <input type="radio" value="solar" name="type_of_street_light">
                                                      <span class="checkmark"></span>
                                                  </label>

                                              </div>
                                          </div>


                                        </div>

                                        <div class="tab-pane" id="tab5">

                                          <div class="question">
                                              <h5> 5. Type of street light poles </h5>
                                              <div class="choice   morechoice d-flex flex-column">
                                                  <label class="rc mr30 rm">Wood
                                                      <input type="radio" value="wood" name="type_of_street_light_poles">
                                                      <span class="checkmark"></span>
                                                  </label>
                                                  <label class="rc mr30 rm">Concrete
                                                      <input type="radio" value="concrete" name="type_of_street_light_poles">
                                                      <span class="checkmark"></span>
                                                  </label>
                                                  <label class="rc mr30">Other
                                                      <input type="radio" id="others" name="other">
                                                      <span class="checkmark"></span>
                                                  </label>
                                                  <label id="otherinput">
                                                    <input class="darkInput mt15 inputmore" type='text' name='type_of_street_light_poles_other' id='name'
                                                        placeholder='Enter Your Name'>
                                                  </label>

                                              </div>
                                          </div>

                                        </div>
                                        <div class="tab-pane" id="tab6">

                                          <div class="question">
                                              <h5> 6. What is status of  street light</h5>
                                              <div class="choice   morechoice d-flex flex-column">
                                                  <label class="rc mr30 rm">Functional
                                                      <input type="radio" value="functional" name="what_is_the_status_of_street_light">
                                                      <span class="checkmark"></span>
                                                  </label>
                                                  <label class="rc mr30 rm">Non functional
                                                      <input type="radio" value="non functional" name="what_is_the_status_of_street_light">
                                                      <span class="checkmark"></span>
                                                  </label>

                                              </div>
                                          </div>
                                        </div>



                                        <div class="tab-pane" id="tab7">

                                          <div class="question">
                                              <h5> 7. Damage Detail of the street light</h5>
                                              <!-- <div class="choice   morechoice d-flex flex-column"> -->
                                                  <!-- <label class="rc mr30 rm">Solar powered -->
                                                      <!-- <input type="radio" name="radio"> -->
                                                      <textarea class="darkInput" name="damage_details_of_the_street_light" rowsize="5"></textarea>
                                                      <!-- <span class="checkmark"></span> -->
                                                  <!-- </label> -->

                                              <!-- </div> -->
                                          </div>
                                        </div>


                                        <div class="tab-pane" id="tab8">
                                          <div class="question">

                                            <h5>Select image to upload:</h5>
                                <input type="file" name="photo" id="fileToUpload">
                                        </div>
                                        </div>

                                        <div class="tab-pane" id="tab9">

                                          <div class="question">

                                            <h5> Latitude </h5>

                                            <input class="darkInput" type='text' name='latitude' id='latitude' value=''  placeholder='Enter Your Name'
                                             required>
                                            <span class="error"> Latitude </span>

                                            <h5> Longitude </h5>

                                            <input class="darkInput" type='text' name='longitude' id='longitude' value=''  placeholder='Enter Your Name'
                                                required>
                                            <span class="error"> Longitude </span>


                                          </div>
                                          <button  name="submit" type="submit"><span>submit</span></button>


                                          </form>
                                        </div>




                                        <ul class="pager wizard d-flex justify-content-end buttons ">
                                            <li class="previous first" style="display:none;"><button class="nextprev">
                                                    <span>First</span>
                                                </button></li>
                                            <li class="previous"><button class="nextprev">
                                                    <span>PREVIOUS</span>
                                                </button></li>
                                            <li class="next last" style="display:none;"><button class="nextprev">
                                                    <span>LAST</span>
                                                </button></li>
                                            <li class="next"><button class="nextprev">
                                                    <span>Next</span>
                                                </button></li>
                                        </ul>
                                    </div>

                                </div>


                            </div>




                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="ipopholder">
        <div class="olay">
            <div class="initialPopover">


                <h2 class="inpop">Welcome to Kathmandu valley utility mapping initiative</h2>
                <p>As a part of this initiative we are at first mapping the <span class="coloredtext">street lights</span>
                    along
                    with condition through crowd
                    mapping</p>


                <button class="maptopBtn ipbtn" type="button">

                    <span> GET STARTED</span>
                    <i class="fa fa-arrow-right">

                    </i>


                </button>

            </div>
        </div>
    </div>


    <section class="detail sectionPadding rlpadding about-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <video controls autoplay loop>
                        <source src="movie.mp4">
                        <source src="<?php echo base_url()?>video/Pexels Videos 1654216.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="col-md-6">
                    <h2> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, saepe.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro libero voluptatem aliquid maxime
                        veniam voluptatum cum, placeat aperiam optio corrupti exercitationem eius sed minima esse
                        tempora.
                        Vitae quasi dolorum tenetur?</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro libero voluptatem aliquid maxime
                        veniam voluptatum cum, placeat aperiam optio corrupti exercitationem eius sed minima esse
                        tempora.
                        Vitae quasi dolorum tenetur?</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro libero voluptatem aliquid maxime
                        veniam voluptatum cum, placeat aperiam optio corrupti exercitationem eius sed minima esse
                        tempora.
                        Vitae quasi dolorum tenetur? veniam voluptatum cum, placeat aperiam optio corrupti
                        exercitationem eius sed minima esse
                        tempora.</p>



                </div>

            </div>
        </div>

    </section>






    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
    <script src="<?php echo base_url()?>assets/frontend/js/bootstrap.min.js"> </script>
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js" integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
        crossorigin=""></script>

      <script src="<?php echo base_url()?>assets/frontend/js/jquery.bootstrap.wizard.js"> </script>
    <!-- <script src="<?php echo base_url()?>assets/frontend/js/jquery.steps.min.js"> </script> -->
    <script>
    $(document).ready(function(){
        var geojson='<?php echo $light_data ?>';
        geojson_layer = JSON.parse(geojson);
        console.log(geojson_layer);

        var mymap = L.map('mapid').setView([27.7172, 85.3240], 13);
        var CartoDB_DarkMatter = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
            subdomains: 'abcd',
            maxZoom: 19
        }).addTo(mymap);




        mymap.attributionControl.addAttribution(
            'this is a product of <b> NAXA </b> ');


        var Esri_WorldStreetMap = L.tileLayer(
            'https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
                attribution: 'Tiles &copy; Esri &mdash; Source: Esri, DeLorme, NAVTEQ, USGS, Intermap, iPC, NRCAN, Esri Japan, METI, Esri China (Hong Kong), Esri (Thailand), TomTom, 2012'
            });

        var OpenStreetMap_France = L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
            maxZoom: 20,
            attribution: '&copy; Openstreetmap France | &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });

        console.log(geojson_layer);
        var light_map = new L.GeoJSON(geojson_layer, {

          pointToLayer: function(feature, latlng) {
           //  if(feature.properties.incident_type=='Fire'){
           //
           // icon_url='https://unpkg.com/leaflet@1.0.3/dist/images/marker-icon.png';
           //
           //  }else if(feature.properties.incident_type=='Landslide'){
           //
           //    icon_url='https://unpkg.com/leaflet@1.0.3/dist/images/marker-icon.png';
           //
           //  }else if(feature.properties.incident_type=='Fire'){
           //
           //    icon_url='https://unpkg.com/leaflet@1.0.3/dist/images/marker-icon.png';
           //
           //  }else if(feature.properties.incident_type=='Lightning'){
           //
           //    icon_url='https://unpkg.com/leaflet@1.0.3/dist/images/marker-icon.png';
           //
           //  }else if(feature.properties.incident_type=='Waste'){
           //
           //    icon_url='https://unpkg.com/leaflet@1.0.3/dist/images/marker-icon.png';
           //
           //  }else if(feature.properties.incident_type=='Road'){
           //
           //    icon_url='https://unpkg.com/leaflet@1.0.3/dist/images/marker-icon.png';
           //
           //  }else if(feature.properties.incident_type=='Others'){
           //
           //    icon_url='https://unpkg.com/leaflet@1.0.3/dist/images/marker-icon.png';
           //  }
            icons = L.icon({
              //iconSize: [27, 27],
              iconAnchor: [13, 27],
              popupAnchor:  [2, -24],
              iconUrl: 'https://unpkg.com/leaflet@1.0.3/dist/images/marker-icon.png'
            });
            //console.log(icon.options);
            var marker = L.marker(latlng, {icon: icons});
            return marker;

          },

          onEachFeature: function(feature, layer) {
          console.log(feature.properties.who_is_your_area_coordinator);

            layer.bindPopup(""+feature.properties.id);
            //feature.properties.layer_name = "transit_stops";

          }
        }).addTo(mymap);



        $('.switch-input').on('change',function(){
          console.log('clicked');
          if(mymap.hasLayer(CartoDB_DarkMatter)){
            mymap.removeLayer(CartoDB_DarkMatter);
            mymap.addLayer(OpenStreetMap_France);
          }else{
            mymap.removeLayer(OpenStreetMap_France);
            mymap.addLayer(CartoDB_DarkMatter);
          }


        });
        });

    </script>
    <script>
    var mymap1 = L.map('iframeMap').setView([27.7172, 85.3240], 13);
    var CartoDB_DarkMatter1 = L.tileLayer(
        'https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
            subdomains: 'abcd',
            maxZoom: 19
        }).addTo(mymap1);

        var marker = L.marker([27.710623, 85.327163], {
            draggable: true
        }).addTo(mymap1);
        marker.bindPopup('<b><p class="center">Drag The Marker On Your Office</p></b>').openPopup();
        marker.on('dragend', function(e) {


            document.getElementById('latitude').value = marker.getLatLng().lat;
            document.getElementById('longitude').value = marker.getLatLng().lng;

        });



    $(".maptopBtn").click(function () {

        setTimeout(function () {
            window.dispatchEvent(new Event('resize'));
        }, 300);



    })




    mymap1.attributionControl.addAttribution(
        'this is a product of <b> NAXA </b> ');

    </script>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="<?php echo base_url()?>/assets/frontend/js/intro.min.js"></script>
    <script src="<?php echo base_url()?>/assets/frontend/js/jquery.nicescroll.min.js"></script>
    <script>
        // Build the chart
 var solar='<?php echo $pie_data_s ?>';
 var electric='<?php echo $pie_data_e ?>';
 console.log(parseInt(solar));

        Highcharts.setOptions({
            colors: ['#544711', '#A1840F', '#DDDF00', '#24CBE5', '#64E572', '#FF9655', '#FFF263', '#6AF9C4']
        });
        Highcharts.chart('chart1', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie',

            },
            title: {
                text: ''
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {

                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },

            series: [{
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: 'Electrical',
                    y: parseInt(electric),
                    sliced: true,
                    selected: true
                }, {
                    name: 'Solar',
                    y: parseInt(solar)
                }]
            }]
        });
        // Highcharts.chart('chart2', {
        //     chart: {
        //         plotBackgroundColor: null,
        //         plotBorderWidth: null,
        //         plotShadow: false,
        //         type: 'pie',
        //
        //     },
        //     title: {
        //         text: 'Use of Energy'
        //     },
        //     tooltip: {
        //         pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        //     },
        //     plotOptions: {
        //
        //         pie: {
        //             allowPointSelect: true,
        //             cursor: 'pointer',
        //             dataLabels: {
        //                 enabled: false
        //             },
        //             showInLegend: true
        //         }
        //     },
        //
        //     series: [{
        //         name: 'Brands',
        //         colorByPoint: true,
        //         data: [{
        //             name: 'Electrical',
        //             y: 61.41,
        //             sliced: true,
        //             selected: true
        //         }, {
        //             name: 'Solar',
        //             y: 11.84
        //         }]
        //     }]
        // });


        Highcharts.setOptions({

        });
    </script>
    <script>
    var bar_data='<?php echo $bar_data ?>';
    console.log(bar_data);
    var b_data=JSON.parse(bar_data);
    console.log(b_data);
    b_data.push({

        dataLabels: {
            enabled: false
        }
    })
        Highcharts.chart('chart2', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: 0,
                plotShadow: false
            },
            title: {
                text: '',
                align: 'center',

                y: 40
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    dataLabels: {
                        enabled: true,
                        distance: -50,
                        style: {
                            fontWeight: 'bold',
                            color: 'white'
                        }
                    },
                    startAngle: -90,
                    endAngle: 90,
                    center: ['50%', '75%'],
                    size: '110%'
                }
            },
            series: [{
                type: 'pie',
                name: 'Browser share',
                innerSize: '50%',
                data: b_data
            }]
        });
    </script>
    <script>
        $(document).ready(function () {
            $(".arowIcon").click(function () {
                    $(this).toggleClass("hideSide");
                    $(".sideData").toggleClass("hideSide");
                })
                .ipbtn
            $(".ipbtn").click(function () {
              $("body").css("overflow", "auto");
                $(".olay").addClass("hide");
            })
        });
    </script>
    <script>
        $(document).ready(function () {
          $(".help ").click(function () {
              introJs().setOptions({
                  'scrollToElement': false,
                  'overlayOpacity': 0.5

              }).start();

          });

            $(".aboutBtn ").click(function () {

                $('html, body').animate({
                    scrollTop: $(".about-section").offset().top
                }, 1000);
            });
            $('#rootwizard').bootstrapWizard({

                onNext: function (tab, navigation, index) {

                    // if (index == 2) {
                    //     // Make sure we entered the name
                    //     if (!$('#name').val()) {
                    //         $(".error").addClass("show");
                    //
                    //         $("input").focus(function () {
                    //             $(".error").removeClass("show");
                    //         });
                    //
                    //         return false;
                    //
                    //     }
                    // }
                    if (index == 3) {
                      console.log('3');
                        $('.rm1').click(function () {
                          console.log('aaaa');
                            $(".type").removeClass("showinput");

                        })

                        // if ($('#others').click(function () {
                        //         $(".inputmore").addClass("showinput");
                        //
                        //     }));

                        if ($('#others1').click(function () {
                          console.log('aaaabbb');
                                $(".inputmore1").addClass("showinput");

                            }));

                    }

                    if (index == 4) {
                      console.log('4');

                        $('.morechoice .rm').click(function () {
                            $(".inputmore").removeClass("showinput");

                        })

                        if ($('#others').click(function () {
                                $(".inputmore").addClass("showinput");


                            }));



                    }





                },
                onTabShow: function (tab, navigation, index) {
                    var $total = navigation.find('li').length;
                    var $current = index + 1;
                    var $percent = ($current / $total) * 100;
                    $('#rootwizard .progress-bar').css({
                        width: $percent + '%'
                    });
                }
            });

            $(".progress-bar").each(function () {
              each_bar_width = $(this).attr('aria-valuenow');
              $(this).width(each_bar_width + '%');
          });

            
              // $(".sideData").niceScroll({
              //     cursorcolor: "#a7a7a7",
              //     cursorborder: "0px solid #fff",
              //     cursorborderradius: "0px",
              //     cursorwidth: "4px"
              // });

          $('.export-btn a').on("click", function (e) {
            e.preventDefault();
              $('.export-btn ul').slideToggle(300);
            });
          
        $('.toggle-filter .switch').on("change", function () {
            $('.progress-report').show('slow');
          });
        });
        $('button.aboutbtn').on("click", function () {
            $('.about-section').toggle('slow');
          });


        
    </script>

</body>

</html>
