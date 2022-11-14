<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/e123c1a84c.js" crossorigin="anonymous"></script>
</head>

<body>

    <head>
        <div class="header-nav flex justify-between items-center max-w-7xl mx-auto">
            <div class="header-logo">
                <img src="./image/logo.png" alt="" class="w-[100px]" />
            </div>
            <div class="header-menu">
                <ul class="menu flex ">
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
            <div class="header-btn-login flex">
                <button><a href="" class="font-bold text-pink-500">Đăng nhập</a></button>
                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="26" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z" />
                </svg>
            </div>
        </div>
        <div class="-header-container max-w-7xl mx-auto">
            <div class="header-bg">
                <img class="mySlides2 animate-fading w-[100%] h-[600px] rounded-2xl" src="image/1.jpg" />
                <img class="mySlides2 animate-fading w-[100%] h-[600px] rounded-2xl" src="image/2.jpg" />
                <img class="mySlides2 animate-fading w-[100%] h-[600px] rounded-2xl" src="image/3.jpg" />
                <img class="mySlides2 animate-fading w-[100%] h-[600px] rounded-2xl" src="image/4.jpg" />
            </div>
        </div>
    </head>
    <div class="max-w-5xl mx-auto">
    <marquee behavior="#" direction="left">
                <p class="text-2xl font-bold text-red-500 mt-[30px] mb-[30px">
                Du lịch Hà Nội - Sapa - Bản Cát Cát - Hàm Rồng dịp Lễ 30/4 từ Hà Nội.
                </p>
            </marquee>
        
        <div class="flex items-center">
            <div><img src="./image/1.jpg" alt="" class="w-[700px] mr-[30px] rounded-2xl"></div>
            <div>
                <img src="./image/2.jpg" alt="" class="w-[300px] mr-[30px] rounded-2xl mb-[40px]">
                <img src="./image/3.jpg" alt="" class="w-[300px] mr-[30px] rounded-2xl">
            </div>
        </div>
        <div>
            <div class="border-2 p-5 bg-neutral-700 rounded-2xl w-[700px]">
                <form action="">
                    <h2 class="text-[30px] font-bold text-red-500 mb-[20px]">Giá tour: 1$/người</h2>
                    <h2 class="inline-block text-white font-bold mb-[20px]">Ngày bắt đầu </h2>
                    <input type="date" name="" id="" disabled class="p-2 rounded-2xl text-center bg-white">
                    <h2 class="inline-block text-white font-bold mb-[20px]">Ngày kết thúc </h2>
                    <input type="date" name="" id="" disabled class="p-2 rounded-2xl text-center bg-white">
                    <br>
                    <h2 class="inline-block text-white font-bold mb-[20px]">Người lớn</h2>
                    <select name="" id="" class="rounded-2xl w-[160px] p-2">
                        <option value="1">1 người</option>
                        <option value="2">2 người</option>
                        <option value="3">3 người</option>
                        <option value="4">4 người</option>
                    </select>
                    <h2 class="inline-block text-white font-bold mb-[20px]">Trẻ em</h2>
                    <select name="" id="" class="rounded-2xl w-[160px] p-2">
                        <option value="1">1 người</option>
                        <option value="2">2 người</option>
                        <option value="3">3 người</option>
                        <option value="4">4 người</option>
                    </select>
                    <br>
                    <h2 class="inline-block text-white font-bold mb-[20px]">Tổng cộng</h2>
                    <input type="number" name="" id="" disabled class="p-2 rounded-2xl text-center bg-white">
                    <br>
                    <button class="border-2 rounded-2xl p-3 w-[200px] mx-auto block text-white font-bold hover:bg-[aqua]">Đặt tour</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<script src="./js/home.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>