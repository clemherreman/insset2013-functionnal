<!DOCTYPE html>
<html>
<head>
    <?php include(__DIR__.'/reusable/head.php') ?>
    <title>Want some more?</title>
</head>
<body>
    <?php include(__DIR__.'/reusable/nav.php') ?>
    <div class="container">
        <div class="starter-template">
            <h1>Hello INSSET!</h1>
            <p class="lead">
                This is a little more complex page, featuring tables, list, and stuff.<br>
                Still, it stays easy to test.
            </p>
        </div>

        <h2>Coolest animals</h2>
        <ul class="cool-animals">
            <li>Cats</li>
            <li>Kitten</li>
            <li>Unicorn</li>
            <li>Pony</li>
        </ul>

        <h2>Reasons of coolness</h2>
        <table class="table table-bordered table-striped reasons">
            <thead>
                <tr>
                    <th>#</th>
                    <th>What</th>
                    <th>Why</th>
                </tr>
            </thead>
            <tbody class="reasons-list">
                <tr class="reason">
                    <td>1</td>
                    <td>Kitty</td>
                    <td>
                        <ul>
                            <li>Soft</li>
                            <li>Warm</li>
                            <li>Little ball of fur</li>
                            <li>Purr, purr, purr</li>
                        </ul>
                    </td>
                </tr>
                <tr class="reason">
                    <td>2</td>
                    <td>Cat</td>
                    <td>
                        <ul>
                            <li>Can sleep all night</li>
                            <li>Can sleep all day</li>
                        </ul>
                    </td>
                </tr>
                <tr class="reason">
                    <td>3</td>
                    <td>Unicorn</td>
                    <td>
                        <ul>
                            <li>A horn. A HORN!</li>
                            <li>Live in rainbox, eating stars</li>
                        </ul>
                    </td>
                </tr>
                <tr class="reason">
                    <td>4</td>
                    <td>Pony</td>
                    <td>
                        <img src="img/pony.jpg" width="555" height="375">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
