<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 text-center">
            <h2 class="section-heading">Lapor !!!</h2>
            <hr class="primary">
            <p>Laporkan Tentang Kami <br>Kehilangan, Kritik, Maupun Saran</p>
        </div>
        <div class="col-lg-8 col-lg-offset-2 text-center">
          <br>
        </div>
        <div class="col-lg-8 col-lg-offset-2">
          @if (count($errors)>0)
            <div class="alert alert-danger" role="alert"><b>Maaf</b> inputan anda kurang benar</div>
          @endif
          @if (session('pesan'))
            <div class="alert alert-success" role="alert"><b>Terima Kasih</b> atas Laporannya</div>
          @endif
          <form method="post" action="{{ route('lapor') }}">
            {{ csrf_field() }}
              <div class="row control-group">
                  <div class="form-group col-xs-12">
                      <label>Nama Pelapor</label>
                      <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ old('nama') }}">
                      @if ($errors->has('nama'))
                      <p><font size="2">Note : Maksimal 30 karakter</font></p>
                      @endif
                  </div>
              </div>
              <div class="row control-group">
                  <div class="form-group col-xs-12">
                      <label>No. HP</label>
                      <input type="text" name="noHP" class="form-control" placeholder="No. HP" value="{{ old('noHP') }}">
                      @if ($errors->has('noHP'))
                      <p><font size="2">Note : Masukkan nomor antara 11 - 13 digit</font></p>
                      @endif
                      <p><font size="2">( NB: Pastikan No. HP anda <b>aktif</b> dan sudah terintergrasi dengan Line, WA, atau Telegram.
                        Sehingga dapat dihubungi dengan segera )</font></p>
                  </div>
              </div>
              <br><br>
              <div class="row control-group">
                  <div class="form-group col-xs-12 floating-label-form-group controls">
                      <label>Judul Lapor</label>
                      <input type="text" name="judul" class="form-control" placeholder="Judul Lapor" value="{{ old('judul') }}">
                      @if ($errors->has('judul'))
                      <p><font size="2">Note : Judul tidak boleh kosong dan jumlah karakter antara 15 - 50 karakter</font></p>
                      @endif
                  </div>
              </div>
              <div class="row control-group">
                  <div class="form-group col-xs-12">
                      <label>Pesan</label>
                      <textarea rows="6" name="pesan" class="form-control" placeholder="Pesan">{{ old('pesan') }}</textarea>
                      @if ($errors->has('pesan'))
                      <p><font size="2">Note : Pesan tidak boleh kosong dan jumlah karakter antara 30 - 255 karakter</font></p>
                      @endif
                  </div>
              </div>
              <br>
              <div class="row">
                  <div class="form-group col-xs-12 text-center">
                      <button type="submit" class="btn btn-success btn-lg">Send</button>
                  </div>
              </div>
          </form>
        </div>
    </div>
</div>
