$(document).ready(function() {
    const exportOptions = [
      {
        text: 'Print',
        extend: 'print',
        exportOptions: {
          columns: ':not(:last-child)'
        }
      },
      {
        text: 'CSV',
        extend: 'csv',
        exportOptions: {
          columns: ':not(:last-child)'
        }
      },
      {
        text: 'PDF',
        extend: 'pdf',
        exportOptions: {
          columns: ':not(:last-child)'
        }
      },
      {
        text: 'Excel',
        extend: 'excel',
        exportOptions: {
          columns: ':not(:last-child)' //Dili apilon og export ang last na column
        }
      }
    ];

    $('#curriculum_table').DataTable({
      dom: 'Bfrtip',
      buttons: [
        {
          text: 'Export As',
          extend: 'collection',
          buttons: exportOptions
        }
      ],
      columnDefs: [
        { targets: [3], orderable: false } //dle apilon og filter anag action na column
      ],
      initComplete: function () {
        $('.dt-buttons').addClass('btn-group');
        $('.dt-buttons button').removeClass('dt-button').addClass('btn btn-secondary');
      }

    });
    const wrapper = $('#curriculum_table_wrapper');
    wrapper.find('.dataTables_info, .dataTables_paginate').wrapAll('<div class="pagination-container d-flex flex-row align-items-center justify-content-between"></div>');
  });
