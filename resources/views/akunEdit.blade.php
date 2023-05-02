
@extends('layoutsAkun.masterAkun')
@section('content')
<div id="content" class="pt-24 px-2 py-4 flex-grow h-screen">
    <div class="my-2 px-8 pt-6 pb-4 shadow w-full h-full overflow-y-scroll">
        <h1 class="text-3xl font-medium mb-4">Edit Data Akun</h1>
        <form method="post" action="{{ route('update') }}" id="editAkun">
            @csrf
            {{-- @method('put') --}}
            <table class="border w-full">
                <div class="form-group">
                    <tr class="bg-slate-200">
                        <td class="w-1/3 px-4 py-3">Nama</td>
                        <td>
                            <label for="nama"></label>
                            <input type="text" name="nama" id="nama" class="form-control w-full  bg-transparent" value="{{ auth()->user()->nama }}">
                        </td>
                    </tr>
                </div>

                <div class="form-group">
                    <tr>
                        <td class="w-1/3 px-4 py-3">Username</td>
                        <td>
                            <label for="username"></label>
                            <input type="text" name="username" id="username" class="form-control w-full  bg-transparent" value="{{ auth()->user()->username }}">
                        </td>
                    </tr>
                </div>

                <div class="form-group">
                    <tr class="bg-slate-200">
                        <td class="w-1/3 px-4 py-3">Email</td>
                        <td>
                        <label for="email"></label>
                            <input type="email" name="email" id="email" class="form-control w-full  bg-transparent" value="{{ auth()->user()->email }}">
                        </td>
                    </tr>
                </div>

                <div class="form-group">
                    <tr class="bg-slate-200">
                        <td class="w-1/3 px-4 py-3">password</td>
                        <td>
                        <label for="password"></label>
                            <input type="text" name="password" id="password" class="form-control w-full  bg-transparent" value="">
                        </td>
                    </tr>
                </div>
                @if(Str::length(Auth::guard('dataAkunAdmin')->user()) > 0)
                <div class="form-group">
                    <tr>
                        <td class="w-1/3 px-4 py-3">Nomor Identitas</td>
                        <td>
                        <label for="nomor_identitas"></label>
                            <input type="text" name="nomor_identitas" id="nomor_identitas" class="form-control w-full  bg-transparent" value="{{ auth()->user()->nomor_identitas }}">
                        </td>
                    </tr>
                </div>
                @endif
