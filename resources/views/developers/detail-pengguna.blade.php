@extends('layouts.developers.ly-dashboard')
@section('content')
    <div class="_main-container p-[30px] flex flex-col gap-8">
        <div class="_component-button flex gap-4 items-center">
            <div
                class="_button-delete cursor-pointer shadow-box-shadow-12 w-fit flex items-center bg-[#FAA0A9] rounded-full">
                <div class="_icon bg-[#FF8A93] rounded-full flex justify-center items-center w-[50px] h-[50px]"><i
                        class="fi fi-rr-delete-user mt-1 text-white"></i></div>
                <p class="text-[14px] pl-2 pr-4 font-normal text-white">Hapus akun ini</p>
            </div>
            <div class="_button-chat cursor-pointer shadow-box-shadow-12 w-fit flex items-center bg-[#7D7AD3] rounded-full">
                <div class="_icon bg-[#5C5CCE] rounded-full flex justify-center items-center w-[50px] h-[50px]"><i
                        class="fi fi-rr-comments mt-1 text-white"></i></div>
                <p class="text-[14px] pl-2 pr-4 font-normal text-white">Kirim pesan pribadi</p>
            </div>
        </div>
        <div class="_component-card-profile-and-card-information w-full grid gap-4 grid-cols-[1fr_2fr]">
            <div class="_card-profile shadow-box-shadow-11 bg-white w-full rounded-[20px] relative overflow-clip">
                <div class="_background-level top-0">
                    <div class="_level absolute p-2 bg-white/40 rounded-full font-bold top-4 left-4 w-fit text-[12px]">
                        Customer</div>
                    <img class="w-full h-[200px] object-cover" src="{{ asset('images/7139226.jpg') }}" alt="">
                </div>
                <div class="_photo-btnedit pt-2 px-4 w-full flex items-start justify-between">
                    <div class="_photo w-[100px] mt-[-60px] h-[100px] border-4 border-white rounded-full overflow-clip"><img
                            class="w-full object-cover" src="{{ asset('assets/image/allysa.jpg') }}" alt=""></div>
                    <div class="_btn-edit"><button class="px-4 py-2 gradient-1 text-[12px] font-bold cursor-pointer text-white rounded-full">Edit profile</button></div>
                </div>
                <div class="_name-sampai-tanggal-bergabung px-4 py-2">
                    <div class="_name font-bold text-[#19191b]">{{ $name }}</div>
                    <div class="_id text-[12px] text-gray-400 font-medium mt-[-5px]">@user0495867123145758</div>
                    <div class="_deskripsi text-[12px] w-full font-medium mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, culpa?</div>
                    <div class="_join-birth mt-2">
                        <div class="_join flex items-center gap-1">
                            <div class="text-[12px] mt-[2px] font-medium text-[#19191b]"><i class="fi fi-rr-calendar"></i></div>
                            <div class="text-[12px] font-medium text-[#19191b]">Bergabung 20 November 2024</div>
                        </div>
                        <div class="_join flex items-center gap-1">
                            <div class="text-[12px] mt-[2px] font-medium text-[#19191b]"><i class="fi fi-rr-party-horn"></i></div>
                            <div class="text-[12px] font-medium text-[#19191b]">Lahir 4 April 2004</div>
                        </div>
                    </div>
                    <div class="_phone-gender gap-1 mt-3 w-full grid grid-cols-2">
                        <div class="_phone p-2 bg-[#BAF3D2] rounded-[20px]">
                            <div class="_icon text-[20px]"><i class="fi fi-rr-mobile-notch"></i></div>
                            <div class="_number">
                                <p class="text-[14px] font-bold">Nomor Telepon</p>
                                <p class="text-[12px] font-medium">+62 812-3456-7890</p>
                            </div>
                        </div>
                        <div class="_gender bg-[#FEE4CB] rounded-[20px] p-2">
                            <div class="_icon text-[20px]"><i class="fi fi-rr-venus-mars"></i></div>
                            <div class="_gend">
                                <p class="text-[14px] font-bold">Jenis Kelamin</p>
                                <p class="text-[12px] font-medium">Laki-laki</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="_card-information w-full bg-white rounded-[20px]"></div>
        </div>
    </div>
    @include('sweetalert::alert')
@endsection
