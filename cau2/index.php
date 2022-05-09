<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>InternTest</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="store.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Họ và tên</label>
                        <input required type="text" class="form-control" id="myform" name="name">
                        <div id="nameHelp" class="form-text">Vui lòng nhập đầy đủ họ tên</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="myform" name="email">
                        <div id="emailHelp" class="form-text">Chúng tôi sẽ không bao giờ để lộ thông tin của người dùng.</div>
                    </div>
                    <div class="mb-3">
                        <label  for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                        <input required type="text" class="form-control" id="myform" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nội dung liên hệ</label>
                        <textArea type="text" class="form-control" id="myform" name="content"></textArea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a class="btn btn-success mx-auto" href="db.php">Xem database</a>
                        <button class="btn btn-danger float-end" type="reset">clear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>