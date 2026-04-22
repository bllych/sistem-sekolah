<div class="mt-2 space-y-4">
    <!-- Cari Header Start -->
    <div class="border shadow p-4 rounded-lg text-amber-50">
        <h1 class="font-bold text-black text-4xl">Edit Siswa</h1>
        <p class="text-black">Melakukan perubahan data siswa yang terdaftar</p>
    </div>
    <!-- Cari Header End -->

    <!-- Card Content Start -->
    <div class="bg-gray-10 pz-4 rounded-lg shadow mt-2 ">
        <form action="/students/<?= $student['id'] ?> " method="POST" class="p-4 grid grid-cols-2 gap-4">
            <input type="hidden" name="_method" value="PUT">
            <div class="space-y-2">
                <label class="font-bold block" for="name">Nama</label>
                <input value="<?= $student['name'] ?>" type="text" id="name" name="name" placeholder="Masukkan nama" readonly
                    class="border rounded-lg px-4 py-2 w-full">
            </div>
            <div class="space-y-2">
                <label class="font-bold block" for="kelas">Kelas</label>
                <input value="<?= $student['class'] ?>" type="text" id="kelas" kelas="kelas" placeholder="Masukkan Kelas" readonly
                    class="border rounded-lg px-4 py-2 w-full">
            </div>
            <div class="space-y-2">
                <label class="font-bold block" for="nis">NIS</label>
                <input value="<?= $student['nis'] ?>" type="text" id="nis" nis="nis" placeholder="Masukkan NIS" readonly
                    class="border rounded-lg px-4 py-2 w-full">
            </div>
            <div class="space-y-2">
                <label class="font-bold block" for="phone_number">No. Telepon</label>
                <input value="<?= $student['phone_number'] ?>" type="text" id="phone_number" phone_number="phone_number" readonly
                    placeholder="Masukkan Nomor Telepon" class="border rounded-lg px-4 py-2 w-full">
            </div>

            <div class="flex justify-end gap-4 col-span-2">
                <a href="/student" class="border px-4 py-2 rounded-lg shadow text-black">Kembali</a>
                <button type="submit" class="border px-3 py-2 rounded-lg text-white bg-blue-400">Simpan</button>
            </div>
        </div>
    </div>
    <!-- Card Content End -->
</div>