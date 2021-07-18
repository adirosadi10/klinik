<script>
  Highcharts.chart('container1', {
    chart: {
      type: 'column'
    },
    title: {
      text: 'Pendapatan Bulanan'
    },
    subtitle: {
      text: 'Source: KlinikSehat.com'
    },

    xAxis: {
      categories: [
        <?php
        foreach ($data['getTotal'] as $getTotal) {
          $tanggal = $getTotal['tanggal'];
          echo " '$tanggal', ";
        };
        ?>

      ],
      crosshair: true
    },
    yAxis: {
      min: 0,
      title: {
        text: 'Rupiah (Rp.)'
      }
    },
    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
        '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
      footerFormat: '</table>',
      shared: true,
      useHTML: true
    },
    plotOptions: {
      column: {
        pointPadding: 0.2,
        borderWidth: 0
      }
    },
    series: [{
      name: 'Pendapatan',
      data: [
        <?php
        foreach ($data['getTotal'] as $getTotal) {
          $total = $getTotal['total'];
          echo " $total, ";
        };
        ?>
      ]


    }]
  });
</script>
<script>
  Highcharts.chart('container2', {
    chart: {
      type: 'line'
    },
    title: {
      text: 'Prekuensi Kunjungan Bulanan'
    },
    subtitle: {
      text: 'Source: KlinikSehat.com'
    },
    xAxis: {
      categories: [
        <?php
        foreach ($data['getPrek'] as $getPrek) {
          $tanggal = $getPrek['tanggal'];
          echo " '$tanggal', ";
        };
        ?>
      ]
    },
    yAxis: {
      title: {
        text: 'Kunjungan'
      }
    },
    plotOptions: {
      line: {
        dataLabels: {
          enabled: true
        },
        enableMouseTracking: false
      }
    },
    series: [{
      name: 'Kunjungan',
      data: [
        <?php
        foreach ($data['getPrek'] as $getPrek) {
          $kunjungan = $getPrek['kunjungan'];
          echo " $kunjungan, ";
        };
        ?>
      ]
    }]
  });
</script>