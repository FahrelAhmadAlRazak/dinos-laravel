@extends('layoutsPengajuan.masterBuatPengajuan')
@section('content')
<div id="content" class="pt-24 px-2 py-4 flex-grow h-screen">
    <div class="my-2 px-8 pt-6 pb-4 shadow w-full h-full overflow-y-scroll">
        <h1 class="text-3xl font-medium mb-4">Buat Pengajuan</h1>
        <form id="buat" action="{{ route('create_pengajuan') }}" method="post" enctype="multipart/form-data">
            @csrf
            <table class="border w-full">
                <div class="form-group">
                    <tr class="bg-slate-200">
                        <td class="w-1/3 px-4 py-3 mb-3">Nama Usaha</td>
                        <td>
                            <input type="text" name="nama_perusahaan" id="nama_perusahaan" class="w-full bg-transparent form-control" required>
                        </td>
                    </tr>
                </div>
                <div>

                </div>
                <tr>
                    <td class="w-1/3 px-4 py-3 mb-3">Alamat Tempat Usaha</td>
                    <td>
                        <label for="exampleFormControlSelect2">jalan</label>
                        <input type="text" name="jalan" id="jalan" class="w-50 mb-3  bg-transparent form-control" required>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Kota</label>
                            <select class="form-control w-50 mb-3" name="id_kota" id="id_kota">
                                <option disabled value>Pilih Kota</option>
                                @foreach($kota as $item)
                                <option value="{{ $item->id_kota }}"> {{ $item->nama }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">Provinsi</label>
                            <select class="form-control w-50" name="id_provinsi" id="id_provinsi" s>
                                <option disabled value>Pilih Provinsi</option>
                                @foreach($provinsi as $item)
                                <option value="{{ $item->id_provinsi }}"> {{ $item->nama }} </option>
                                @endforeach
                            </select>

                            </select>
                        </div>
                    </td>
                </tr>
                <div class="form-group">
                    <tr class="bg-slate-200">
                        <td class="w-1/3 px-4 py-3">Nomor Izin Usaha</td>
                        <td class="form-group">
                            <input type="text" name="nomer_izin_usaha" id="nomer_izin_usaha" class="w-full  bg-transparent form-control" required>
                        </td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <td class="w-1/3 px-4 py-3">Nomor Telepon Perusahaan</td>
                        <td class="form-group">
                            <input type="text" name="notelp_perusahaan" id="notelp_perusahaan" class="w-full  bg-transparent form-control" required>
                        </td>
                    </tr>
                </div class="form-group">
                <div>
                    <tr class="bg-slate-200">
                        <td class="w-1/3 px-4 py-3">Email Perusahaan</td>
                        <td class="form-group">
                            <input type="email" name="email_perusahaan" id="email_perusahaan" class="w-full  bg-transparent form-control" required>
                        </td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <td class="w-1/3 px-4 py-3 mb-3">Nama Produk yang Diajukan</td>
                        <td>
                            <input type="text" name="nama_produk" id="nama_produk" class="w-full bg-transparent form-control" required>
                        </td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr class="bg-slate-200">
                        <td class="w-1/3 px-4 py-3 mb-3">Jumlah Produk yang Diajukan</td>
                        <td>
                            <input type="number" name="jumlah_produk" id="jumlah_produk" class="w-full bg-transparent form-control" required>
                        </td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <td class="w-1/3 px-4 py-3">Harga Produk yang Diajuakan</td>
                        <td class="form-group">
                            <input type="text" name="harga_produk" id="harga_produk" class="w-full  bg-transparent form-control" required>
                        </td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr class="bg-slate-200">
                        <td class="w-1/3 px-4 py-3">Deskripsi Produk yang Diajuakan</td>
                        <td class="form-group">
                            <textarea type="text" name="deskripsi_produk" id="deskripsi_produk" class="w-full  bg-transparent form-control" required></textarea>
                        </td>
                    </tr>
                </div class="form-group">
                <div>
                    <tr>
                        <td class="w-1/3 px-4 py-3">Gambar Produk</td>
                        <td class="form-group">
                            <input type="file" name="gambar_produk" id="gambar_produk" class="w-full  bg-transparent form-control" multiple>
                        </td>
                    </tr>
                </div>



            </table>
            <div class="termsx">
                <p>
                    SYARAT DAN KETENTUAN
                    <br>
                    1. Kontrak berlaku selama 1 bulan dan selama kontrak kerja sama berjalan mitra hanya dapat mengirimkan produk yang sudah diajukan sebelumnya ke pihak distributor 
                    <br>
                    2. Mitra dikenakan biaya admin sebesar 5% dari harga produk/pcs 
                    <br>
                    3. Proses pengiriman akan menggunakan jasa pengiriman Dinos  dan biaya pengiriman ditanggung oleh mitra 
                    <br>
                    4. Mitra tidak dikenakan biaya lain selain yang sudah disebutkan 
                    <br>
                    5. Barang yang diberikan ke pihak distributor akan disalurkan pada toko-toko yang sudah menjalin kerjasama dengan pihak distributor 
                    <br>
                    6. Barang yang diberikan ke pihak distributor akan langsung disalurkan dan hanya akan dikembalikan kepada mitra jika barang tidak terjual dan sudah mendekati h-7 tanggal expired produk
                    <br>
                    7. Proses pengembalian produk yang tidak terjual tidak dikenakan biaya tambahan
                    <br>
                    8. Mitra wajib mengirimkan produk ke pihak distributor dengan minimal jumlah 50 pcs dari setiap produk yang telah

                </p>

            </div>
            



            <div class="form-check w-1/2 flex justify-center items-center">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                <label class="form-check-label" for="exampleCheck1">Setuju</label>
            </div>
            <button class="selanjutnya w-1/2 bg-admin-secondary hover:opacity-90 py-1 rounded-full text-white flex justify-center items-center">Kirim</button>
        </form>
        <div class="mt-8 flex flex-col xs:items-center sm:flex-row sm:justify-between sm:items-start">
            <div class="relative w-1/2">
                <p id="error-msg" class="@unless($errors->any())hidden @endunless absolute top-0 bg-red-700 text-white px-8 py-2 rounded-lg">“Semua data harus terisi dengan benar”</p>
            </div>

        </div>
        <!-- <a href="{{ route('buat_pengajuan-1') }}" class=" selanjutnya w-1/2 bg-admin-secondary hover:opacity-90 py-1 rounded-full text-white flex justify-center items-center " id="logoutBtn">Selanjutnya</a> -->
        <!-- <a href="" class="w-1/2 bg-admin-secondary hover:opacity-90 py-1 rounded-full text-white text-center">Edit</a> -->
    </div>

    <div id="notificationModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="bg-white relative px-8 py-6 w-1/3 max-w-2xl max-h-full flex flex-col items-center">
            <h2 class="text-2xl font-bold mb-2">Notifikasi!</h2>
            <h3 class="text-xl">"Data Pengajuan Berhasil Dikirim"</h3>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script>
     
        const _notificationModal = new Modal($('#notificationModal')[0]);
        $("#buat").submit(function(e) {
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
            setTimeout(function() {
                form.submit();
            }, 1000)



        })
    </script>

</div>
</div>



@endsection