	<?php
    $data=file_get_contents('https://gold-feed.com/paid/APIec258954d41428c98139e22f7185753b8c77c21fc8956c554f/all_metals_json_usd.php');

    $data_inr=file_get_contents('https://gold-feed.com/paid/APIec258954d41428c98139e22f7185753b8c77c21fc8956c554f/all_metals_json_inr.php');

        $obj = json_decode($data);
        $obj_inr= json_decode($data_inr);
        $gold_bid_usd_toz= ($obj->{'gold_bid_usd_toz'});
        $gold_ask_usd_toz= ($obj->{'gold_ask_usd_toz'});
        $silver_bid_usd_toz= ($obj->{'silver_bid_usd_toz'});
        $silver_ask_usd_toz= ($obj->{'silver_ask_usd_toz'});
        $gold_high_usd_toz=($obj->{'gold_high_usd_toz'});
        $gold_low_usd_toz=($obj->{'gold_low_usd_toz'});
        $silver_high_usd_toz=($obj->{'silver_high_usd_toz'});
        $silver_low_usd_toz=($obj->{'silver_low_usd_toz'});

        $gold_bid_inr_toz= ($obj_inr->{'gold_bid_inr_toz'});
        $gold_ask_inr_toz= ($obj_inr->{'gold_ask_inr_toz'});
        $silver_bid_inr_toz= ($obj_inr->{'silver_bid_inr_toz'});
        $silver_ask_inr_toz= ($obj_inr->{'silver_ask_inr_toz'});
        $gold_high_inr_toz=($obj_inr->{'gold_high_inr_toz'});
        $gold_low_inr_toz=($obj_inr->{'gold_low_inr_toz'});
        $silver_high_inr_toz=($obj_inr->{'silver_high_inr_toz'});
        $silver_low_inr_toz=($obj_inr->{'silver_low_inr_toz'});

        $gold_bid_n=($gold_bid_inr_toz/31.1034);
        $gold_bid_n_per=(($gold_bid_n*0.1) +$gold_bid_n)*10;

        $gold_ask_n=($gold_ask_inr_toz/31.1034);
		$gold_ask_n_per=(($gold_ask_n*0.1) +$gold_ask_n)*10;

		$silver_bid_n=($silver_bid_inr_toz/31.1034);
        $silver_bid_n_per=(($silver_bid_n*0.1) +$silver_bid_n)*10;

        $silver_ask_n=($silver_ask_inr_toz/31.1034);
		$silver_ask_n_per=(($silver_ask_n*0.1) +$silver_ask_n)*10;

		$gold_high=($gold_high_inr_toz/31.1034);
		$gold_high_per=(($gold_high*0.1) +$gold_high)*10;

		$gold_low=($gold_low_inr_toz/31.1034);
		$gold_low_per=(($gold_low*0.1) +$gold_low)*10;

		$silver_high=($silver_high_inr_toz/31.1034);
		$silver_high_per=(($silver_high*0.1) +$silver_high)*10;

		$silver_low=($silver_low_inr_toz/31.1034);
		$silver_low_per=(($silver_low*0.1) +$silver_low)*10;

        include('../db.php');
 		$query = "SELECT * FROM `rate`";
    	$result = mysqli_query($db,$query) or die(mysql_error());
    	$rows = mysqli_num_rows($result);
    	while($row = mysqli_fetch_array($result))  
                {
                	$bankcomm=$row['bank_commision'];
                	$dealercomm=$row['dealer_commision']; 
                	$triplenin=$row['999'];               	
                }

        $gold_bid_n_per= (float) $gold_bid_n_per;
        $gold_bid_n_per=round($gold_bid_n_per,0);

        $gold_ask_n_per= (float) $gold_ask_n_per;
		$gold_ask_n_per=round($gold_ask_n_per,0);

		$silver_bid_n_per= (float) $silver_bid_n_per;
        $silver_bid_n_per=round($silver_bid_n_per,0);

        $silver_ask_n_per= (float) $silver_ask_n_per;
		$silver_ask_n_per=round($silver_ask_n_per,0);

		$gold_high_per= (float) $gold_high_per;
		$gold_high_per=round($gold_high_per,0);

		$gold_low_per= (float) $gold_low_per;
		$gold_low_per=round($gold_low_per,0);

		$silver_high_per= (float) $silver_high_per;
		$silver_high_per=round($silver_high_per,0);

		$silver_low_per= (float) $silver_low_per;
		$silver_low_per=round($silver_low_per,0);

        $gold_bid_new=($gold_bid_n*0.1) +$gold_bid_n +($gold_bid_n*0.03) +$bankcomm +$dealercomm;
        $gold_bid_new_triple=$gold_bid_new-$triplenin;
        $tem_value= (float) $gold_bid_new;
        $tem_value= round($tem_value,0);
        $new_tem= (float) $gold_bid_new_triple;
        $new_tem= round($new_tem,0);

        $_SESSION['rtgs']=$tem_value;
        $_SESSION['nine']=$new_tem;
        ?>
		<center>

		<br><h3>Current Rate</h3><br>
	<!--   -->
	<table class="rate" border="1" width="100%">
		<tr>
			<th>Description</th>
			<th>Bid</th>
			<th>Ask</th>
			<th>High</th>
			<th>Low</th>
		</tr>
	<tr>
		<td id="side">Gold ($)</td>
		<td id="l"><?php echo $gold_bid_usd_toz?></td>
		<td id="r"><?php echo $gold_ask_usd_toz?></td>
		<td id="l"><?php echo $gold_high_usd_toz?></td>
		<td id="r"><?php echo $gold_low_usd_toz?></td>
		</tr>
		<tr>
		<td id="side">Silver ($)</td>
		<td id="l"><?php echo $silver_bid_usd_toz?></td>
		<td id="r"><?php echo $silver_ask_usd_toz?></td>
		<td id="l"><?php echo $silver_high_usd_toz?></td>
		<td id="r"><?php echo $silver_low_usd_toz?></td>
		</tr>
	</table>
	<div class="col-lg-5">
	<table>
		<tr>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="background-color: #d20002; color: #fff;  font-size: 18px; padding: 13px">RTGS: </td>
			<td style="background-color: #fdfc9d; color: #000;  font-size: 20px; padding: 13px; font-weight: bold;">&nbsp;&nbsp;&nbsp;<?php echo $tem_value;?>&nbsp;&nbsp;&nbsp;</td></tr>
			<tr>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td style="background-color: #d20002; color: #fff;  font-size: 18px; padding: 13px">999: </td>
			<td style="background-color: #fdfc9d; color: #000;  font-size: 20px; padding: 13px; font-weight: bold;">&nbsp;&nbsp;&nbsp;<?php echo $new_tem;?>&nbsp;&nbsp;&nbsp;</td>
	
				</tr>
	</table>
</div>
	<br><br><br><br></center>