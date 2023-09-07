
<?php
    //comment trên 1 dòng
    /*comment trên nhiều dòng */
    //$ten = "nguyễn văn A";
    //echo "<h1 style='color:red;'>Xin chào " . $ten . "</h1>";
    //include("config.php");
    require("config.php");
?>
<html>
    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>

    </head>
    <body>
        <div class="container">
            <h1 style="text-align:center;">Trang quản trị tin tức</h1>
            <div class="row">
                <form action="category.php" method="post">
                    Nhập vào tên danh mục:
                    <select class="form-control" name="" id="">
                        <option value="">Tin tức</option>
                        <option value="">Tuyển sinh</option>
                        <option value="">Đào tạo</option>
                    </select>
                    <br>
                    Nhập vào tiêu đề tin:
                    <input type="text" name="" id="" class="form-control">
                    <br>
                    Chọn hình ảnh đại diện:
                    <input type="file" name="" id="" class="form-control">
                    <br>
                    Chọn ngày đăng:
                    <input type="date" name="" id="" class="form-control">
                    <br>
                    Nhập vào nội dung tin:
                    <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                    <script>
                        CKEDITOR.replace( 'content' );
                    </script>
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