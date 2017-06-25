<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.2.1.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</head>
<body>

<div class="container">
  <h2>Projekt</h2>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#znamky">Znamky</a></li>
    <li><a data-toggle="tab" href="#aktivity">Aktivity</a></li>
  </ul>

  <div class="tab-content">
    <div id="znamky" class="tab-pane fade in active">
		<table class="table table-striped">
  			<tr>
    			<th>ID</th>
    			<th>Meno</th>
    			<th>Priezvisko</th>
    			<th>Datum</th>
    			<th>Aktivita</th>
    			<th>Akcia</th>
  			</tr>
  			<?php foreach ($queryResultZnamky as $tableRow):?>
				<tr>
    				<td><?php echo $tableRow->idZnamky;?></td>
    				<td><?php echo $tableRow->meno;?></td>
    				<td><?php echo $tableRow->priezvisko;?></td>
    				<td><?php echo $tableRow->datum;?></td>
    				<td><?php echo $tableRow->Aktivity_idAktivity;?></td>
    				<td>
    					<div class="btn-group" role="group" aria-label="...">
  							<button type="button" class="btn btn-default">Delete</button>
  							<button type="button" class="btn btn-default">Update</button>
						</div>
					</td>
				</tr>
  			<?php endforeach;?>
		</table>
    </div>

    <div id="aktivity" class="tab-pane fade">
		<table class="table table-striped">
  			<tr>
    			<th>ID</th>
    			<th>Nazov</th>
    			<th>Popis</th>
    			<th>Maximum</th>
    			<th>Akcia</th>
  			</tr>
  			<?php foreach ($queryResultAktivity as $tableRow):?>
				<tr>
    				<td><?php echo $tableRow->idAktivity;?></td>
    				<td><?php echo $tableRow->nazov;?></td>
    				<td><?php echo $tableRow->popis;?></td>
    				<td><?php echo $tableRow->maximum;?></td>
					<td>
    					<div class="btn-group" role="group" aria-label="...">
  							<button type="button" class="btn btn-default">Delete</button>
  							<button type="button" class="btn btn-default">Update</button>
						</div>
					</td>				
				</tr>
  			<?php endforeach;?>
		</table>
    </div>
  </div>
</div>


</body>
</html>