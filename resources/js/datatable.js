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

    $('#exportable_table').DataTable({
      dom: 'Bfrtip',
      buttons: [
        {
          text   : 'Export As',
          extend : 'collection',
          buttons: exportOptions
        }
      ],
      columnDefs: [
        { targets: -1, orderable: false } //dle apilon og filter anag last na column
      ],
      initComplete: function () {
        $('.dt-buttons').addClass('btn-group');
        $('.dt-buttons button').removeClass('dt-button').addClass('btn btn-secondary');
      }

    });

    $('#regular_datatable').DataTable({
      columnDefs: [
        { targets: -1, orderable: false }, //dle apilon og filter anag last na column
      ],
      initComplete: function () {
        $('.dt-buttons').addClass('btn-group');
        $('.dt-buttons button').removeClass('dt-button').addClass('btn btn-secondary');
      }

    });

    const wrapper = $('#curriculum_table_wrapper');
    wrapper.find('.dataTables_info, .dataTables_paginate').wrapAll('<div class="pagination-container d-flex flex-row align-items-center justify-content-between"></div>');

    const wrapper_list = $('#curriculum_table_list_wrapper');
    wrapper_list.find('.dataTables_info, .dataTables_paginate').wrapAll('<div class="pagination-container d-flex flex-row align-items-center justify-content-between"></div>');
  });
