<section class="container-detail">
  <main class="detail-card-address">
    <img class="img" src="<?= BASEURL; ?>/image/profile/lutfi.jpg" alt="">
    <div class="text-card-address">
      <p><span>name:</span>lutfi aulia sidik</p>
      <p><span>age:</span>17</p>
      <p><span>date of birth:</span>22 juny 2022</p>
      <p><span>status:</span>mahasiswa</p>
    </div>
    <span class="lamp-dot"></span>
  </main>
  <main class="complete-address">
    <div class="address">
      <table border="0" cellspacing="1">
        <tr>
          <th>country</th>
          <td>indonesia</td>
        </tr>
        <tr>
          <th>province</th>
          <td>jawabarat</td>
        </tr>
        <tr>
          <th>district/city</th>
          <td>tasikmalaya</td>
        </tr>
        <tr>
          <th>village</th>
          <td>-</td>
        </tr>
        <tr>
          <th>latitude</th>
          <td>-</td>
        </tr>
        <tr>
          <th>longitude</th>
          <td>-</td>
        </tr>
      </table>
    </div>
  </main>
  <main class="complete-sosmed">
    <div class="sosmed">
      <table border="0" cellspacing="1">
        <tr>
          <th>facebook</i></th>
          <td>lutfi aulia sidik</td>
        </tr>
        <tr>
          <th>whatsapp</th>
          <td>085803377531</td>
        </tr>
        <tr>
          <th>instagram</th>
          <td>lutfi_aulia_sidik</td>
        </tr>
        <tr>
          <th>tiktok</th>
          <td>tokisaki kurumi</td>
        </tr>
        <tr>
          <th>youtube</th>
          <td>-</td>
        </tr>
        <tr>
          <th>github</th>
          <td>lutfiauliasidik</td>
        </tr>
      </table>
    </div>
  </main>
  <main class="container-zoom">
    <div class="image-zoom">
      <img src="" alt="">
    </div>
  </main>
  <main class="container-image-gallery">
    <div class="image-child">
      <img src="<?= BASEURL; ?>/image/profile/lutfi.jpg" alt="">
    </div>
    <div class="image-gallery">
      <img class="img-g" src="<?= BASEURL; ?>/image/thumbnails/a.png" alt="">
      <img class="img-g" src="<?= BASEURL; ?>/image/thumbnails/b.png" alt="">
      <img class="img-g" src="<?= BASEURL; ?>/image/thumbnails/c.png" alt="">
      <img class="img-g" src="<?= BASEURL; ?>/image/thumbnails/d.png" alt="">
      <img class="img-g" src="<?= BASEURL; ?>/image/thumbnails/e.png" alt="">
      <img class="img-g" src="<?= BASEURL; ?>/image/thumbnails/f.png" alt="">
      <img class="img-g" src="<?= BASEURL; ?>/image/thumbnails/g.png" alt="">
      <img class="img-g" src="<?= BASEURL; ?>/image/thumbnails/h.png" alt="">
    </div>
  </main>
  <main class="container-static-detail">
    <div class="static-detail">
      <canvas id="myChart"></canvas>
    </div>
  </main>
</section>
<script>
  const labels = [
    'personal',
    'address',
    'sosmed',
    'image',
    'accuracy',
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: '',
      backgroundColor: 'rgb(0, 134, 255)',
      borderColor: 'rgb(0, 134, 255, 0.1)',
      data: [100, 70, 90, 100, 95],
    }]
  };

  const config = {
    type: 'line',
    data: data,
    options: {}
  };
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
