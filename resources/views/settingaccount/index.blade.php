{{-- @extends('layouts.beranda') --}}
@extends('layouts.header')
@section('titlePage', 'Akun saya')

{{-- @section('main-content-user') --}}
{{-- @section('main-content') --}}
<br><br><br><br>
    <div class="setheader block">
        <div class="set-nav">
            <div class="tittle-set text-lg font-bold">
                <p>Pengaturan Akun</p>
            </div>
            <div class="ctr-listSetting mt-5">
                <div class="cListSetting flex items-center bg-white font-semibold">
                    <a class="settingAccountTo flex items-center justify-center w-64 py-1 transition-all border border-[rgb(233,233,233)] rounded-l-full hover:bg-[#FF3377] hover:text-white bg-[#FF3377] text-white" data-urlSetting="">
                        <div class="cHrefProfile">
                            <div class="tx">
                                <p>Profile</p>
                            </div>
                        </div>
                    </a>
                    <a class="settingAccountTo flex items-center justify-center w-64 py-1 transition-all border border-[rgb(233,233,233)] hover:bg-[#FF3377] hover:text-white bg-white text-black" data-urlSetting="">
                        <div class="cHrefProfile">
                            <div class="tx">
                                <p>Alamat</p>
                            </div>
                        </div>
                    </a>
                    <a class="settingAccountTo flex items-center justify-center w-64 py-1 transition-all border border-[rgb(233,233,233)] rounded-r-full hover:bg-[#FF3377] hover:text-white bg-white text-black" data-urlSetting="">
                        <div class="cHrefProfile">
                            <div class="tx">
                                <p>Ubah Password</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        {{-- <div class="ctr-mainSetting flex mt-8">
            <div class="cMainSetting w-full">
                @include('settingaccount.profile')
            </div>
        </div> --}}
        <div class="cProfileSetting flex w-full">
            <div class="imgProfil block w-60 p-5 shrink-0">
                <div class="imgUser">
                    <div class="cImg w-56 p-1.5 aspect-square bg-gray-200 rounded-lg">
                        <img src="{{asset('assets/components/icon/layer.png')}}" alt="" class="object-cover object-center">
                    </div>
                </div>
                <div class="chooseImg flex mt-3">
                    <button type="button" class="flex justify-center items-center bg-white rounded-lg border border-[rgb(145,145,145)] font-bold h-12 w-full transition-colors hover:bg-[#FF3377] hover:text-white">Pilih Profil</button>
                </div>
                <div class="warningChsImg text-sm text-[rgb(78,78,78)] italic">
                    <p>Maksimal file diunggah 10 MB (Megabytes)</p>
                    <P>Type File : JPG, PNG, JPEG</P>
                </div>
            </div>
        </div>
    </div>
{{-- @endsection --}}
