<?php
include('../inc/server.php');
include('../inc/header.php');
?>
<div class="container mt-5 w-50 ">
    <div class="card" >
        <div class="card-header text-center">
            PHP BMI Calculator
        </div>
        <div class="card-body">
            <form action="./index.php" method="post">
                <div class="form-group">
                    <label for="height">Your height in (cm)</label>
                    <input type="number" class="form-control" name="height" id="height" required>
                </div>
                <div class="form-group">
                    <label for="weight">Your weight in (kg)</label>
                    <input type="number" class="form-control" name="weight" id="weight" required>
                </div>
                <div class="form-group text-right">    
                    <input type="submit" class="btn btn-primary btn-block" name="submit"  value="Compute BMI">
                </div>
            </form>
        </div>
    </div>
</div>