<x-student_layout>


<div class="cotainer vh-100 d-flex justify-content-center align-items-center">
  <div class="card w-50 position-relative">
    <button class="btn btn-success position-absolute bottom-100 end-0 my-2" data-coreui-toggle="modal" data-coreui-target="#staticBackdrop">Apply</button>
    <div class="card-body bg-white">
      <h2 class="text-center">
      Congratulations! You have achieved the distinction of being recognized as a Latin honor student. Your dedication and hard work have earned you this well-deserved qualification. Well done
      </h2>
    </div>
    <div class="card-footer border-0 d-flex justify-content-center align-items-center bg-white">
      <div class="border p-3">
          <h3>GWA 1.6 </h3>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center">
        <h3>Could you please confirm your decision to apply for a Latin honor?</h3>
      </div>
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-dark" data-coreui-dismiss="modal">NO</button>
        <button type="button" class="btn btn-info text-light" data-coreui-toggle="modal" data-coreui-target="#staticBackdrop2">YES</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop2" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center">
        <h3>Kindly wait for the response as the department head is currently in the process of confirming your application.</h3>
      </div>
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-info text-light px-5 mx-auto" data-coreui-toggle="modal" data-coreui-target="#staticBackdrop3">OK</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop3" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center">
        <h3>Congratulations (student_name), We are pleased to inform you that your application has been successful, and you have been accepted. Congratulations on this significant achievement.</h3>
      </div>
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-info text-light px-5 mx-auto" data-coreui-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>


</x-student_layout>