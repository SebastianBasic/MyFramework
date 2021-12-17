<?php
    use app\control\DataController;

    include_once "app/includes/autoload.php";
    include_once "app/includes/router.php";
    include_once "routes.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php
        $data = new DataController();
    ?>

    <div class="container">
        <table class="table">
            <thead>
                <th>Name</th>
                <th>Location</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php foreach($data->index() as $row): ?>
                    <tr>
                        <td>
                            <?php echo $row["name"] ?>
                        </td>
                        <td>
                            <?php echo $row["location"] ?>
                        </td>
                        <td>
                            <a href="data/WC<?php echo $row["id"] ?>WC/edit" class="btn btn-warning">Edit</a>
                            <a href="data/WC<?php echo $row["id"] ?>WC/delete" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <form action="/data/create" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input class="form-control" type="text" name="location" id="location">
            </div>
            <button class="btn btn-primary" type="submit" style="margin-top: 10px">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>