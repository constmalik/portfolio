<?php
include('inc/header.php');
?>
  <div class="contact-content">
    <h1>Contact Me</h1>

    <form class="contact" action="index.html" method="post">

      <div class="">
        <input type="text" name="name" id="name" placeholder="Name" required>

        <input type="email" name="email" id="email" placeholder="Email" required>

      </div>

      <div>
        <input type="tel" name="phone" id="phone" placeholder="Phone" required>

        <input type="text" name="company" id="company" placeholder="Company" >
      </div>

      <div>
        <textarea name="comments" rows="8" cols="40" id="comments" placeholder="Comments"></textarea>
      </div>

      <div class="">
        <input type="submit" id="submitbtn" value="send message">
      </div>

    </form>

    <div class="thank-you">

    </div>
  </div>
<?php
include('inc/footer.php');
?>
