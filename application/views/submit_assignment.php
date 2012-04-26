<?php $this->load->view('header') ?>
<div role="main" id="main">
	<h2>Submit Assignment</h2>
        <h3>Assignment 3</h2>
        <p>Due: </p>
	<div class="table-wrapper">
	<form>
        <label for="description">Description</label>
        <textarea name="description"></textarea>
        <input type="file" name="file" />
        <input type="submit" name="submit" value="submit" />
      </form>
	</div>
</div>
<?php $this->load->view('sidebar') ?>
<?php $this->load->view('footer') ?>