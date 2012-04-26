<?php $this->load->view('header') ?>
<div role="main" id="main">
	<h2>Edit Assignment</h2>
	<div class="table-wrapper">
	  <form>
        <label>Assignment Name <input type="text" value="<?php echo $title; ?>"/></label>
        <label>Due <input type="datetime" value="<?php echo $dueDate; ?>" /><label>
        <label>Point Value <input type="number" value="<?php echo $maxPoints; ?>" /></label>
        <label for="description">Description</label>
        <textarea name="description"><?php echo $information; ?></textarea>
        <input type="submit" name="submit" value="submit" />
      </form>
	</div>
</div>
<?php $this->load->view('sidebar') ?>
<?php $this->load->view('footer') ?>