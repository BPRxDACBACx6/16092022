<html>
    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 style="text-align:center;">Trang quản trị danh mục tin tức</h1>
            <div class="row">
                <form action="category.php" method="post">
                    Nhập vào tên danh mục:
                    <input class="form-control" type="text" name="cate_name" id="">
                    <br>
                    Nhập vào trạng thái:
                    <input class="form-control" type="text" name="status" id="">
                    <br>
                    <input class="btn btn-primary" type="submit" value="Thêm mới">
                </form>
            </div>
            <div class="row">
                <table class="table table-striped">
                    <tr>
                        <th>Mã danh mục</th>
                        <th>Tên danh mục</th>
                        <th>Trạng thái</th>
                        <th>Hành động</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Tin tức</td>
                        <td>Hiển thị</td>
                        <td>
                            <a class="btn btn-warning" href="#">Sửa</a>
                            <a class="btn btn-danger" href="#">Xóa</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Tin tức</td>
                        <td>Hiển thị</td>
                        <td>
                            <a class="btn btn-warning" href="#">Sửa</a>
                            <a class="btn btn-danger" href="#">Xóa</a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Tin tức</td>
                        <td>Hiển thị</td>
                        <td>
                            <a class="btn btn-warning" href="#">Sửa</a>
                            <a class="btn btn-danger" href="#">Xóa</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>