<x-registrar_layout>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/4.0.379/pdf.min.mjs" type="module"></script>
<script src="https://printjs-4de6.kxcdn.com/print.min.js" type="module"></script>
<script type="module">

  var url = document.getElementById('the-canvas').dataset.pdfSrc;

  var { pdfjsLib } = globalThis;
  
  pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/4.0.379/pdf.worker.min.mjs';

  var loadingTask = pdfjsLib.getDocument(url);
  loadingTask.promise.then(function(pdf) {
    console.log('PDF loaded');
    
    var pageNumber = 1;
    pdf.getPage(pageNumber).then(function(page) {
      console.log('Page loaded');

      var scale = 1.5;
      var viewport = page.getViewport({scale: scale});
      
      var canvas = document.getElementById('the-canvas');
      var context = canvas.getContext('2d');
      canvas.height = viewport.height;
      canvas.width = viewport.width;
      
      var renderContext = {
        canvasContext: context,
        viewport: viewport
      };
      var renderTask = page.render(renderContext);
      renderTask.promise.then(function () {
        console.log('Page rendered');
      });
    });
  }, function (reason) {
    console.error(reason);
  });
</script>
  
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
          <a href="{{asset('pdfsample.pdf')}}" class="btn btn-info btn-sm px-3" id="pdfLink">Print</a>
          <script>
              document.getElementById('pdfLink').addEventListener('click', function(e) {
                e.preventDefault()
                printJS(e.currentTarget.href)
              });
          </script>
          <button type="button" class="btn btn-secondary btn-sm" data-coreui-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>

  <div class="container-lg d-flex justify-content-end gap-2">
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
  <div class="container-lg py-4 d-flex justify-content-center" id="toPrint">
    <canvas data-pdf-src="{{asset('pdfsample.pdf')}}" id="the-canvas"></canvas>
  </div>
</x-registrar_layout>