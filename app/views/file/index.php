<?php echo View::make('extensions.head') ?>
	<?php //echo Session::get('message'); ?>
		<!-- <form method="POST" action="file" enctype="multipart/form-data">
			<input type="file" name="files"/>
			<button type="submit">Submit</button>
		</form> -->
		<!-- <div>
			<dt>Count of Files Being Saved in the Database</dt>
			<dl>Count: -->
			<?php 
			//$files = Document::all();
				//echo ($files->count());
			?>
			<!-- </dl>
		</div> -->
<div class="panel">

		<?php foreach ($errors->all('<div data-alert id="fade" class="alert-box alert radius"> :message <a href="#" class="close">&times;</a></div>') as $message) { 
				echo $message; } ?>

<?php if(Session::has('message')){ ?>
        </br>
        <div data-alert class="alert-box success radius">
          Successfully Inserted	<?php echo Session::get('message'); ?> data 
          <a href="#" class="close">&times;</a>
        </div>
<?php } ?>
	<form method="POST" action="file">
		<div class="row">
		  <div class="small-6 large-centered columns">
		  	<label>Plant Name:
		      <input name="plant" type="text" placeholder="e.g. ANIBONG"/>
		     </label>
		  </div>
	    <div class="small-6 large-centered columns">
		  	<label>Start of serial:
		      <input name="start" type="text" placeholder="e.g. 1"/>
		     </label>
		  </div>
		  <div class="small-6 large-centered columns">
		  	<label>End of serial:
		      <input name="end" type="text" placeholder="e.g. 1000"/>
		     </label>
		  </div>
	  </div>
	  <div align="center">
	  <?php 
			$files = Document::all();
				echo "Current Data Inserted: ".($files->count())."</br>";
			?>
	  	<button class="button radius primary">Submit</button>
	  </div>
			 <!-- <div class="progress success round">
		    <span class="meter" style="width: 50%"></span>
		   </div> -->
	  <!--  <div id="progress">-1</div> -->
  </form> 
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#form-overview').on('submit', function() {
            setInterval(function(){
                $.getJSON('/progress', function(data) {
                    $('#progress').html(data[0]);
                });
            }, 1000);

            $.post(
                $(this).prop('action'),
                {"_token": $(this).find('input[name=_token]').val()},
                function() {
                    window.location.href = 'success';
                },
                'json'
            );

            return false;
        });
    });
</script>  
<?php echo View::make('extensions.bottom') ?>