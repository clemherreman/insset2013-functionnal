<h2 class="lead">Welcome <?php echo $_POST['username'] ?>!</h2>
<p>
    You were successfully logged in. Congratulation!<br>
    Please find a unicorn picture to reward you!
    <?php if (isset($_POST['rememberme'])): ?>
        <br>
        <em>By the way, as you asked, we will remember you next time you come ;)</em>
    <?php endif; ?>
</p>
<img src="img/unicorn.jpg" alt="An awesome unicorn !!1!one">
