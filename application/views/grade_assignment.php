<?php $this->load->view('header') ?>
<div role="main" id="main">
	<h2>Assigment 1</h2>
        <p>Nathan Phillips</p>
        <p>Submitted 2/12/12</p>
        <h3>Submission Info</h3>
        <p>Bacon ipsum dolor sit amet laborum corned beef pastrami beef nisi. Incididunt est magna tempor ham dolore, pastrami nulla. Pork chop in ex, proident shoulder eu veniam. Excepteur meatloaf strip steak tempor, swine pork loin veniam incididunt et sirloin corned beef biltong flank tongue leberkas. Beef ribs eu labore, ea pork ham ut nulla ut velit est do.</p>
        
       <?php $submissionID = $this->uri->segment(3); ?> 
      <?=form_open('submissions/updateGrade/'.$submissionID);?>
        <label>Grade (of 100) <input name="grade" type="number" /></label>
        <input type="submit" value="submit" />
      </form>
</div>
<?php $this->load->view('sidebar') ?>
<?php $this->load->view('footer') ?>