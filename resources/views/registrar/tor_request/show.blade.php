<x-registrar_layout>
<!-- Modal confirmation-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <label>OR No.</label>
        <input type="text" class="form-control form-control-sm" />
        <label>Date.</label>
        <input type="date" class="form-control form-control-sm" />
        <div class="text-end mt-3">
          <button type="button" class="btn btn-info btn-sm px-3" data-coreui-toggle="modal" data-coreui-target="#successModal">Next</button>
          <button type="button" class="btn btn-secondary btn-sm" data-coreui-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal success -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <p class="fw-bold text-center">
          TITLE OR DEGREE CONFERRED
        </p>
        <label>Date of Graduation</label>
        <input type="date" class="form-control form-control-sm" />
        <label>Granted under Authority of the EVSU Academic Council and Board of Regents</label>
        <input type="text" class="form-control form-control-sm" />
        <label>GRANTED HONORABLE DISMISSAL EFFECTIVE</label>
        <input type="text" class="form-control form-control-sm" />
        <div class="text-end mt-3">
          <button type="button" class="btn btn-info btn-sm px-3" onclick="printDiv('toPrint', 'Title')">Print</button>
          <button type="button" class="btn btn-secondary btn-sm" data-coreui-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>


  <div class="container-lg d-flex justify-content-end gap-2">
    <script>
      function printDiv(divId,
        title) {

        let mywindow = window.open('', 'PRINT', 'height=650,width=900,top=100,left=150');

        mywindow.document.write(`<html><head><title>${title}</title>`);
        mywindow.document.write('</head><body >');

        mywindow.document.write(document.getElementById(divId).innerHTML);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10*/

        mywindow.addEventListener('load', () => {
          mywindow.print();
          mywindow.close();
        })

        return true;
      }
    </script>
    <button class="btn btn-info btn-sm" data-coreui-toggle="modal" data-coreui-target="#exampleModal">
      Print
    </button>
    <button class="btn btn-success btn-sm">
      Download
    </button>
    <button class="btn btn-danger btn-sm">
      Edit
    </button>
  </div>
  <div class="container-lg py-4" id="toPrint">
    <img src="{{ asset('images/TOR.png') }}" class="w-100 shadow" style="height: 100%;">
  </div>
</x-registrar_layout>