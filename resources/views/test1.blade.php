<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Format Registrasi Modal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Button to open the modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registrasiModal">
    Open Format Registrasi Modal
</button>

<!-- Modal Structure -->
<div class="modal fade" id="registrasiModal" tabindex="-1" aria-labelledby="registrasiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registrasiModalLabel">
                    <i class="bi bi-pencil-square"></i> Format Registrasi
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <!-- Basic Information Fields -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="pendidikan" class="form-label">Pendidikan</label>
                        <input type="text" class="form-control" id="pendidikan" required>
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" required>
                    </div>
                    <div class="mb-3">
                        <label for="tinggiBadan" class="form-label">Tinggi Badan</label>
                        <input type="text" class="form-control" id="tinggiBadan" required>
                    </div>
                    <div class="mb-3">
                        <label for="beratBadan" class="form-label">Berat Badan</label>
                        <input type="text" class="form-control" id="beratBadan" required>
                    </div>

                    <!-- Knowledge Levels -->
                    <div class="mb-3">
                        <label class="form-label">Penguasaan Bahasa Sunda</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bahasaSunda" id="bahasaKurangPaham" value="Kurang Paham" required>
                            <label class="form-check-label" for="bahasaKurangPaham">Kurang Paham</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bahasaSunda" id="bahasaPaham" value="Paham">
                            <label class="form-check-label" for="bahasaPaham">Paham</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="bahasaSunda" id="bahasaFasih" value="Fasih">
                            <label class="form-check-label" for="bahasaFasih">Fasih</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kebudayaan Sunda</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kebudayaanSunda" id="kebudayaanKurangPaham" value="Kurang Paham" required>
                            <label class="form-check-label" for="kebudayaanKurangPaham">Kurang Paham</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kebudayaanSunda" id="kebudayaanPaham" value="Paham">
                            <label class="form-check-label" for="kebudayaanPaham">Paham</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="kebudayaanSunda" id="kebudayaanSangatPaham" value="Sangat Paham">
                            <label class="form-check-label" for="kebudayaanSangatPaham">Sangat Paham</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Musik Sunda</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="musikSunda" id="musikKurangPaham" value="Kurang Paham" required>
                            <label class="form-check-label" for="musikKurangPaham">Kurang Paham</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="musikSunda" id="musikPaham" value="Paham">
                            <label class="form-check-label" for="musikPaham">Paham</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="musikSunda" id="musikSangatPaham" value="Sangat Paham">
                            <label class="form-check-label" for="musikSangatPaham">Sangat Paham</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Pengetahuan Sejarah Sunda</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sejarahSunda" id="sejarahKurangPaham" value="Kurang Paham" required>
                            <label class="form-check-label" for="sejarahKurangPaham">Kurang Paham</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sejarahSunda" id="sejarahPaham" value="Paham">
                            <label class="form-check-label" for="sejarahPaham">Paham</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sejarahSunda" id="sejarahSangatPaham" value="Sangat Paham">
                            <label class="form-check-label" for="sejarahSangatPaham">Sangat Paham</label>
                        </div>
                    </div>

                    <!-- Media Instructions -->
                    <div class="mb-3">
                        <p><strong>Media</strong></p>
                        <ol>
                            <li>Foto terbaik Anda mengenakan busana kebaya</li>
                            <li>Video perkenalan diri dengan minimal durasi 15 detik</li>
                        </ol>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
