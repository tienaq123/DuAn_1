<?php session_start();
?>
<header class="relative z-10 bg-white border-b border-gray border-solid py-5 px-8 pr-8">
    <div class="flex justify-between">
        <div class="flex items-center space-x-6 lg:space-x-0">
            <button type="button" class="block lg:hidden text-2xl text-black" x-on:click="sideMenu = ! sideMenu">
                <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1H19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    <path d="M1 6H19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    <path d="M1 11H19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
            </button>

        </div>

        <div class="flex items-center justify-end space-x-6">
            <div class="md:hidden">
                <button class="relative w-[40px] h-[40px] leading-[40px] rounded-md text-textBody border border-gray hover:bg-themeLight hover:text-theme hover:border-themeLight" x-on:click="searchOverlay = ! searchOverlay">
                    <svg class="-translate-y-[2px]" width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M18.9999 19L14.6499 14.65" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>

            <div class="relative w-[70%] flex justify-end items-center" x-data="{ userOption: false }">
                <button class="relative" type="button" x-on:click="userOption = ! userOption">
                    <img class="w-[40px] h-[40px] rounded-md" src="assets/img/users/user-10.jpg" alt="" />
                    <span class="w-[12px] h-[12px] inline-block bg-green-500 rounded-full absolute -top-[4px] -right-[4px] border-[2px] border-white"></span>
                </button>
                <!-- AVATA -->
                <?php

                // Kiểm tra xem người dùng đã đăng nhập chưa
                if (isset($_SESSION['user_id']) && $_SESSION['role_id'] == 1) {
                    // Nếu đã đăng nhập, hiển thị thông tin người dùng và button đăng xuất
                    $user_id = $_SESSION['user_id'];
                    $fullname = $_SESSION['username'];

                    // Hiển thị thông tin người dùng
                    // echo "$fullname"; // Thay "Welcome" bằng chào mừng theo ngôn ngữ của bạn
                    // echo '<a id="logout" href="logout.php">Logout</a>'; // Thay đường dẫn "logout.php" bằng file xử lý đăng xuất
                ?>
                    <!-- AVATA -->
                    <div x-show="userOption" x-on:click.outside="userOption = false" x-transition:enter="transition ease-out duration-200 origin-top" x-transition:enter-start="opacity-0 scale-y-90" x-transition:enter-end="opacity-100 scale-y-100" x-transition:leave="transition ease-in duration-200 origin-top" x-transition:leave-start="opacity-100 scale-y-200" x-transition:leave-end="opacity-0 scale-y-90" class="absolute w-[280px] top-full right-0 shadow-lg rounded-md bg-white py-5 px-5">
                        <div class="flex items-center space-x-3 border-b border-gray pb-3 mb-2">
                            <div class="">
                                <img class="w-[50px] h-[50px] rounded-md" src="assets/img/users/user-10.jpg" alt="" />
                            </div>
                            <div class="">
                                <h5 class="text-base mb-1 leading-none"><?php echo "$fullname"; ?></h5>
                            </div>
                        </div>
                        <ul>
                            <li>
                                <a href="index.php" class="px-5 py-2 w-full block hover:bg-gray rounded-md hover:text-theme text-base">Dashboard</a>
                            </li>
                            <li>
                                <a href="profile.php" class="px-5 py-2 w-full block hover:bg-gray rounded-md hover:text-theme text-base">
                                    Account Settings
                                </a>
                            </li>
                            <li>
                                <a href="logout.php" class="px-5 py-2 w-full block hover:bg-gray rounded-md hover:text-theme text-base">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                <?php
                } else {
                    // Nếu chưa đăng nhập, hiển thị form đăng nhập
                    // Nếu bạn đã có form đăng nhập ở trang chủ, chỉ cần chuyển phần đó vào đây
                    // Nếu form đăng nhập nằm trong file login.php, bạn có thể include file login.php vào đây:
                    header("Location: /Duan1/login.php");
                }
                ?>
            </div>
        </div>
    </div>

    <!-- search -->
    <div class="fixed top-0 left-0 w-full bg-white p-10 z-50 transition-transform duration-300 md:hidden" :class="searchOverlay ? 'translate-y-[0px]' : ' -translate-y-[230px] lg:translate-y-[0]'">
        <form action="#">
            <div class="relative mb-3">
                <input class="input h-12 w-full pr-[45px]" type="text" placeholder="Search Here..." />
                <button class="absolute top-1/2 right-6 translate-y-[-50%] hover:text-theme">
                    <svg class="-translate-y-[2px]" width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M18.9999 19L14.6499 14.65" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
        </form>
        <div class="">
            <span class="text-tiny mr-2">Keywords :</span>
            <a href="#" class="inline-block px-3 py-1 border border-gray6 text-tiny leading-none rounded-[4px] hover:text-white hover:bg-theme hover:border-theme">Customer</a>
            <a href="#" class="inline-block px-3 py-1 border border-gray6 text-tiny leading-none rounded-[4px] hover:text-white hover:bg-theme hover:border-theme">Product</a>
            <a href="#" class="inline-block px-3 py-1 border border-gray6 text-tiny leading-none rounded-[4px] hover:text-white hover:bg-theme hover:border-theme">Orders</a>
        </div>
    </div>
    <div class="fixed top-0 left-0 w-full h-full z-40 bg-black/70 transition-all duration-300" :class="searchOverlay ? 'visible opacity-1' : '  invisible opacity-0 '" x-on:click="searchOverlay = ! searchOverlay"></div>
</header>