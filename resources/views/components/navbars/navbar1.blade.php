<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <nav class="bg-white w-full shadow-box-shadow-36">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-[100px] items-center justify-between">
                {{-- title --}}
                <div class="_title">
                    <p class="text-[16px] font-medium ">Selamat Datang,</p>
                    <p class="text-[24px] font-bold">Developer!</p>
                </div>

                <!-- Profile dropdown -->
                <div class="relative ml-3 flex items-center gap-[50px]">
                    <div class="_icon">
                        <div
                            class="_notification relative w-[45px] h-[45px] gradient-1 cursor-pointer rounded-full flex items-center justify-center">
                            <i class="mt-2 text-white fi fi-rr-bell"></i>
                            <div class="absolute top-0 right-0 mr-[-10px] font-bold w-[25px] h-[25px] text-[12px] bg-red-500 rounded-full text-white flex justify-center items-center">31</div>
                        </div>
                    </div>
                    <div class="_profile">
                        <button class="flex items-center gap-[20px]">
                            <div class="_profile-name text-right">
                                <p class="text-[16px] font-bold">Agung Kurniawan</p>
                                <p class="text-[14px] text-[#8B97A8]">Developer</p>
                            </div>
                            <div class="_profile-image-icon flex items-center gap-[10px]">
                                <img class="h-[50px] w-[50px] rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                                <i class="mt-1 text-[24px] fi fi-rr-angle-small-down"></i>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</body>

</html>
