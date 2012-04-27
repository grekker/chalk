<?php $this->load->view('header') ?>
<div role="main" id="main">
    
    <h2>Welcome, <?=$_SESSION['firstName'];?>!</h2>
    <h3>CMS Class</h3>

    <div class="table-wrapper">
    <table class="respond">
      <thead>
        <tr>
          <th>Assignment Name</th>
          <th>Due Date</th>
          <?php if ($_SESSION['userLevelID']==1){
          echo '<th>Submit</th>';
        }
          else
            echo '<th>Start Grading</th>';
          ?>
        </tr>
      </thead>
      <tbody>
      <?php foreach($entry as $row):?>
        <tr>
          <td><?php echo anchor('assignments/viewAssignment/' . $row->assignmentID, $row->title, 'title="' . $row->title . '"'); ?></td>
          <td><?php echo $row->dueDate; ?></td>
          <td>
          <?php 
            if ($_SESSION['userLevelID']==1){
              echo anchor('submissions/submitAssignment/' . $row->assignmentID, 'Submit', 'title="Grade"');
            }else{
              echo anchor('submissions/viewAssignmentGrades/' . $row->assignmentID, 'Grade', 'title="Grade"'); 
            }
            
          ?>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <?php 
    if ($_SESSION['userLevelID']==1){
      echo anchor('submissions/viewStudentGrades/' . $_SESSION['userID'], 'View Grades', 'title="View Grades"');
    }

  ?>

    <?php //if(isset($_SESSION['userLevelID']) && $_SESSION['userLevelID'] == 2) ?>

<!--
      <p class="is-warning">You have 101248 items to grade.  Oh dear. <a href="#">Get a move on.</a></p>
      <h2>Sample Table</h2>
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Due</th>
            <th>Completed</th>
            <th>Late</th>
            <th>Grading</th>
          </tr>
        </thead>
        <tr>
          <td>Assignment 1</td>
          <td>March 12, 2012</td>
          <td>22/24</td>
          <td>2</td>
          <td><a href="#">View All</a> &#149; <a href="#">Start Grading</a></td>
        </tr>
        <tr>
          <td>Assignment 2</td>
          <td>March 12, 2012</td>
          <td>22/24</td>
          <td>2</td>
          <td><a href="#">View All</a> &#149; <a href="#">Start Grading</a></td>
        </tr>
        <tr>
          <td>Assignment 3</td>
          <td>March 12, 2012</td>
          <td>22/24</td>
          <td>2</td>
          <td><a href="#">View All</a> &#149; <a href="#">Start Grading</a></td>
        </tr>
        <tr>
          <td>Assignment 4</td>
          <td>March 12, 2012</td>
          <td>22/24</td>
          <td>2</td>
          <td><a href="#">View All</a> &#149; <a href="#">Start Grading</a></td>
        </tr>
      </table>

      <h2>Sample Form</h2>
      <form>
        <label>Assignment Name <input type="text" /></label>
        <label>Point Value <input type="number" /></label>
        <label>Due <input type="datetime" /><label>
        <label for="desc">Description</label>
        <textarea name="description"></textarea>
        <input type="submit" name="submit" value="submit" />
      </form>

      <hr />
      <h2>Messages</h2>

      <p class="is-success">It's working!  IT'S WORKING!</p>
      <p class="is-error">You broke everything.</p>
      <p class="is-message">This is a message.</p>
      <p class="is-warning">Warning: this is a warning.</p>
-->
</div>
    <?php $this->load->view('sidebar') ?>
    <?php $this->load->view('footer') ?>