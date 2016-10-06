    <?php
    $protocol = "HTTP/1.0";
    if ( "HTTP/1.1" == $_SERVER["SERVER_PROTOCOL"] )
      $protocol = "HTTP/1.1";
    header( "$protocol 503 Service Unavailable", true, 503 );
    header( "Retry-After: 3600" );
    ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<h1>Website Under Contruction</h1>
			</div>
		</div>
	</div>
</div> 