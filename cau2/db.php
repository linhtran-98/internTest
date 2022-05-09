<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Database</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Content</th>
                    </tr>
                </thead>
                <tbody>
<?php
    $conn = mysqli_connect('localhost', 'intern', 'quanglinh', 'intern') or die('Kết nối database thất bại');
    mysqli_set_charset($conn, 'UTF-8');
    $sql = 'select * from contact';
    $data = [];
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $data[] = $row;
    }

    foreach ($data as $item) {
        echo '<tr>
                <th scope="row">'.$item['contact_id'].'</th>
                <td>'.$item['name'].'</td>
                <td>'.$item['email'].'</td>
                <td>'.$item['phone'].'</td>
                <td>'.$item['content'].'</td>
                </tr>';
    }
?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>