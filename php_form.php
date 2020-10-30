<?php
include('includes/header.php');

require('functions/country.php');
$country=country()
?>

<div class="container">
    <div class="row">

        <div class="col-md-6">
            <form action="php_form.php" method="post">
            <div class="form-group">
                <label for="country">Country</label>
                <select name="country" type="country" class="form-control" id="country">
                <?php
                foreach($country as $x => $capital) {
                ?>
                <option value="<?php echo $capital ?>"><?php echo $x ?></option>
                <?php
                }
                ?>
                </select>
            </div>
        
            <button type="submit" name="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    
        
        <div class="col-md-6">
            <h2>Result</h2><br>
            <?php
            if(isset($_POST['submit'])){
                if(!($_POST['country']==' ')){
                    echo '<h4>Capital Name: '.$_POST['country'].'</h4>';
                }
                else{
                    echo '<h4>Capital Name: Not Available</h4>';
                }
            }
            ?>
             
        </div>
  
    </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br>
<?php include('includes/footer.php') ?>
</body>
</html>
