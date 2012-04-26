<?php $this->load->view('header') ?>
<div role="main" id="main">
	<h2>Create Assignment</h2>
	<div class="table-wrapper">
	  <?=form_open('assignments/insertAssignment'); ?>
        <label>Assignment Name <input name="title" type="text" /></label>
         <label>Set <input name="setDate" type="datetime" /><label>
        <label>Due <input name="dueDate" type="datetime" /><label>
        <label>Point Value <input name="maxPoints" type="number" /></label>
        <label for="desc">Description</label>
        <textarea name="information"></textarea>
        <input type="submit" value="submit" />
      </form>
	</div>
</div>
<?php $this->load->view('sidebar') ?>
<?php $this->load->view('footer') ?>