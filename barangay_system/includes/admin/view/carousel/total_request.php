<!-- CAROUSEL FOR TOTAL REQUEST-->
<div id="demo" class="carousel slide" data-interval="false" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
    </ul>
    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <!-- PIE GRAPH -->
            <canvas class="col-10 mt-5" id="myChart1" style="margin:auto;"></canvas>
        </div>
        <div class="carousel-item">
            <div class="col-10 mt-5" style="margin:auto;">
                <!-- TABLE -->
                <table class="table table-responsive table-light table-striped table-bordered" style="overflow:scroll; height:65vh; word-break: break-all;   overflow-x: hidden; ">
                    <thread>
                        <tr class="bg-dark text-white">
                            <th style="width:10%">Name</th>
                            <th style="width:10%">Total</th>
                        </tr>
                    </thread>
                    <?php
                    foreach ($total_request as $key_total => $value_total) :
                    ?>
                        <tbody id="adminTable">
                            <tr>
                                <td style="width:10%"><?php echo $key_total; ?></td>
                                <td style="width:10%"><?php echo $value_total; ?></td>
                            </tr>
                        </tbody>
                    <?php endforeach ?>
                </table>
                <!-- END TABLE -->
            </div>

        </div>
    </div>
</div>
<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
</a>