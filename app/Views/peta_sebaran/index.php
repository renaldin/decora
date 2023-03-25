<div class="row">
    <div class="col-md-12">
        <div class="box box-solid  bg-green">
            <!-- /.box-body -->
            <div class="box-header with-border">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="box-title"></i> <strong>Peta Sebaran Kasus Covid-19 Kabupaten Blora </strong></h3>
                    </div>
                </div>
                <p> 
    <img src="gambar/yak.jpg" width="10%" style="float:right; margin:0 9px 0;">
   
    </p>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <center><iframe src="http://localhost:8080/geoserver/SebaranCovid/wms?service=WMS&version=1.1.0&request=GetMap&layers=SebaranCovid%3ASEBARANKASUS&bbox=111.10654600000002%2C-7.3749559999998855%2C111.62987600000007%2C-6.848867246938292&width=763&height=768&srs=EPSG%3A4326&styles=&format=application/openlayers" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>

<body>


    <center> <h3>Tabel Sebaran Kasus Covid-19 Kabupaten Blora </h3> </center>

    <div class="container">
    <section class="special box">

    <table class="table table-hover">
        <thead>
            <tr>
                <th><h4>KECAMATAN</h4></th>
                <th><h4>KOTA</h4></th>
                <th><h4>PROVINSI</h4></th>
                <th><h4>KASUSCOVD</h4></th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $sql =  "SELECT * FROM peta";
            $query = mysqli_query($conn,$sql);

            while($wilayah = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $wilayah ['KECAMATAN'];?></td>
                    <td><?php echo $wilayah ['KOTA'];?></td>
                    <td><?php echo $wilayah ['PROVINSI'];?></td>
                    <td><?php echo $wilayah ['KASUSCOVD'];?></td>
                    
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>  
    </a>
    </section>
</div>
</body>


    