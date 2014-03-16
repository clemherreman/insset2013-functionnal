<!DOCTYPE html>
<html>
<head>
    <?php include(__DIR__.'/reusable/head.php') ?>
    <title>Hello functionnal testing world!</title>
    <script src="js/bootstrap3-typeahead.js"></script>
</head>
<body>
    <?php include(__DIR__.'/reusable/nav.php') ?>
    <div class="container">
        <div class="starter-template">
            <h1>Hello INSSET!</h1>
            <p class="lead">
                User interactions — Javascript
            </p>
            <form role="form" method="post" action="">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="animals" id="animals" placeholder="Unicorn, cat…"/>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(function() {
            $("#animals").typeahead({
                source: ['Unicorn', 'Cats', 'Pony', 'Kitten', 'Spider']
                
//                source: function(query, callback) {
//                    var animals = ['Unicorn', 'Cats', 'Pony', 'Kitten', 'Spider'];
//                    console.log('Querying source');
//                    setTimeout(function() {
//                        console.log('Returning source');
//                        callback(animals);
//                    }, 4000);
//                }
            });
        });
    </script>
</body>
</html>
