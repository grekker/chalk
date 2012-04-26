<?php $this->load->view('header') ?>
<div role="main" id="main">
    <h2>Edit Students</h2>
  <?=form_open('users/updateStudent/'.$userID); ?>
    <label>First name: <input type="text" name="FirstName" value="<?php echo $firstName ?>" /></label>
    <label>Last Name: <input type="text" name="LastName" value="<?php echo $lastName ?>"/></label>
    <label>Email address: <input type="text" name="email" value="<?php echo $email ?>"/></label>
      Add Avatar:  <br />
      
  <input type="radio" name="avatar" value="avatar1" id="avatar1-radio">
  <label for="avatar1-radio"><a href="../../public_html/img/ avatars/avatar1.png"><img src="../../public_html/img/ avatars/avatar1.png" width="80"></a></label>
      
  <input type="radio" name="avatar" value="avatar2" id="avatar2-radio">
  <label for="avatar2-radio"><img src="../../public_html/img/ avatars/avatar2.png" width="80"></label>
      
  <input type="radio" name="avatar" value="avatar3" id="avatar3-radio">
  <label for="avatar3-radio"><a href="../../public_html/img/ avatars/avatar1.png"><img src="../../public_html/img/ avatars/avatar3.png" width="80"></a></label>
      
  <input type="radio" name="avatar" value="avatar4" id="avatar4-radio">
  <label for="avatar4-radio"><img src="../../public_html/img/ avatars/avatar4.png" width="80"></label>
  <input type="radio" name="avatar" value="avatar1" id="avatar5-radio">
      <label for="avatar5-radio"><a href="../../public_html/img/ avatars/avatar5.png"><img src="../../public_html/img/ avatars/avatar5.png" width="80"></a></label>
      </p>
    <p>
      <input type="radio" name="avatar" value="avatar2" id="avatar6-radio">
      <label for="avatar6-radio"><img src="../../public_html/img/ avatars/avatar6.png" width="80"></label>
      
      <input type="radio" name="avatar" value="avatar7" id="avatar1-radio">
      <label for="avatar7-radio"><a href="../../public_html/img/ avatars/avatar7.png"><img src="../../public_html/img/ avatars/avatar7.png" width="80"></a></label>
      
      <input type="radio" name="avatar" value="avatar8" id="avatar8-radio">
      <label for="avatar8-radio"><img src="../../public_html/img/ avatars/avatar8.png" width="80"></label>
      
      <input type="radio" name="avatar" value="avatar1" id="avatar9-radio">
      <label for="avatar9-radio"><a href="../../public_html/img/ avatars/avatar9.png"><img src="../../public_html/img/ avatars/avatar9.png" width="80"></a></label>
      
  <input type="radio" name="avatar" value="avatar10" id="avatar10-radio">
  <label for="avatar10-radio"><img src="../../public_html/img/ avatars/avatar10.png" width="80"></label>
      
      
      
      <br /><br />
      <input type="submit" value="Add your new minion" />
    </p>
  </form> 
</div>
<?php $this->load->view('sidebar') ?>
<?php $this->load->view('footer') ?>