<!-- 
                @if(Str::length(Auth::guard('dataAkunKurir')->user()) > 0)
                <div class="form-group">
                    <tr>
                        <td class="w-1/3 px-4 py-3">Nomor Identitas</td>
                        <td>
                        <label for="nomor_identitas"></label>
                            <input type="text" name="nomor_identitas" id="nomor_identitas" class="form-control w-full  bg-transparent" value="{{ auth()->user()->nomor_identitas }}">
                        </td>
                    </tr>
                </div>
                @endif -->

                <!-- @if(Str::length(Auth::guard('dataAkunKurir')->user()) > 0)
                <div class="form-group">
                    <tr>
                        <td class="w-1/3 px-4 py-3">Nomor Identitas</td>
                        <td>
                        <label for="nomor_identitas"></label>
                            <input type="text" name="nomor_identitas" id="nomor_identitas" class="form-control w-full  bg-transparent" value="{{ auth()->user()->nomor_identitas }}">
                        </td>
                    </tr>
                </div>
                @endif -->

                

                <div class="form-group">
                    <tr class="bg-slate-200">
                        <td class="w-1/3 px-4 py-3">Jalan</td>
                        <td>
                        <label for="Jalan"></label>
                            <input type="text" name="jalan" id="jalan" class="form-control w-full  bg-transparent" value="{{ auth()->user()->jalan }}">
                        </td>
                    </tr>
                </div>

                

                <div class="form-group">
                    <tr>
                        <td class="w-1/3 px-4 py-3">Kota</td>
                        <td>
                        <label for="kota"></label>
                            <!-- <input type="text" name="id_kota" id="kota" class="form-control w-full  bg-transparent" value="{{ auth()->user()->datakota->nama }}"> -->
                            <select class="form-control w-50 mb-3" name="id_kota" id="id_kota">
                                <option disabled value>Pilih Kota</option>
                                @foreach($kota as $item)
                                <option value="{{ $item->id_kota }}"> {{ $item->nama }} </option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                </div>

                <div class="form-group">
                    <tr class="bg-slate-200">
                        <td class="w-1/3 px-4 py-3">Provinsi</td>
                        <td>
                        <label for="provinsi"></label>
                            <!-- <input type="text" name="id_provinsi" id="provinsi" class="form-control w-full  bg-transparent" value="{{ auth()->user()->dataprovinsi->nama }}"> -->
                            <select class="form-control w-50 mb-3" name="id_provinsi" id="id_provinsi">
                                <option disabled value>Pilih Kota</option>
                                @foreach($provinsi as $item)
                                <option value="{{ $item->id_provinsi }}"> {{ $item->nama }} </option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                </div>

                <div class="form-group">
                <tr>
                    <td class="w-1/3 px-4 py-3">No Telepon</td>
                    <td>
                        <label for="no_telpon"></label> 
                        <input type="text" name="no_telpon" id="no_telpon" class="form-control w-full  bg-transparent" value="{{ auth()->user()->no_telpon }}">
                    </td>
                </tr>
                </div>
                <div class="form-group">
                <tr class="bg-slate-200">
                    <td class="w-1/3 px-4 py-3">Tanggal Lahir</td>
                    <td>
                    <label for="tanggal_lahir"></label> 
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control w-full  bg-transparent" value="{{ auth()->user()->tanggal_lahir }}">
                    </td>
                </tr>
                

                </div>
                
                <!-- <tr class="bg-slate-200">
                    <td class="w-1/3 px-4 py-3">Role</td>
                    <td>
                        <input type="string" name="tanggalLahir" id="tanggalLahir" class="w-full  bg-transparent" value="{{ auth()->user()->level }}">
                    </td>
                </tr> -->
            </table>
            <div class="flex gap-4 sm:w-1/3">
                <button class="w-1/2 bg-admin-secondary hover:opacity-90 py-1 rounded-full text-white" id="simpanData">Simpan</button>
                <a href="{{ route('account') }}" class="w-1/2 bg-admin-secondary hover:opacity-90 py-1 rounded-full text-white text-center">Kembali</a>
                <!-- <a href="{{ route('update') }}" class="w-1/2 bg-admin-secondary hover:opacity-90 py-1 rounded-full text-white text-center">Simpan</a> -->
            </div>
        </form>




        <div class="mt-8 flex flex-col xs:items-center sm:flex-row sm:justify-between sm:items-start">
            <div class="relative w-1/2">
                <p id="error-msg" class="@unless($errors->any())hidden @endunless absolute top-0 bg-red-700 text-white px-8 py-2 rounded-lg">“Semua data harus terisi dengan benar”</p>
            </div>

        </div>
    </div>
</div>


@unless(isset($validated))
<div id="passwordModal" data-modal-backdrop="static" tabindex="-1"  class="fixed top-0 left-0 right-0 z-50 w-full p-4  overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <form class="bg-white relative px-8 py-6 w-1/3 max-w-2xl max-h-full flex flex-col items-center" action="/cekpassword" method="post">
        @csrf
        <h2 class="text-2xl font-bold mb-2">Password Validasi!</h2>
        <h3 class="text-xl mb-6">Masukan password anda :</h3>
        <input type="text" placeholder="Password" class="px-4 border border-slate-50 w-full rounded shadow-md" name="password" id="password">
        <button id="passwordModalConf" class="mt-2 bg-blue-500 text-white px-4 py-1 rounded">Submit</button>
        <p id="passwordModalErr" class="hidden mt-3 bg-red-700 text-white px-8 py-2 rounded-lg">“Password yang anda masukkan salah!”</p>
    </form>
</div>
@endunless

<div id="notificationModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="bg-white relative px-8 py-6 w-1/3 max-w-2xl max-h-full flex flex-col items-center">
        <h2 class="text-2xl font-bold mb-2">Notifikasi!</h2>
        <h3 class="text-xl">"Perubahan data telah disimpan"</h3>
    </div>
</div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
<script>
    @unless(isset($validated))
    const _passwordModal = new Modal($('#passwordModal')[0],{closable: false,});
    _passwordModal.show();
    @endunless

    // $("#passwordModalConf").click(() => {
        // if ($("#passwordModalValue").val() == "test") {
        //     _passwordModal.hide();
        // } else {
        //     $("#passwordModalErr").removeClass("hidden");
        // }
    // });

    const _notificationModal = new Modal($('#notificationModal')[0]);
    $("#editAkun").submit(function(e)  {
            e.preventDefault()
        // update data di server
        //----------------------
        // jika gagal
        //----------------------
        // $("#error-msg").removeClass("hidden");
        //----------------------
        // jika sukses
        _notificationModal.show();

        const form = this;
        setTimeout(function(){
            form.submit();
        },1000)


        
    })
</script>
@endsection
</body>

</html>