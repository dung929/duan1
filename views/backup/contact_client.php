<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <head>
        <div class=" flex justify-between items-center max-w-7xl mx-auto">
            <div class="">
                <img src="./image/logo.png" alt="" class="w-[100px]" />
            </div>
            <div class="">
                <ul class=" flex ">
                    <li class="p-5 text-[20px] hover:underline hover:text-red-300 "><a href="">HOME</a></li>
                    <li class="p-5 text-[20px]  hover:underline hover:text-red-300"><a href="">TRAVEL</a></li>
                    <li class="p-5 text-[20px] hover:underline hover:text-red-300"><a href="">BLOG</a></li>
                    <li class="p-5 text-[20px] hover:underline hover:text-red-300"><a href="">CONTACT</a></li>
                </ul>
            </div>
            <div class="w-[250px]">
                <form action="">
                    <select name="" id="" class="border-2 p-3 rounded-l-2xl w-[200px]   ">
                        <option value="1">Hà Nội</option>
                        <option value="2">Thành phố HCM</option>
                    </select>
                    <button class="border-2 p-3 rounded-r-2xl text-white font-bold bg-black hover:bg-red-500"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="flex items-center">
                <button><a href="../model/logout.php" class="font-bold text-pink-500">Đăng xuất</a></button>
                <i class="fas fa-user ml-[5px]"></i>
            </div>
        </div>
    </head>
    <div>
        <h1>Thông tin liên hệ</h1>
        <form action="index.php?url=contact_client" method="POST">
            <span>Họ và tên</span>
            <input type="text" name="name">
            <span>Địa chỉ</span>
            <input type="text" name="addr">
            <span>Số điện thoại</span>
            <input type="text" name="phone">
            <span>Ảnh chứng minh thư</span>
            <input type="file" name="image">
            <button>Submit</button>
        </form>
    </div>
</body>

</html>