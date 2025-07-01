
@extends('conten_app.layouts.template_multi')
@section('content')
<div class="main">

    <div class="card-header">Estimate Of Repair</div>
    <form>
    <div class="container" style="width: 70%; margin: 0 auto">
      <div class="row">
        <div class="col-6">
          <!-- Kolom pertama dengan lebar 4/12 -->
          <div class="d-flex align-items-center mb-3">
            <label
              for="input1"
              class="me-2"
              style="white-space: nowrap; min-width: 200px; color: #000000"
              >EOR NO</label
            >
            <input
              type="text"
              class="form-control"
              id="eor_no"
              placeholder="eor_no"
            />
          </div>
          <div class="d-flex align-items-center mb-3">
            <label
              for="input2"
              class="me-2"
              style="white-space: nowrap; min-width: 200px; color: #000000"
              >DEPO</label
            >
            <input
              type="text"
              class="form-control"
              id="id_depo"
              placeholder="id depo"
            />
          </div>
          <div class="d-flex align-items-center mb-3">
            <label
              for="input3"
              class="me-4"
              style="white-space: nowrap; min-width: 200px; color: #000000"
              >CONTAINER NUMBER<button id="listContainer" type="button" data-toggle="modal" data-target="#containerModal">:::</button></label >
            <input
              type="text"
              class="form-control"
              id="id_container"
              placeholder="container number"
            />
          </div>
          <div class="d-flex align-items-center mb-3">
            <label
              for="input4"
              class="me-2"
              style="white-space: nowrap; min-width: 200px; color: #000000">BL Number</label
            >
            <input
              type="text"
              class="form-control"
              id="bl_no"
              placeholder="BL Number"
            />
          </div>
			<div class="d-flex align-items-center mb-3">
            <label
              for="input21"
              class="me-2"
              style="white-space: nowrap; min-width: 200px; color: #000000"
              >CONSIGNEE</label >
            <input
              type="text"
              class="form-control"
              id="consignee"
              placeholder="Consignee"
            />
          </div>

        </div>
        <div class="col-6">
          <!-- Kolom kedua dengan lebar 8/12 -->
                   <div class="d-flex align-items-center mb-3">
            <label
              for="input22"
              class="me-2"
              style="white-space: nowrap; min-width: 200px; color: #000000"
              >EOR DATE</label
            >
            <input
              type="date"
              class="form-control"
              id="eor_date"
              placeholder="eor date"
            />
          </div>
          <div class="d-flex align-items-center mb-3">
            <label
              for="input23"
              class="me-2"
              style="white-space: nowrap; min-width: 200px; color: #000000"
              >PRINCIPAL</label
            >
            <input
              type="text"
              class="form-control"
              id="principal"
              placeholder="principal"  />
          </div>
          <div class="d-flex align-items-center mb-3">
            <label
              for="input24"
              class="me-2"
              style="white-space: nowrap; min-width: 200px; color: #000000"
              >CURRENCY <span><button id="listcurrency" type="button" data-toggle="modal" data-target="#currencyModal">:::</button> </label>
            <input
              type="text"
              class="form-control"
              id="currency"
              placeholder="currency"  />
          </div>
		<div class="d-flex align-items-center mb-3">
            <label
              for="input24"
              class="me-2"
              style="white-space: nowrap; min-width: 200px; color: #000000"
              >VESSEL VOYAGE</label>
            <input
              type="text"
              class="form-control"
              id="vessel_voyage"
              placeholder="vessel_voyage" />
          </div>
            <div class="d-flex align-items-center mb-3">
            <label
              for="input21"
              class="me-2"
              style="white-space: nowrap; min-width: 200px; color: #000000">DATE IN</label>
            <input
              type="date"
              class="form-control"
              id="date_in"
              placeholder="date_in" />
          </div>

        </div>
      </div>
    </div>
     <input type="reset" id="cancel"><button class="btn btn-primary" id="Search">Search</button>
	 <button class="btn btn-primary" id="submit_data">Save</button>
	 <button class="btn btn-primary" id="Print_data">Print</button>
