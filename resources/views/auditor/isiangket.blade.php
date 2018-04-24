<div class="col-md-12">
    <table class="table" style="">
        <thead>
            <tr>
                <th>Koord. Prodi</th>
                <th class="text-center">Skor</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $isian_angket or "" }}</td>
                <td class="text-center">{{ $skor or 'Belum Tersedia' }}</td>
                <td>
                    {{-- <select name="" id="setuju" class="form-control border-input">
                        <option value="1">Setuju</option>
                        <option value="0">Ubah</option>
                    </select> --}}
                    {{ $aksi_field or '' }}
                </td>
            </tr>
        </tbody>
    </table>
</div>