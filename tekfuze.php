
<!DOCTYPE html>
<html lang="en">
<title>KEDS</title>
<head>
<script> if (window.location.href.indexOf('minhur.github.io') > 0) window.location.replace('http://www.bootstraptoggle.com') </script>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="tekfuzecss.css">

<script>
	var x;
	$(function() {
	     x = screen.width;
	   
	      $("#all").css({
	        "min-width": x+"px"
	      });
	    });
</script>

</head>
	<body>
	<div id="all">
		<div id="content">
			<img src="/img/kedslogo.png" alt="keds image" id="kedsimg">
			<img src="/img/tekfuzelogo.png" alt="tekfuze" id="tekfuzeimg">
		
			<div id="values">
				<form id="meter">
						<div class="_meterID">
							<p class="p_bottom">Meter ID:</p>
							<input type="text" name="meterID" class="p_bottom">
						</div>

						<div class="statusi">
							<p class="p_left">Statusi:</p> 
							<textarea rows="4" cols="20" class="p_left" id="textarea"></textarea>
						</div>

				</form>

				<table class="table-bordered tabela" >
					<tr>
						<th colspan="2">Last Read</th>
						<th colspan="2">Current Read</th>
						<th colspan="2">Difference</th>
					</tr>

					<tr>
						<td>Timestamp</td>
						<td class="data"><label>123</label></td>
						<td>Timestamp</td>
						<td class="data"><label>123</label></td>
						<td>Timestamp</td>
						<td class="data"><label>123</label></td>
					</tr>

					<tr>
						<td>Read 1:</td>
						<td class="data"><label>123</label></td>
						<td>Read 1:</td>
						<td class="data"><label>123</label></td>
						<td>Read 1:</td>
						<td class="data"><label>123</label></td>
					</tr>

					<tr>
						<td>Read 2:</td>
						<td class="data"><label>123</label></td>
						<td>Read 2:</td>
						<td class="data"><label>123</label></td>
						<td>Read 2:</td>
						<td class="data"><label>123</label></td>
					</tr>

					<tr>
						<td>Read 3:</td>
						<td class="data"><label>123</label></td>
						<td>Read 3:</td>
						<td class="data"><label>123</label></td>
						<td>Read 3:</td>
						<td class="data"><label>123</label></td>
					</tr>

					<tr>
						<td>Read 4:</td>
						<td class="data"><label>123</label></td>
						<td>Read 4:</td>
						<td class="data"><label>123</label></td>
						<td>Read 4:</td>
						<td class="data"><label>123</label></td>
					</tr>

				</table>



			</div>
			<div id="control_button">
				<button id="btnRead" class="btn">Read</button>
				
				

				<button id="btnPhaseControl" class="btn">Phase Control</button>

				<div class="checkbox">
                  <label><input type="checkbox" value="">Phase 1</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="">Phase 2</label>
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="" >Phase 3</label>
                </div>

               

			</div>		
		</div>
	</body>

</html>

