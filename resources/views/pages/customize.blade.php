<!DOCTYPE html>
<html>
<head>
	<title>Customize Hukcommerce Scroll Progress Bar</title>
	@include('includes.head')
</head>
<body>
	<header>
		@include('includes.header')
	</header>
	<div class="container-md py-3 mt-3">
		<div class="row">
			<div class="customize-tab">
				<form action="#">
					<div class="enable-plugin rounded-lg container shadow border pt-3 mt-2">
						<h5>Enable Plugin</h5>
						<label class="mb-3">Enabled:</label>
						<input id="enablePlugin" name="isEnable" type="checkbox" value="enable" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="xs" data-style="slow">
					</div>
					<div class="positioning rounded-lg container shadow border pt-3 mt-3">
						<h5>Positioning</h5>
						<label>Position:</label>
						<select class="custom-select mb-3" id="positioning" name="positioning">
    						<option value="top" selected>Top</option>
    						<option value="bottom">Bottom</option>
    						<option value="right">Right</option>
    						<option value="left">Left</option>
  						</select>
					</div>
					<div class="background-color rounded-lg container shadow border pt-3 mt-3">
						<h5>Background</h5>
    					<label for="bgcolor">Background Color:</label>
  						<input class="form-control form-control-color mb-3" type="color" id="bgcolor" name="bgcolor" value="#007bff">
					</div>
					<div class="height container rounded-lg shadow border pt-3 mt-3">
						<h5>Height</h5>
    					<label class="form-label" for="heightRange">Height:</label>
						<div class="range">
						  <input type="range" name="height" class="form-control-range" id="height" min="3" max="50" step="1" value="8" />
						</div>
						<div class="mb-3" id="result">Value: <b></b></div>
					</div>
					<div class="display rounded-lg container shadow border pt-3 mt-3">
						<h5>Display</h5>
						<div class="form-check">
					      <label class="form-check-label" for="radio1">
					        <input type="radio" class="form-check-input" id="radio1" name="display" value="allpages" onclick="hideInput()">All Pages
					      </label>
					    </div>
					    <div class="form-check">
					      <label class="form-check-label" for="radio2">
					        <input type="radio" class="form-check-input" id="radio2" name="display" value="homepage" onclick="hideInput()">Home Page
					      </label>
					    </div>
					    <div class="options-page form-check mb-3">
					      	<label class="form-check-label" for="radio3">
					        <input type="radio" class="form-check-input" id="radio3" name="display" value="optionspage" onclick="showInput()">Option Pages
					      	</label>
					      	<div id="optionPagesInput" class="hide">
					      		<input type="text" name="optionPagesInput" class="form-control mb-3">
					      		<div class="optionPagesInput-help-text">
					      			Eg. If you want to show the app on blog, https://yourstore.com/blog enter 'blog'
					      		</div>
					    	</div>
						</div>
					</div>
					<input id="saveButton" type="submit" value="Save" class="float-right rounded-lg mt-3 btn btn-outline-primary">
				</form>
			</div>
		</div>
	</div>
	<footer class="mt-3">
		@include('includes.footer')
	</footer>
</body>
</html>

<style type="text/css">

	.hide {
		display: none;
	}

	.slow  .toggle-group { transition: left 0.7s; -webkit-transition: left 0.7s; }

</style>
<script>

    $(document).ready(function(){
        // Read value on page load
        $("#result b").html($("#height").val());

        // Read value on change
        $("#height").change(function(){
            $("#result b").html($(this).val());
            var positioning = $('#positioning option:selected').val();
			var bgcolorhexcode = $('#bgcolor').val();
			var height = $('#height').val();
			var bgcolor = bgcolorhexcode.replace('#','%23');
			var uriString = "/preview?positioning="+positioning+"&bgcolor="+bgcolor+"&height="+height;
			$("#preview").attr("src", uriString);
        });

        $('#positioning').change(function(){
            var positioning = $('#positioning option:selected').val();
			var bgcolorhexcode = $('#bgcolor').val();
			var height = $('#height').val();
			var bgcolor = bgcolorhexcode.replace('#','%23');
			var uriString = "/preview?positioning="+positioning+"&bgcolor="+bgcolor+"&height="+height;
			$("#preview").attr("src", uriString);
		});

        $('#bgcolor').change(function(){
            var positioning = $('#positioning option:selected').val();
			var bgcolorhexcode = $('#bgcolor').val();
			var height = $('#height').val();
			var bgcolor = bgcolorhexcode.replace('#','%23');
			var uriString = "/preview?positioning="+positioning+"&bgcolor="+bgcolor+"&height="+height;
			$("#preview").attr("src", uriString);
		});
    });

    function showInput(){
  		document.getElementById('optionPagesInput').style.display = 'block';
	}

	function hideInput(){
  		document.getElementById('optionPagesInput').style.display ='none';
	}
</script>