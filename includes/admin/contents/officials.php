    <!-- Brgy Official -->

    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'brgydb') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM officials") or die($mysqli->error);
    ?>

    <div class="col-3">
      <div class="official overflow-auto pt-2  text-center " style="background-color: #eee; height:100%; font-size: 0.8rem;">
        <img src="../includes/img/logo.png" class="img-fluid" alt="..." style="width:8rem; height:8rem">
        <?php
        while ($row = $result->fetch_assoc()) :
        ?>
          <p class="mb-1" style="font-weight: bold;">Official of the Barangay</p>
          <p class="mb-0"><?php echo $row['chairman']; ?></p>
          <p class="bg-secondary text-white" style="font-style: italic;">Punong Barangay</p>
          <p class="mb-0" style="font-weight: bold;">KAGAWAD:</p>
          <p class="mb-0"><?php echo $row['agriculture']; ?></p>
          <p style="font-style: italic;">Committee on Agriculture</p>
          <p class="mb-0"><?php echo $row['education']; ?></p>
          <p style="font-style: italic;">Committee on Education</p>
          <p class="mb-0"><?php echo $row['appropriations']; ?></p>
          <p style="font-style: italic;">Committee on Appropriations</p>
          <p class="mb-0"><?php echo $row['infrastructure']; ?></p>
          <p style="font-style: italic;">Committee on Public Works & Infrastructure</p>
          <p class="mb-0"><?php echo $row['peace']; ?></p>
          <p style="font-style: italic;">Committee on Peace & Order</p>
          <p class="mb-0"><?php echo $row['health']; ?></p>
          <p style="font-style: italic;">Committee on Health</p>
          <p class="mb-0"><?php echo $row['protection']; ?></p>
          <p style="font-style: italic;">Committee on Environmental Protection</p>
          <p class="mb-0"><?php echo $row['treasurer']; ?></p>
          <p style="font-style: italic;">Barangay Treasurer</p>
          <p class="mb-0"><?php echo $row['secretary']; ?></p>
          <p style="font-style: italic;">Barangay Secretary</p>
        <?php endwhile; ?>
      </div>
    </div>