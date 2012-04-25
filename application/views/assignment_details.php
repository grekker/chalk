<?php $this->load->view('header') ?>
<div role="main" id="main">
	<h2>Assignment Details</h2>
	<div class="table-wrapper">
	  <form>
        <label>Assignment Name <input type="text" /></label>
        <label>Due <input type="datetime" /><label>
        <label>Point Value <input type="number" /></label>
        <label for="desc">Description</label>
        <textarea name="description"></textarea>
        <input type="submit" name="submit" value="submit" />
      </form>
	</div>
</div>
<?php $this->load->view('sidebar') ?>
<?php $this->load->view('footer') ?>