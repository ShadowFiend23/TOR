<x-registrar_layout>
  <div class="container-lg d-flex justify-content-end gap-2">
    <script>
      function saveDiv(title) {
        var doc = new jsPDF('p','pt','legal');
        doc.fromHTML(`<html><head><title>${title}</title></head><body><style>table{transform: scale(30%);}</style>` + document.getElementById('toSave1').innerHTML + `</body></html>`, 100);
        doc.addPage()
        doc.fromHTML(`<html><head><title>${title}</title></head><body><style>table{transform: scale(30%);}</style>` + document.getElementById('toSave1').innerHTML + `</body></html>`, 100, { pagesSplit: true });
        doc.save()
      }
    </script>
    <button class="btn btn-success btn-sm" onclick="saveDiv('Title')">
      Download
    </button>
  </div>
  <div id="toSave1" class="container-lg py-4">
    <style>
      table{
        margin: auto;
      }

      table, th, td{
        border: solid 1px black;
        text-align: center;
        padding: 10px;
      }
    </style>
    <div style="margin-top: 10px; margin-bottom: 10px;">
      <h4 style="margin-left: 10px;">1st Year: FIRST SEMESTER</h4>
      <table>
        <thead>
          <th>Code</th>
          <th style="width: 70ch;">Description</th>
          <th>Credit</th>
        </thead>
        <tbody>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="margin-top: 10px; margin-bottom: 10px;">
      <h4 style="margin-left: 10px;">1st Year: FIRST SEMESTER</h4>
      <table>
        <thead>
          <th>Code</th>
          <th style="width: 70ch;">Description</th>
          <th>Credit</th>
        </thead>
        <tbody>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div id="toSave2" class="container-lg py-4">
    <style>
      table{
        margin: auto;
      }

      table, th, td{
        border: solid 1px black;
        text-align: center;
        padding: 10px;
      }
    </style>
    <div style="margin-top: 10px; margin-bottom: 10px;">
      <h4 style="margin-left: 10px;">1st Year: FIRST SEMESTER</h4>
      <table>
        <thead>
          <th>Code</th>
          <th style="width: 70ch;">Description</th>
          <th>Credit</th>
        </thead>
        <tbody>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div style="margin-top: 10px; margin-bottom: 10px;">
      <h4 style="margin-left: 10px;">1st Year: FIRST SEMESTER</h4>
      <table>
        <thead>
          <th>Code</th>
          <th style="width: 70ch;">Description</th>
          <th>Credit</th>
        </thead>
        <tbody>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
          <tr>
            <td>IT 211</td>
            <td> Introduction to Arts and Math </td>
            <td> 3 </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</x-registrar_layout>