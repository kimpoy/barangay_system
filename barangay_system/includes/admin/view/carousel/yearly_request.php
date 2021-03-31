<div id="demo2" class="carousel slide" data-interval="false" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo2" data-slide-to="0" class="active"></li>
        <li data-target="#demo2" data-slide-to="1"></li>
    </ul>
    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <!-- PIE GRAPH -->
            <canvas class="col-10 mt-5" id="myChart3" style="margin:auto;"></canvas><br>
        </div>
        <div class="carousel-item">
            <div class="col-10 mt-5" style="margin:auto;">
                <!-- TABLE -->
                <table class="table table-responsive table-light table-striped table-bordered" style="overflow:scroll; height:65vh; word-break: break-all;   overflow-x: hidden; ">
                    <thread>
                        <tr class="bg-dark text-white">
                            <th style="width:10%">Name</th>
                            <th style="width:10%">Yearly Total</th>
                        </tr>
                    </thread>
                    <?php
                    foreach ($yearly_request as $keyty => $valuety) :
                    ?>
                        <tbody id="adminTable">
                            <tr>
                                <td style="width:10%"><?php echo $keyty; ?></td>
                                <td style="width:10%"><?php echo $valuety; ?></td>
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
<a class="carousel-control-prev" href="#demo2" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo2" data-slide="next">
    <span class="carousel-control-next-icon"></span>
</a>