</form>

    <div class="card-body">
      <!-- Tambahkan div dengan class "table-responsive" untuk scroll -->
      <div class="table-responsive">
        <table class="table table-sm table-bordered" id="makeEditable">
          <thead>
            <tr>
              <th>NO</th>
              <th>description</th>
              <th>RESP</th>
              <th>LOC</th>
              <th>L</th>
              <th>W</th>
              <th>Q</th>
              <th>CURR</th>
              <th>HOUR</th>
              <th>LABOUR</th>
              <th>MATERIAL</th>
              <th>SUBTOTAL</th>
            </tr>
          </thead>
          <tbody>
            <tr>

              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>

      <span style="float: right">
        <button id="but_add" class="btn btn-danger">Add</button>
      </span>
    </div>

<!-- Modal -->
<div class="modal fade" id="currencyModal" tabindex="-1" role="dialog" aria-labelledby="currencyModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="currencyModalLabel">Select Currency</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <select class="form-control" id="currencySelect">
          <option value="USD">USD</option>
          <option value="EUR">EUR</option>
          <option value="JPY">JPY</option>
          <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="selectCurrencyBtn">Select</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal dengan Data Grid -->
<div class="modal fade" id="containerModal" tabindex="-1" role="dialog" aria-labelledby="containerModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="containerModalLabel">Select Container</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="containerTable" class="display" style="width:100%">
          <thead>
            <tr>
              <th>Container Number</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>VOC45675543</td>
              <td>Detail 1</td>
            </tr>
            <tr>
              <td>DDO45675543</td>
              <td>Detail 2</td>
            </tr>
            <tr>
              <td>DPO45670063</td>
              <td>Detail 3</td>
            </tr>
            <!-- Tambahkan data lainnya sesuai kebutuhan -->
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="selectContainerBtn">Select</button>
      </div>
    </div>
  </div>



    <script>
     $(document).ready(function () {
        $("#makeEditable").SetEditable({ $addButton: $("#but_add") });

			console.log("Row Added"); // Debug untuk memastikan fungsi dipanggil

        $("#cancel").hide();
        $("#submit_data").on("click", function () {

		   var gabung = $('#eor_no').val()+","+$('#id_depo').val()+","+$('#id_container').val()+","+$('#bl_no').val()+","
            +$('#consignee').val()+","+$('#eor_date').val()+","+$('#principal').val()+","+$('#currency').val()+","
			+$('#vessel_voyage').val()+","+$('#date_in').val();

        console.log(gabung);  //lihat hasil
         $("#cancel").click();
          var td = TableToCSV("makeEditable", ",");
          console.log(td); //lihat hasilnya
        });

	$("#listcurrency").click(function (event) {
    event.preventDefault();

    $("#selectCurrencyBtn").click(function () {
      var selectedCurrency = $("#currencySelect").val();
      $("#currency").val(selectedCurrency);
      $("#currencyModal").modal('hide'); // Menyembunyikan modal setelah memilih
    });
  });

//mulai modal container
 $('#containerTable').DataTable();
	$("#listContainer").click(function (event) {
			event.preventDefault();
			// Tambahkan event listener untuk tombol Select
			$('#selectContainerBtn').click(function() {
			  var selectedContainer = $('#containerTable tbody tr.selected td:first').text();
			  // Masukkan nilai yang dipilih ke dalam input atau lakukan tindakan lain
			  $("#id_container").val(selectedContainer);
			  console.log("Selected Container: " + selectedContainer);
			  $('#containerModal').modal('hide');
			});

		  // Tambahkan class 'selected' saat baris diklik
		  $('#containerTable tbody').on('click', 'tr', function () {
			// Hapus class 'selected' dari baris lain dan tambahkan ke baris yang diklik
			$('#containerTable tbody tr').removeClass('selected');
			$(this).addClass('selected');
		  });


	});


});
    </script>


 @endsection
