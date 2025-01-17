<?php
	include_once("./common.php");
	$xml = isset($_POST["xml"]) ? $_POST["xml"] : "";

	if(!empty($xml)){
		$result = simplexml_load_string($xml);
	}
?>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">XML Parser</h1>
  <hr>
</div>

<div class="container">
  <form action="index.php?page=xmlparser" method="POST">
    <div class="form-group">
      <label>XML</label>
      <textarea class="form-control" name="xml" rows="5" placeholder="XML Input"></textarea>
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-outline-secondary">Parsing</button>
    </div>
  </form>
</div>

<?php if(!empty($result)) { ?>
<hr>
<?php print_r($result); ?>
<?php } ?>