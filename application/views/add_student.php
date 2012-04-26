<?php $this->load->view('header') ?>
<div role="main" id="main">
    <h2>Add Student</h2>
  <?=form_open('users/insertStudent/'); ?>
    <p>First Name: <input type="text" name="firstName" /><br />
      Last Name: <input type="text" name="lastName" /><br />
      Email address: <input type="text" name="email" /><br />
      Password: <input type="password" name="passwd" /><br />  
      <input type="hidden" name="userLevelID" value="1" />   
      Add Avatar:  <br />
  <div class="avatar-select"> 
  <input type="radio" name="avatar" value="avatar1" id="avatar1-radio">
  <label for="avatar1-radio"><img src="<?php echo base_url(); ?>/img/ avatars/avatar1.png" width="80"></label>

  <input type="radio" name="avatar" value="avatar2" id="avatar2-radio">
  <label for="avatar2-radio"><img src="<?php echo base_url(); ?>/img/ avatars/avatar2.png" width="80"></label>

  <input type="radio" name="avatar" value="avatar3" id="avatar3-radio">
  <label for="avatar3-radio"><img src="<?php echo base_url(); ?>/img/ avatars/avatar3.png" width="80"></label>

  <input type="radio" name="avatar" value="avatar4" id="avatar4-radio">
  <label for="avatar4-radio"><img src="<?php echo base_url(); ?>/img/ avatars/avatar4.png" width="80"></label>

  <input type="radio" name="avatar" value="avatar5" id="avatar5-radio">
  <label for="avatar5-radio"><img src="<?php echo base_url(); ?>/img/ avatars/avatar5.png" width="80"></label>

  <input type="radio" name="avatar" value="avatar6" id="avatar6-radio">
  <label for="avatar6-radio"><img src="<?php echo base_url(); ?>/img/ avatars/avatar6.png" width="80"></label>

  <input type="radio" name="avatar" value="avatar7" id="avatar7-radio">
  <label for="avatar7-radio"><img src="<?php echo base_url(); ?>/img/ avatars/avatar7.png" width="80"></label>

  <input type="radio" name="avatar" value="avatar8" id="avatar8-radio">
  <label for="avatar8-radio"><img src="<?php echo base_url(); ?>/img/ avatars/avatar8.png" width="80"></label>

  <input type="radio" name="avatar" value="avatar9" id="avatar9-radio">
  <label for="avatar9-radio"><img src="<?php echo base_url(); ?>/img/ avatars/avatar9.png" width="80"></label>

  <input type="radio" name="avatar" value="avatar10" id="avatar10-radio">
  <label for="avatar10-radio"><img src="<?php echo base_url(); ?>/img/ avatars/avatar10.png" width="80"></label>
  </div>   
      
      
      
      <br /><br />
      <input type="submit" value="Add your new minion" />
    </p>
    </form>
</div>
<?php $this->load->view('sidebar') ?>
<?php $this->load->view('footer') ?>