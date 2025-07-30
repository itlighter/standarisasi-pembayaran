$(function() {
  // Handle pageshow (back/forward cache)
  $(window).on('pageshow', function(event) {
    if (event.originalEvent && event.originalEvent.persisted) {
      var sewa = $('#showSewa1')[0];
      var sewa1 = $('#showSewa2')[0];
      var q11 = $('#q1-1')[0];
      var q12 = $('#q1-2')[0];
      var radioButtons = $(sewa).find('input[type="radio"]');
      var radioButtons1 = $(sewa1).find('input[type="radio"]');
      if (q11 && q11.checked) {
        radioButtons.prop('checked', false);
        radioButtons.eq(10).prop('checked', true);
      } else if (q12 && q12.checked) {
        radioButtons1.prop('checked', false);
        radioButtons1.eq(10).prop('checked', true);
      }
    }
  });

  var footer = $('#footerDashboard')[0];

  // Helper to initialize collapses
  function initCollapse(ids, toggle = false) {
    var result = {};
    ids.forEach(function(id) {
      result[id] = new bootstrap.Collapse('#' + id, { toggle: toggle });
    });
    return result;
  }

  // Collapse IDs
  var collapseIds = [
    'showVendor', 'showVendor1', 'showSewa1', 'showSewa2', 'show200-1', 'show200-2',
    'showNominal1', 'showNominal2', 'showNominal11', 'showNominal12',
    'showBumn', 'showBumn1', 'showBumn2', 'showBumn3', 'showBumn11', 'showBumn12',
    'showPph2', 'showPKP1', 'showPKP2', 'showPKP3', 'showPKP4',
    'show2200-1', 'show2200-2', 'showSewa3'
  ];
  var collapses = initCollapse(collapseIds);
  collapses['showPph'] = new bootstrap.Collapse('#showPph', { toggle: true });
  collapses['showPph1'] = new bootstrap.Collapse('#showPph1', { toggle: true });

  // Radios
  var radioIds = [];
  for (var i = 1; i <= 13; i++) {
    radioIds.push('q' + i + '-1', 'q' + i + '-2');
  }
  var radios = {};
  radioIds.forEach(function(id) {
    radios[id] = $('#' + id)[0];
  });
  if (radios['q7-1']) radios['q7-1'].checked = true;
  if (radios['q13-1']) radios['q13-1'].checked = true;

  // Helper for unchecking radios
  function uncheckRadios(ids) {
    ids.forEach(function(id) {
      if (radios[id]) radios[id].checked = false;
    });
  }

  // Collapse logic for radios
  var radioLogic = [
    {
      id: 'q1-2',
      handler: function() {
        collapses['showSewa1'].hide();
        collapses['showSewa2'].show();
        uncheckRadios(['q2-1','q2-2','q3-1','q3-2','q4-1','q4-2','q5-1','q5-2','q6-1','q6-2']);
        if (footer) footer.style.marginBottom = "0px";
      }
    },
    {
      id: 'q1-1',
      handler: function() {
        collapses['showSewa2'].hide();
        collapses['showSewa1'].show();
        uncheckRadios(['q8-1','q8-2','q9-1','q9-2','q10-1','q10-2','q11-1','q11-2','q12-1','q12-2']);
        if (footer) footer.style.marginBottom = "0px";
      }
    },
    {
      id: 'q2-1',
      handler: function() {
        collapses['show200-1'].hide();
        collapses['show200-2'].show();
      }
    },
    {
      id: 'q2-2',
      handler: function() {
        collapses['show200-2'].hide();
        collapses['show200-1'].show();
      }
    },
    {
      id: 'q3-1',
      handler: function() {
        collapses['showVendor'].hide();
        uncheckRadios(['q4-1','q4-2','q5-1','q5-2']);
      }
    },
    {
      id: 'q3-2',
      handler: function() {
        collapses['showVendor'].show();
      }
    },
    {
      id: 'q4-1',
      handler: function() {
        collapses['showPKP3'].hide();
        collapses['showPKP1'].show();
        $('#pnominal').html("1. PPN di pungut oleh BSI, sehingga akan mengurangi nominal yang dibayarkan ke vendor<br>2. Beban akan diamortisasi sesuai dengan jangka waktu dalam OJS, sehingga metode transaksi yang harus dipilih oleh User adalah \"Amortisasi\"");
        $('#pnominall').html("1. PPN disetorkan oleh Vendor, sehingga tidak mengurangi nominal yang dibayarkan ke vendor.<br>2. Beban akan dibuku sekaligus, sehingga metode transaksi yang harus dipilih oleh User adalah \"Sekaligus\"");
      }
    },
    {
      id: 'q4-2',
      handler: function() {
        collapses['showPKP1'].hide();
        collapses['showPKP3'].show();
        $('#pnominal').html("Beban akan dibuku sekaligus, sehingga metode transaksi yang harus dipilih User adalah \"sekaligus\"");
        $('#pnominall').html("Beban akan diamortisasi sesuai dengan jangka waktu dalam PKS, sehingga metode transaksi yang harus dipilih oleh User adalah \"Amortisasi\"");
      }
    },
    {
      id: 'q5-1',
      handler: function() {
        collapses['showNominal2'].hide();
        collapses['showNominal1'].show();
        collapses['showBumn'].show();
      }
    },
    {
      id: 'q5-2',
      handler: function() {
        collapses['showNominal1'].hide();
        collapses['showBumn'].hide();
        collapses['showNominal2'].show();
        uncheckRadios(['q6-1','q6-2']);
      }
    },
    {
      id: 'q6-1',
      handler: function() {
        $("#kodefaktur").text("kode awal 04");
        collapses['showBumn2'].hide();
        collapses['showBumn1'].show();
      }
    },
    {
      id: 'q6-2',
      handler: function() {
        $("#kodefaktur").text("kode awal 03");
        collapses['showBumn1'].hide();
        collapses['showBumn2'].show();
      }
    },
    {
      id: 'q7-1',
      handler: function() {
        $(".pph").text("Pemilik Bangunan");
        collapses['showPph2'].hide();
        collapses['showPph'].show();
      }
    },
    {
      id: 'q7-2',
      handler: function() {
        $(".pph").text("BSI");
        collapses['showPph'].hide();
        collapses['showPph2'].show();
      }
    },
    {
      id: 'q8-1',
      handler: function() {
        collapses['show2200-1'].hide();
        collapses['show2200-2'].show();
      }
    },
    {
      id: 'q8-2',
      handler: function() {
        collapses['show2200-2'].hide();
        collapses['show2200-1'].show();
      }
    },
    {
      id: 'q9-1',
      handler: function() {
        collapses['showVendor1'].hide();
      }
    },
    {
      id: 'q9-2',
      handler: function() {
        collapses['showVendor1'].show();
      }
    },
    {
      id: 'q10-1',
      handler: function() {
        collapses['showPKP4'].hide();
        collapses['showPKP2'].show();
      }
    },
    {
      id: 'q10-2',
      handler: function() {
        collapses['showPKP2'].hide();
        collapses['showPKP4'].show();
      }
    },
    {
      id: 'q11-1',
      handler: function() {
        collapses['showNominal12'].hide();
        collapses['showNominal11'].show();
        collapses['showBumn3'].show();
      }
    },
    {
      id: 'q11-2',
      handler: function() {
        collapses['showNominal11'].hide();
        collapses['showBumn3'].hide();
        collapses['showNominal12'].show();
      }
    },
    {
      id: 'q12-1',
      handler: function() {
        collapses['showBumn12'].hide();
        collapses['showBumn11'].show();
      }
    },
    {
      id: 'q12-2',
      handler: function() {
        collapses['showBumn11'].hide();
        collapses['showBumn12'].show();
      }
    },
    {
      id: 'q13-1',
      handler: function() {
        collapses['showPph1'].show();
      }
    },
    {
      id: 'q13-2',
      handler: function() {
        collapses['showPph1'].hide();
      }
    }
  ];

  radioLogic.forEach(function(item) {
    if (radios[item.id]) {
      $(radios[item.id]).on('change', item.handler);
    }
  });

  // RadiosArr logic
  var radiosArr = $('input[type="radio"]').slice(0, 26).toArray();
  $(radiosArr).on('change', function() {
    var r = radiosArr;
    if (r[0].checked) {
      if ((r[2].checked || r[3].checked) && r[4].checked && (r[12].checked || r[13].checked)) collapses['showSewa3'].show();
      else if ((r[2].checked || r[3].checked) && r[5].checked && (r[6].checked || r[7].checked) && r[9].checked && (r[12].checked || r[13].checked)) collapses['showSewa3'].show();
      else if ((r[2].checked || r[3].checked) && r[5].checked && (r[6].checked || r[7].checked) && r[8].checked && (r[10].checked || r[11].checked) && (r[12].checked || r[13].checked)) collapses['showSewa3'].show();
      else collapses['showSewa3'].hide();
    } else if (r[1].checked) {
      if ((r[14].checked || r[15].checked) && r[16].checked && (r[24].checked || r[25].checked)) collapses['showSewa3'].show();
      else if ((r[14].checked || r[15].checked) && r[17].checked && (r[18].checked || r[19].checked) && r[21].checked && (r[24].checked || r[25].checked)) collapses['showSewa3'].show();
      else if ((r[14].checked || r[15].checked) && r[17].checked && (r[18].checked || r[19].checked) && r[20].checked && (r[22].checked || r[23].checked) && (r[24].checked || r[25].checked)) collapses['showSewa3'].show();
      else collapses['showSewa3'].hide();
    }
  });
});