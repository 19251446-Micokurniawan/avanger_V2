<!-- Form Input -->
<div class="card">

    <h2>Form Penilaian Mahasiswa</h2>

    <form id="nilaiForm">

        <table>

            <tr>
                <td>Nama Mahasiswa</td>

                <td>
                    <input type="text"
                    id="nama"
                    required>
                </td>
            </tr>

            <tr>
                <td>NIM</td>

                <td>
                    <input type="text"
                    id="nim"
                    required>
                </td>
            </tr>

            <tr>
                <td>Mata Kuliah</td>

                <td>
                    <input type="text"
                    id="matkul"
                    required>
                </td>
            </tr>

            <tr>
                <td>Kehadiran (20%)</td>

                <td>
                    <input type="number"
                    id="kehadiran"
                    min="0"
                    max="100"
                    required>
                </td>
            </tr>

            <tr>
                <td>Tugas (25%)</td>

                <td>
                    <input type="number"
                    id="tugas"
                    min="0"
                    max="100"
                    required>
                </td>
            </tr>

            <tr>
                <td>Project Akhir (55%)</td>

                <td>
                    <input type="number"
                    id="project"
                    min="0"
                    max="100"
                    required>
                </td>
            </tr>

            <tr>
                <td>Jenis Asesmen</td>

                <td>
                    <input type="checkbox" checked>
                    Tes Tertulis
                    <br>

                    <input type="checkbox">
                    Ujian Lisan
                    <br>

                    <input type="checkbox" checked>
                    Tes Kinerja Praktik
                    <br>

                    <input type="checkbox" checked>
                    Tugas / Portofolio
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center">

                    <input type="submit"
                    value="Simpan Data">

                </td>
            </tr>

        </table>

    </form>

</div>

<script>

/* Menentukan Nilai Huruf */
function getGrade(nilai) {

    if (nilai >= 80) {

        return "A";

    } else if (nilai >= 70) {

        return "B";

    } else if (nilai >= 60) {

        return "C";

    } else if (nilai >= 31) {

        return "D";

    } else {

        return "E";

    }
}

/* Submit Form */
document.getElementById("nilaiForm")

.addEventListener("submit", function(e) {

    e.preventDefault();

    const nama =
    document.getElementById("nama").value;

    const nim =
    document.getElementById("nim").value;

    const matkul =
    document.getElementById("matkul").value;

    const kehadiran =
    parseFloat(
    document.getElementById("kehadiran").value);

    const tugas =
    parseFloat(
    document.getElementById("tugas").value);

    const project =
    parseFloat(
    document.getElementById("project").value);

    /* Perhitungan Nilai */
    const nilaiAkhir =

        (kehadiran * 0.20) +
        (tugas * 0.25) +
        (project * 0.55);

    const grade =
    getGrade(nilaiAkhir);

    const dataBaru = {

        nama: nama,
        nim: nim,
        matkul: matkul,

        nilai:
        nilaiAkhir.toFixed(2),

        grade: grade
    };

    let data =

    JSON.parse(
    localStorage.getItem("dataMahasiswa"))

    || [];

    data.push(dataBaru);

    localStorage.setItem(

        "dataMahasiswa",

        JSON.stringify(data)

    );

    tampilHistory();

    alert("Data berhasil disimpan!");

    document.getElementById("nilaiForm").reset();

});

</script>