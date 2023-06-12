<!DOCTYPE html>
<html>

<head>
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Trang Landing Page</h1>
                <p>Sử dụng bootstrap để dựng giao diện</p>
            </div>
            <div class="col-md-6">
                <form class="col-10 mx-auto p-3 border border-primary" method="post" action="/guilienhe">
                    <h4>LIÊN HỆ</h4>
                    <div class="mb-3">
                        <label>Họ tên</label> <input class="form-control" name="ht" required>
                    </div>
                    <div class="mb-3">
                        <label>Email</label> <input class="form-control" name="em" type="email" required>
                    </div>
                    <div class="mb-3">
                        <label>Nội dung</label> <textarea class="col-md-9 form-control" name="nd"></textarea>
                    </div>
                    <div class="mb-3">
                        @csrf
                        <button type="submit" class="btn btn-warning p-2">Gửi liên hệ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
</body>

</html>
