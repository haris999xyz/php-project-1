<?php
include('includes/header.php');

require('functions/country.php');
$country=country()
?>

<div class="container">
    <div class="row">
    <h2>PHP Array</h2>
    <table class="table table-hover table-bordered">
    <thead>
      <tr>
        <th>Country</th>
        <th>Capital</th>
      </tr>
    </thead>
    <tbody>
        <?php
        foreach($country as $x => $capital) {
        ?>
        <tr>
            <td><?php echo $x ?></td>
            <td><?php echo $capital ?></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
  </table>
    </div>
</div>

<br>
<?php include('includes/footer.php') ?>
</body>
</html>


