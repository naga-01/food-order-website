<?php include('partials-front/menu.php'); ?>
<head>
<link rel="stylesheet" href="css/contact.css">

</head>
<div class="contact">
  
    <form>
    <h1>Contact Form </h1>
        <ul>
            <li>
                <label for="name"><span>Name <span class="required-star">*</span></span></label>
                <input type="text" id="name" name="user_name">
            </li>
            <li>
                <label for="mail"><span>Email <span class="required-star">*</span></span></label>
                <input type="email" id="mail" name="user_email">
            </li>
            <li>
                <label for="msg"><span>Message</span></label>
                <textarea rows="4" cols="50"></textarea>
            </li>
            <li>
                <input type="submit">
            </li>
        </ul>
    </form>
</div>

<?php include('partials-front/footer.php'); ?>