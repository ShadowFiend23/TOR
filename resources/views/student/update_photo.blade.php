<x-student_layout>
  <script src="https://cdn.jsdelivr.net/npm/cropit@0.5.1/dist/jquery.cropit.js"></script>
  <style>
    .cropit-preview {
      background-color: #f8f8f8;
      background-size: cover;
      border: 5px solid #ccc;
      border-radius: 3px;
      margin-top: 7px;
      width: 300px;
      height: 300px;
    }

    .cropit-preview-image-container {
      cursor: move;
    }

    .cropit-preview-background {
      opacity: .2;
      cursor: auto;
    }

    .image-size-label {
      margin-top: 10px;
    }

    input, .export {
      /* Use relative position to prevent from being covered by image background */
      position: relative;
      z-index: 10;
      display: block;
    }

    button {
      margin-top: 10px;
    }

  </style>
  <script>
    $(function() {
      $('.image-editor').cropit({
        exportZoom: 1.25,
        imageBackground: true,
        imageBackgroundBorderWidth: 20,
        allowDragNDrop: true,
        smallImage: "stretch",
        onImageError: function(e) {
          if (e.code === 1) {
            alert("Please use an image that's at least " + $('.cropit-image-preview').outerWidth() + "px in width and " + $('.cropit-image-preview').outerHeight() + "px in height.");
          }
        }
      });

      $('.rotate-cw').click(function() {
        $('.image-editor').cropit('rotateCW');
      });
      $('.rotate-ccw').click(function() {
        $('.image-editor').cropit('rotateCCW');
      });

      $('.export').click(function(e) {
        e.preventDefault();
        var imageData = $('.image-editor').cropit('export');
        $("#hidden_base64").val(imageData);
        $("#updateimg").submit();
      });
    });
  </script>
  <div class="contaier-fluid border mx-1 bg-white p-3">
    <section class="content-header">
      <h3><strong>Edit Photo</strong> <br> SY: 2023-2024 SEM: 1</h3>
    </section>

    <div class="card shadow">
      <div class="card-header">
        <i class='bx bx-image-alt' ></i> Update Photo
      </div>
      <div class="card-body">
        <div class="row">
            <div class="col-md-12">
              <div class="panel">
                <div class="panel-body">
                    <form action="#" method="post" id="updateimg" class="form-horizontal" role="form" enctype="multipart/form-data">
                <div class="col-md-4">
                  <div class="image-editor">
                    <strong class="text-danger"> Note:</strong>
                    <ol>
                      <li class="text-danger">The uploaded photo will be used as your ID in your Free Education Form.</li>
                      <li class="text-danger">Please use a 2x2 ID Picture.</li>
                      <li class="text-danger">Please use a photo with a white background.</li>
                      <li class="text-danger">Please use a decent/clear Photo.</li>
                    </ol>
                    <div class="cropit-preview" style="position: relative; width: 300px; height: 300px;"><div class="cropit-preview-background-container" style="position: absolute; z-index: 0; inset: -20px; overflow: hidden;"><img class="cropit-preview-background" alt="" style="position: relative; left: 20px; top: 20px; transform-origin: left top; will-change: transform;"></div><div class="cropit-preview-image-container" style="position: absolute; overflow: hidden; left: 0px; top: 0px; width: 100%; height: 100%;"><img class="cropit-preview-image" alt="" style="transform-origin: left top; will-change: transform;"></div></div>
                    <br>
                    <input type="hidden" id="hidden_base64" name="img" value="">
                    <input type="file" class="cropit-image-input form-control" accept="image/*">
                    <div class="image-size-label">
                      Resize image
                    </div>
                    <input type="range" class="cropit-image-zoom-input" min="0" max="1" step="0.01">
                    <br>
                    <button type="button" class="btn btn-secondary btn-sm"><i class='bx bx-rotate-left' ></i> Rotate counterclockwise</button>
                    <button type="button" class="btn btn-secondary btn-sm"><i class='bx bx-rotate-right' ></i> Rotate clockwise</button>
                  </div>
                </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="col-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-primary export">Update </button>
                      </div>
                    </div>
                  </div>
                </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

</x-student_layout>