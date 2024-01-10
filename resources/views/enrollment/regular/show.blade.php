<x-authenticated_layout>
    @php
        $subjects = [];
        $descriptions = [];
        if(isset($info['enroll'])){
            $subjects = explode(",",$info['enroll']->enrolledSubjects);
            $descriptions = $info['descriptions'];
            $grades = $info["enroll"]->grades ?? "";
            $grades = json_decode($grades,true);
        }
    @endphp
  <div class="container-fluid">

    <div class="row">
      <div class="col-12 d-flex justify-content-end">
        <button class="btn btn-info text-white" data-enroll="{{ $info['enroll']->id }}" id="showEnrollBtn">
          Enroll
        </button>
      </div>
      <div class="col-12">
        <h4 class="text-black ms-2"><strong>Students Records</strong></h4>
        <div class="d-flex flex-column ms-4 mb-4">
          <strong class="text-black fw-bold my-2">Student Credentials</strong>
          @if (isset($info['credentials']) && !empty($info['credentials']))
            @foreach ($info['credentials'] as $credentials)
                <p class="text-black mb-0">{{ $credentials }}</p>
            @endforeach
          @endif
        </div>
      </div>
    </div>


    <div class="accordion" id="accordionExample">
      <div class="accordion-item text-white">
        <h2 class="accordion-header">
          <button class="accordion-button bg-dark text-white" type="button" data-coreui-toggle="collapse" data-coreui-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <span class="fs-4 me-2"><i class='bx bx-list-ul' ></i></span>
                Course : OC BSIT,
                  AY : 2021-2022,
                  Sem : 1
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-coreui-parent="#accordionExample">
          <div class="accordion-body">
            <div class="panel-body" style="display: block;">
              <div class="table-responsive">
                <table class="table ">
                  <tr>
                      <th style="width: 5%">Grade</th>
                      <th style="width: 5%">Comp.</th>
                      <th style="width: 15%">Code</th>
                      <th style="width: 7%">Sec.</th>
                      <th >Description</th>
                  </tr>
                  @foreach ($subjects as $subject)
                  <tr>
                    <td>{{ $grades[$subject] ?? "" }}</td>
                    <td>  </td>
                    <td>{{ $subject }}</td>
                    <td> 1A </td>
                    <td>{{ $descriptions[$subject] }}</td>
                  </tr>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-authenticated_layout>
