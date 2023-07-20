<div class="line"></div>

            <section id=" datauser" class="bd-callout bd-callout-info container ">
                <form action="<?= base_url('guru/nilai/input/') . $siswa->idsiswa ?>" method="post">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="nama" class="form-control" value="<?= $siswa->nama ?>" name="nama" id="nama" placeholder="Nama Lengkap" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <input type="hidden" name="kodekelas" value="<?= $siswa->kodekelas ?>">
                                <input type="kelas" class="form-control" name="kelas" id="kelas" placeholder="kelas" value="<?= $siswa->tingkat ?> <?= $siswa->jurusan ?> <?= $siswa->ruangkelas ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="mapel">Mapel</label>
                                <input type="mapel" class="form-control" value="<?= $guru->namamapel ?>" id="namamapel" name="namamapel" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="semester">Semester</label>
                                <select class="form-control" name="semester" id="semester">
                                    <option disabled selected>- Pilih semester -</option>
                                    <option value="ganjil">Ganjil</option>
                                    <option value="genap">Genap</option>
                                </select>
                                <?= form_error('semester', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="tugas">Tugas</label>
                                <input type="hidden" name="tahunajaran" value="<?= $siswa->tahunajaran ?>">
                                <input type="number" class="form-control" name="tugas" id="tugas" placeholder="tugas">
                                <?= form_error('tugas', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="uts">UTS</label>
                                <input type="number" name="uts" class="form-control" id="uts"
                                    placeholder="uts">
                                <?= form_error('uts', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="uas">UAS</label>
                                <input type="number" name="uas" class="form-control" id="uas"
                                    placeholder="uas">
                                <?= form_error('uas', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary ">Submit</button>

                </form>
            </section>