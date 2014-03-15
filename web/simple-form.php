<!DOCTYPE html>
<html>
<head>
    <?php include(__DIR__.'/reusable/head.php') ?>
    <title>Hello functionnal testing world!</title>
</head>
<body>
    <?php include(__DIR__.'/reusable/nav.php') ?>
    <div class="container">
        <div class="starter-template">
            <h1>Hello INSSET!</h1>
            <p class="lead">
                User interactions — Forms
            </p>
        <?php if (isset($_POST['login'])): ?>
            <?php if ($_POST['password'] == 'wrong'): ?>
                <?php include(__DIR__.'/simple-form/nope.php'); ?>
            <?php else: ?>
                <?php include(__DIR__.'/simple-form/welcome.php'); ?>
            <?php endif; ?>
        <?php else: ?>
            <?php include(__DIR__.'/simple-form/loginform.php'); ?>
        <?php endif; ?>
        </div>
    </div>
</body>
</html>
