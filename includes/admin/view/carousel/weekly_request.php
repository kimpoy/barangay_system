<div id="demo6" class="carousel slide" data-interval="false" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo6" data-slide-to="0" class="active"></li>
        <li data-target="#demo6" data-slide-to="1"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <!-- PIE GRAPH -->
            <canvas class="col-10 mt-5" id="myChart4" style="margin:auto;"></canvas><br>
        </div>
        <div class="carousel-item">
            <div class="col-10 mt-5" style="margin:auto;">
                <!-- TABLE -->
                <table class="table table-responsive table-light table-striped table-bordered" style="overflow:scroll; height:65vh; word-break: break-all;   overflow-x: hidden; ">
                    <thread>
                        <tr class="bg-dark text-white">
                            <th style="width:10%">Name</th>
                            <th style="width:10%">Weekly Total</th>
                        </tr>
                    </thread>
                    <?php
                    foreach ($weekly_request as $keyt_weekly => $valuet_weekly) :
                    ?>
                        <tbody id="adminTable">
                            <tr>
                                <td style="width:10%"><?php echo $keyt_weekly; ?></td>
                                <td style="width:10%"><?php echo $valuet_weekly; ?></td>
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
<a class="carousel-control-prev" href="#demo6" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo6" data-slide="next">
    <span class="carousel-control-next-icon"></span>
</a>