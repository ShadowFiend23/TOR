<x-admin_layout>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <p>
            Rubrics saved successfully
          </p>
          <div class="text-end">
            <button type="button" class="btn btn-info btn-sm px-3" data-coreui-dismiss="modal">Ok</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-lg px-3 position-relative" data-controller="rubrics-calculator">

    <div class="d-flex justify-content-between">
      <h4>EDIT RUBRICS</h4>
    </div>

    <br>

    <div class="card rounded-0">
      <div class="card-header d-flex">
        <h4 class="fw-light m-0" data-rubric-name="academic_excellence">Academic Excellence - 0 Points</h4>
      </div>
      <div class="card-body">
        <span>Demonstrates a strong academic record with consistently high grades. Shows a depth of understanding in the major subject area.</span>
        <table class="table">
          <thead>
            <tr>
                <th style="width: 10%;">Points</th>
                <th style="width: 90%;">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="academic_excellence"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value=" Exceptional academic performance; outstanding depth of knowledge in major subject. "/></td>
            </tr>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="academic_excellence"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value=" Strong academic performance; evident depth of understanding. "/></td>
            </tr>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="academic_excellence"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value=" Good academic performance; some depth in major subject. "/></td>
            </tr>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="academic_excellence"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value=" Adequate academic performance; limited depth shown. "/></td>
            </tr>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="academic_excellence"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value=" Poor academic performance; lack of depth. "/></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    
    <br>

    <div class="card rounded-0">
      <div class="card-header d-flex">
        <h4 class="fw-light m-0" data-rubric-name="intellectual_curiosity">Intellectual Curiosity - 0 Points</h4>
      </div>
      <div class="card-body">
        <span>Demonstrates a passion for learning beyond coursework. Shows engagement with research, projects, or extracurricular activities.</span>
        <table class="table">
          <thead>
            <tr>
                <th style="width: 10%;">Points</th>
                <th style="width: 90%;">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="intellectual_curiosity"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value=" High level of intellectual curiosity; substantial engagement in research/projects beyond requirements. "/></td>
            </tr>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="intellectual_curiosity"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value=" Demonstrates intellectual curiosity; some engagement beyond coursework. "/></td>
            </tr>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="intellectual_curiosity"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value=" Moderate level of curiosity; limited engagement in additional learning activities. "/></td>
            </tr>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="intellectual_curiosity"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value=" Limited curiosity beyond coursework; minimal engagement. "/></td>
            </tr>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="intellectual_curiosity"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value=" No sign of intellectual curiosity; no engagement in additional learning activities. "/></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    
    <br>

    <div class="card rounded-0">
      <div class="card-header d-flex">
        <h4 class="fw-light m-0" data-rubric-name="communication_skills">Communication Skills - 0 Points</h4>
      </div>
      <div class="card-body">
        <span>Expresses ideas clearly and articulately. Engages in thoughtful and insightful discussions.</span>
        <table class="table">
          <thead>
            <tr>
                <th style="width: 10%;">Points</th>
                <th style="width: 90%;">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="communication_skills"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value="Excellent communication; articulates ideas eloquently. "/></td>
            </tr>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="communication_skills"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value="Strong communication; expresses ideas effectively."/></td>
            </tr>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="communication_skills"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value="Adequate communication; some points could be clearer."/></td>
            </tr>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="communication_skills"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value="Basic communication skills; struggles to articulate."/></td>
            </tr>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="communication_skills"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value="Poor communication; unable to convey ideas."/></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    
    <br>

    <div class="card rounded-0">
      <div class="card-header d-flex">
        <h4 class="fw-light m-0" data-rubric-name="leadership_and_service">Leadership and Service - 0 Points</h4>
      </div>
      <div class="card-body">
        <span>Demonstrates leadership skills through involvement in campus/community activities. Shows a commitment to service and making a positive impact.</span>
        <table class="table">
          <thead>
            <tr>
                <th style="width: 10%;">Points</th>
                <th style="width: 90%;">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="leadership_and_service"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value="Strong leadership and service record; impact contributions to campus/community."/></td>
            </tr>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="leadership_and_service"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value="Demonstrates leadership and service; positive contributions evident."/></td>
            </tr>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="leadership_and_service"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value="Some involvement in leadership and service activities, but impact is limited."/></td>
            </tr>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="leadership_and_service"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value="Minimal leadership and service involvement; limited impact."/></td>
            </tr>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="leadership_and_service"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value="No leadership or service involvement."/></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    
    <br>

    <div class="card rounded-0">
      <div class="card-header d-flex">
        <h4 class="fw-light m-0" data-rubric-name="overall_impression">Overall Impression - 0 Points</h4>
      </div>
      <div class="card-body">
        <span>Overall assessment of the candidate's suitability for Latin Honors.</span>
        <table class="table">
          <thead>
            <tr>
                <th style="width: 10%;">Points</th>
                <th style="width: 90%;">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="overall_impression"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value="Strongly recommended for Latin Honors."/></td>
            </tr>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="overall_impression"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value="Recommended for Latin Honors."/></td>
            </tr>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="overall_impression"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value="Marginally recommended for Latin Honors."/></td>
            </tr>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="overall_impression"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value="Not strongly recommended for Latin Honors."/></td>
            </tr>
            <tr>
                <td scope="row">
                  <input type="text" class="form-control text-center" style="width: 50px;" 
                         data-rubric-name="overall_impression"
                         data-rubrics-calculator-target="point" 
                         data-action="input->rubrics-calculator#calculateTotals" 
                         value=0>
                </td>
                <td><input type="text" class="form-control" value="Not recommended for Latin Honors."/></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    
    <br>
    

    <div class="sticky-bottom bg-light py-3 d-flex justify-content-between">
      <div>
        <i class='bx bx-error text-danger d-none' data-rubrics-calculator-target="warning"></i>
        <span data-rubrics-calculator-target="total">Total: 0/100</span>
      </div>
      <div>
        <button class="btn btn-info btn-sm" 
               data-rubrics-calculator-target="submit"
               data-coreui-toggle="modal" data-coreui-target="#exampleModal"
              >
          Save
        </button>
      </div>
    </div>
  </div>

</x-admin_layout>