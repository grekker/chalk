<?php $this->load->view('header') ?>
<div role="main" id="main">
	<h2>Edit Assignment</h2>
	<div class="table-wrapper">
	  <?=form_open('assignments/updateAssignment')?>
	    <label>Due <input name="dueDate" type="datetime" value="<?php echo $dueDate; ?>" /></label>
        <label>Set <input name="setDate" type="datetime" value="<?php echo $setDate; ?>" /></label>
        <label>Assignment Name <input name="title" type="text" value="<?php echo $title; ?>"/></label>
        <label for="description">Description</label>
        <textarea name="information"><?php echo $information; ?></textarea>
        <label>Point Value <input name="maxPoints" type="number" value="<?php echo $maxPoints; ?>" /></label>
        
        <input type="submit" value="submit" />
      </form>
	</div>
</div>
<?php $this->load->view('sidebar') ?>
<?php $this->load->view('footer') ?>